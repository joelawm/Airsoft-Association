CREATE DATABASE NAA;

USE NAA;

--User table for overall creation
CREATE TABLE NAA.User (
     UserId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (UserId),
     Username VARCHAR(25) NOT NULL UNIQUE,
     Password VARCHAR(255) NOT NULL,
     Email VARCHAR(75) NOT NULL UNIQUE,
     FirstName VARCHAR(30) NOT NULL,
     LastName VARCHAR(30) NOT NULL,
     ProfilePicture VARCHAR(50) UNIQUE,
     Created DATETIME DEFAULT CURRENT_TIMESTAMP,
	Role INT DEFAULT 100
);

-- Forum starts here and is in order
CREATE TABLE NAA.Category (
     CategoryId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (CategoryId),
     CategoryTitle VARCHAR(75) NOT NULL UNIQUE,
	PlaceNumber INT NOT NULL
);

CREATE TABLE NAA.Topic (
     TopicId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (TopicId),
     CategoryId INT NOT NULL,
     FOREIGN KEY fkCat(CategoryId) REFERENCES Category(CategoryId),
     TopicTitle VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE NAA.SubTopic (
     SubTopicId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (SubTopicId),
     TopicId INT NOT NULL,
     FOREIGN KEY fkcat(TopicId) REFERENCES Topic(TopicId),
     SubTopicTitle VARCHAR(75) NOT NULL UNIQUE
);

CREATE TABLE NAA.Post (
     PostId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (PostId),
     TopicId INT NOT NULL,
	FOREIGN KEY fkcat(TopicId) REFERENCES Topic(TopicId),
     PostAuthor VARCHAR(25),
     PostTitle VARCHAR(128),
     PostContent VARCHAR(10000),
     PostCreated DATETIME DEFAULT CURRENT_TIMESTAMP,
     PostViewCount INT NOT NULL
);










CREATE TABLE Content (
     ContentId INT NOT NULL AUTO_INCREMENT,
     UserId INT NOT NULL,
     PRIMARY KEY (ContentId)
     FOREIGN KEY (UserId) REFERENCES User.UserId
);

--NAA information
CREATE TABLE donations (
     id INT NOT NULL FOREIGN KEY AUTO_INCREMENT,
     FOREIGN KEY (UserId) REFERENCES User
     Amount INT NOT NULL,
     Created DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE fields (
     id
     fieldname
     fieldaddmission
     gametype
     address
     fpslimits
     paymenttypes
     storeonlocation
     wateronlocation
     fullauto
     generalrules
     waiver
     fieldwebsite
     parking
     state
);

CREATE TABLE sponsors (
     id
     company
     profilepicture
     websiteaddress
);

CREATE TABLE stores (
     id
     company
     safewebsite
     typeofgoods
     storeaddress
);
