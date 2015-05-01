from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.spider import Spider
from scrapy.selector import Selector
from TECH.items import TechItem
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.http import Request

class MySpider(CrawlSpider):
	name = "BBC"
	allowed_domains = ["bbc.co.uk"]
	start_urls = ["http://feeds.bbci.co.uk/news/technology/rss.xml",]
	
	rules = [Rule(SgmlLinkExtractor(allow=[r'.*',], restrict_xpaths=('\\link')), callback="parse", follow=True), ]
	
	def parse(self, response):
		item = TechItem()
		links = response.xpath('//link')
		
		items = []
		for link in links:
			item = TechItem()
			item ["link"] = link.xpath('text()').extract()[0]
			item ["storylinks"] = item ["link"]
			storylinks = item["storylinks"]
			request = Request(storylinks, callback=self.parse_items)
			request.meta['item'] = item
			yield request
			yield item
		
	
	def parse_items(sel,response):
		stories = response.xpath("//div[@class='story-body']")
		items = []
		for sel in stories:
			item = TechItem()
			item ["link"] = response.request.url
			item ["category"] = sel.xpath('category/p/text()').extract()
			item ["category2"] = sel.xpath('category/p/text()').extract()
			item ["headline"] = sel.xpath('h1/text()').extract()
			item ["author"] = sel.xpath('div[@class="byline"]/span[@class="byline__name"]/text()').extract()
			item ["image"] = sel.xpath('div[@class="story-body__inner"]/figure[1]/img/@src').extract()
			item ["content"] = sel.xpath('div[@class="story-body__inner"]/p').extract()
			items.append(item)
		return items