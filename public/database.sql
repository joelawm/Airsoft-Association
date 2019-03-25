CREATE DATABASE NAA;

USE NAA;

--User table for overall creation
CREATE TABLE User (
     UserId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (UserId),
     Username VARCHAR(50) NOT NULL UNIQUE,
     Password VARCHAR(255) NOT NULL,
     Email VARCHAR(50) NOT NULL UNIQUE,
     FirstName VARCHAR(30) NOT NULL,
     LastName VARCHAR(30) NOT NULL,
     ProfilePicture byrte stream or blob
     Created DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Forum starts here and is in order
CREATE TABLE Category (
     CategoryId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (CategoryId),
     CategoryName VARCHAR(75) NOT NULL UNIQUE
);

CREATE TABLE Topic (
     TopicId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (TopicId),
     CategoryId INT NOT NULL,
     FOREIGN KEY (CategoryId) REFERENCES Category.CategoryId,
     TopicName VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE SubTopic (
);

CREATE TABLE Forum (
);

CREATE TABLE Post (
     id
     content VARCHAR(10000),
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
