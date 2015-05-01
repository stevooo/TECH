from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.spider import Spider
from scrapy.selector import Selector
from TECH.items import TechItem
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.http import Request

class MySpider(CrawlSpider):
	name = "skynews"
	allowed_domains = ["news.sky.com"]
	start_urls = ["http://news.sky.com/technology"]
	
	rules = [Rule(SgmlLinkExtractor(allow=[r'.*',],), callback="parse", follow=True), ]
	
	def parse(self, response):
		item = TechItem()
		links = response.xpath('//div/div/div/div/div/div/ol/li')
		
		items = []
		for link in links:
			item = TechItem()
			item ["link"] = link.xpath('a/@href').extract()[0]
			item ["storylinks"] ='http://news.sky.com'+item["link"]
			storylinks = ''.join(item["storylinks"])
			request = Request(storylinks, callback=self.parse_items)
			request.meta['item'] = item
			yield request
			yield item
		
	
	def parse_items(sel,response):
		stories = response.xpath("//body/div/div/article")
		items = []
		for sel in stories: 		
			item = TechItem()
			item ["link"] = response.request.url
			item ["category"] = sel.xpath('category/p/text()').extract()
			item ["category2"] = sel.xpath('category/p/text()').extract()
			item ["headline"] = sel.xpath('header/h1/span/text()').extract()
			item ["author"] = sel.xpath('div/div/div/p[@class="story__byline"]/text()').extract()
			item ["image"] = sel.xpath('div/div[1]/div/div[@class="image"]/div/img/@src').extract()
			item ["content"] = sel.xpath('div[2]/div[2]/div[2]/p').extract()
			items.append(item)
		return items