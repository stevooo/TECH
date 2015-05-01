from sqlalchemy.orm import sessionmaker
from models import Stories, db_connect, create_stories_table


class DbPipeline(object):

	def __init__(self):
		
		engine = db_connect()
		create_stories_table(engine)
		self.Session = sessionmaker(bind=engine)
	def process_item(self, item, spider):
	
		session = self.Session()
		story = Stories(**item)
		
		try:
			session.add(story)
			session.commit()
		except:
			session.rollback()
			raise
		finally:
			session.close()
		return item