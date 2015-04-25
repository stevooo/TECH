# -*- coding: utf-8 -*-

# Scrapy settings for TECH project
#
# For simplicity, this file contains only the most important settings by
# default. All the other settings are documented here:
#
#     http://doc.scrapy.org/en/latest/topics/settings.html
#

BOT_NAME = 'TECH'

SPIDER_MODULES = ['TECH.spiders']
NEWSPIDER_MODULE = 'TECH.spiders'
ITEM_PIPELINES = {
	'TECH.pipelines.TechPipeline':300,
}

# Crawl responsibly by identifying yourself (and your website) on the user-agent
#USER_AGENT = 'TECH (+http://www.yourdomain.com)'
