from scrapy.spider import BaseSpider
import json
from db.items import DbItem

class MySpider(BaseSpider):
	name = "DB"
	start_urls = ['file://127.0.0.1/Users/stephen/Documents/webscraping/TECH/geek.json',
	'file://127.0.0.1/Users/stephen/Documents/webscraping/TECH/techspot.json']
	
	

	def parse(self, response):
		jsonresponse = json.loads(response.body_as_unicode())
		items = []
		num = len(jsonresponse)
		for i in xrange(len(jsonresponse)):
			item = DbItem()
			item["category"] = jsonresponse[i]["category"]
			item["category2"] = jsonresponse[i]["category2"]
			item["author"] = jsonresponse[i]["author"]
		
			
			item["headline"] = jsonresponse[i]["headline"]
			item["image"] = jsonresponse[i]["image"]
			item["content"] = jsonresponse[i]["content"]
			item["link"] = jsonresponse[i]["link"]
			items.append(item)
		return items