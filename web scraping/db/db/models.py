from sqlalchemy import create_engine, Column, Integer, String, DateTime
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.engine.url import URL

import settings

DeclarativeBase = declarative_base()

def db_connect():
    """
    Performs database connection using database settings from settings.py.
    Returns sqlalchemy engine instance
    """
    return create_engine(URL(**settings.DATABASE))
	
	
def create_stories_table(engine):
	
	DeclarativeBase.metadata.create_all(engine)
	
	
class Stories(DeclarativeBase):
	__tablename__ = "stories"
	
	storyid = Column(Integer, primary_key=True)
	category = Column('category', String)
	category2 = Column('category2', String)
	link = Column('link', String, nullable=True)
	headline = Column('headline', String)
	author  = Column('author', String, nullable=True)
	image = Column('image', String)
	content = Column('content', String)

	