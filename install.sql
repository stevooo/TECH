CREATE TYPE storyCategory as ENUM ('mobileTablet','business','hardware','software','wearables','tvs','gaming','socialMedia');
CREATE TABLE Stories (StoryID SERIAL PRIMARY KEY, Headline varchar(100) NOT NULL, Author varchar(50), Category storyCategory NOT NULL, Source VARCHAR(400), Content varchar(10000) NOT NULL, Image VARCHAR(400) NOT NULL, DatePublished TIMESTAMP DEFAULT DATE_TRUNC('second',NOW()), Views BIGINT);
CREATE TABLE Users (UserID SERIAL PRIMARY KEY, Email VARCHAR(100) NOT NULL, Password VARCHAR(30) NOT NULL, FirstName varchar(30) NOT NULL, LastName varchar(30) NOT NULL, DateJoined TIMESTAMP DEFAULT DATE_TRUNC('second',NOW()), Country varchar(30), Popular BOOLEAN, MobileTablet BOOLEAN, Business BOOLEAN, Hardware BOOLEAN, Software BOOLEAN, Wearables BOOLEAN, Tvs BOOLEAN, Gaming BOOLEAN, SocialMedia BOOLEAN); 
CREATE TABLE Comments (CommentID SERIAL PRIMARY KEY, StoryID int REFERENCES Stories(StoryID) NOT NULL, UserID int REFERENCES Users(UserID) NOT NULL, CommentDate TIMESTAMP DEFAULT DATE_TRUNC('second',NOW()), CommentContent varchar(1000) NOT NULL);


ALTER TABLE distributors ADD COLUMN  DatePublished TIMESTAMP DEFAULT DATE_TRUNC('second',NOW());