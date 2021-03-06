from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.spider import Spider
from scrapy.selector import Selector
from TECH.items import TechItem
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.http import Request


class MySpider(CrawlSpider):
	name = "geek"
	allowed_domains = ["geek.com"]
	start_urls = ["http://www.geek.com/feed/"]	
	
	rules = [Rule(SgmlLinkExtractor(allow=[r'.*',],), callback="parse", follow=True), ]
	
	def parse(self, response):
		item = TechItem()
		links = response.xpath("//link")
		
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
	
	def parse_items(sel, response):
		stories = response.xpath("//section")
		items = []
		for sel in stories: 		
			item = TechItem()
			item ["link"] = response.request.url
			item ["category"] = sel.xpath('header/p/span[2]/a/text()').extract()
			item ["category2"] = sel.xpath('header/p/span[20]/a/text()').extract()
			item ["headline"] = sel.xpath('div[2]/h2/a/text()').extract()
			item ["author"] = sel.xpath('div/div/div/span/span/a/text()').extract()
			item ["image"] = sel.xpath('div/div/figure/img/@src').extract()
			item ["content"] = sel.xpath('div/div/article/p').extract()
			items.append(item)
		return items