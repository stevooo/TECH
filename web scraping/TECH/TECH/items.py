# -*- coding: utf-8 -*-

# Define here the models for your scraped items
#
# See documentation in:
# http://doc.scrapy.org/en/latest/topics/items.html

import scrapy
from scrapy.item import Item, Field


class TechItem(scrapy.Item):
	category2 = Field()
	category = Field()
	link = Field()
	storylinks = Field()
	headline = Field()
	author = Field()
	image = Field()
	content = Field()
