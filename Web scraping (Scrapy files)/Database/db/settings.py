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
	'host': '************',
	'port': '***********',
	'username': '*********',
	'password': '********',
	'database': '***********'
}
ITEM_PIPELINES = {
	'db.pipelines.DbPipeline':300,
}
# Crawl responsibly by identifying yourself (and your website) on the user-agent
#USER_AGENT = 'db (+http://www.yourdomain.com)'
