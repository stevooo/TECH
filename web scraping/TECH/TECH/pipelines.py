# -*- coding: utf-8 -*-

# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: http://doc.scrapy.org/en/latest/topics/item-pipeline.html
from scrapy.exceptions import DropItem

class TechPipeline(object):

    def process_item(self, item, spider):
		if not(item['headline']):
			raise DropItem()
		else:
		
			if not(item['content']):
				raise DropItem()
			else:		
		
				if not(item['image']):
					raise DropItem()
				else:
					return item