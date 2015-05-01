from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.spider import Spider
from scrapy.selector import Selector
from TECH.items import TechItem
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.http import Request


class MySpider(CrawlSpider):
	name = "techspot"
	allowed_domains = ["techspot.com"]
	start_urls = ["http://www.techspot.com/trending/"]	
	
	rules = [Rule(SgmlLinkExtractor(allow=[r'.*',],), callback="parse", follow=True), ]
	
	def parse(self, response):
		item = TechItem()
		links = response.xpath("//html/body/div/section/div/div/div/div/article/div/h2")

		items = []
		for link in links:
			item = TechItem()
			item ["link"] = link.xpath('a/@href').extract()[0]
			
			item ["storylinks"] = 'http://www.techspot.com'+item["link"]
			storylinks = ''.join(item["storylinks"])
			request = Request(storylinks, callback=self.parse_items)
			request.meta['item'] = item
			yield request
			yield item
	
	def parse_items(sel, response):
		stories = response.xpath("//section[@id='content']")
		items = []
		for sel in stories: 		
			item = TechItem()
			item ["link"] = response.request.url
			item ["category"] = sel.xpath('header/p/span[2]/a/text()').extract()
			item ["category2"] = sel.xpath('header/p/span[20]/a/text()').extract()
			item ["headline"] = sel.xpath('article/header/div/section/h1/text()').extract()
			item ["author"] = sel.xpath('article/header/div/section/em/a/text()').extract()
			item ["image"] = sel.xpath('article/div/div/a/img/@src').extract()
			item ["content"] = sel.xpath('article/div/div/div/div/p').extract()
			items.append(item)
		return items