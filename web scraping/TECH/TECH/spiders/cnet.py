from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.spider import Spider
from scrapy.selector import Selector
from TECH.items import TechItem
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.http import Request


class MySpider(CrawlSpider):
	name = "cnet"
	allowed_domains = ["cnet.com"]
	start_urls = ["http://www.cnet.com/uk/news/"]	
	
	rules = [Rule(SgmlLinkExtractor(allow=[r'.*',],), callback="parse", follow=True), ]
	
	def parse(self, response):
		item = TechItem()
		links = response.xpath('//div[@id="fourAndOneListing"]/div')
		
		items = []
		for link in links:
			item = TechItem()
			item ["link"] = link.xpath('div/div/div/a/@href').extract()[0]
			
			item ["storylinks"] = 'http://www.cnet.com'+item["link"]
			storylinks = ''.join(item["storylinks"])
			request = Request(storylinks, callback=self.parse_items)
			request.meta['item'] = item
			yield request
			yield item
	
	def parse_items(sel, response):
		stories = response.xpath("//article[@id='article-body']")
		items = []
		for sel in stories: 		
			item = TechItem()
			item ["link"] = response.request.url
			item ["category"] = sel.xpath('header/p/span[2]/a/text()').extract()
			item ["category2"] = sel.xpath('header/p/span[20]/a/text()').extract()
			item ["headline"] = sel.xpath('div/h1').extract()
			item ["author"] = sel.xpath('header/p/span[2]/a/text()').extract()
			item ["image"] = sel.xpath('div[2]/figure/text()').extract()
			item ["content"] = sel.xpath('div[2]/p').extract()
			items.append(item)
		return items