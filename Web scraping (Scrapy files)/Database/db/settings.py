# -*- coding: utf-8 -*-

# Scrapy settings for db project
#
# For simplicity, this file contains only the most important settings by
# default. All the other settings are documented here:
#
#     http://doc.scrapy.org/en/latest/topics/settings.html
#

BOT_NAME = 'db'

SPIDER_MODULES = ['db.spiders']
NEWSPIDER_MODULE = 'db.spiders'

DATABASE = {
	'drivername': 'postgresql',
	'host': 'db.dcs.aber.ac.uk',
	'port': '5432',
	'username': 'stm26',
	'password': 'stephen19',
	'database': 'cs399_14_15_stm26'
}
ITEM_PIPELINES = {
	'db.pipelines.DbPipeline':300,
}
# Crawl responsibly by identifying yourself (and your website) on the user-agent
#USER_AGENT = 'db (+http://www.yourdomain.com)'
