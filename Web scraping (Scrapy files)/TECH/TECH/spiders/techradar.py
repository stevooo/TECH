from scrapy.contrib.spiders import CrawlSpider, Rule
from scrapy.spider import Spider
from scrapy.selector import Selector
from TECH.items import TechItem
from scrapy.contrib.linkextractors.sgml import SgmlLinkExtractor
from scrapy.http import Request


class MySpider(CrawlSpider):
	name = "techradar"
	allowed_domains = ["techradar.com"]
	start_urls = ["http://www.techradar.com/news"]	
	
	rules = [Rule(SgmlLinkExtractor(allow=[r'.*',],), callback="parse", follow=True), ]
	
	def parse(self, response):
		item = TechItem()
		links = response.xpath('//div[@class="listingResults"]/div')
		
		items = []
		for link in links:
			item = TechItem()
			item ["link"] = link.xpath('a/@href').extract()[0]
			
			item ["storylinks"] = 'http://www.techradar.com'+item["link"]
			storylinks = ''.join(item["storylinks"])
			request = Request(storylinks, callback=self.parse_items)
			request.meta['item'] = item
			yield request
			yield item
	
	def parse_items(sel, response):
		stories = response.xpath("//article[@class='news-article']")
		items = []
		for sel in stories: 		
			item = TechItem()
			item ["link"] = response.request.url
			item ["category"] = sel.xpath('header/p/span[2]/a/text()').extract()
			item ["category2"] = sel.xpath('header/p/span[20]/a/text()').extract()
			item ["headline"] = sel.xpath('header/h1/text()').extract()
			item ["author"] = sel.xpath('header/p/span[1]/a/text()').extract()
			item ["image"] = sel.xpath('section/div/img[1]/@src').extract()
			item ["content"] = sel.xpath('section/div[@class="text-copy bodyCopy auto"]/p').extract()
			items.append(item)
		return items