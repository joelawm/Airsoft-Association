CREATE DATABASE NAA;

USE NAA;

--User table for overall creation
CREATE TABLE User (
     UserId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (UserId),
     Username VARCHAR(25) NOT NULL UNIQUE,
     Password VARCHAR(50) NOT NULL,
     Email VARCHAR(75) NOT NULL UNIQUE,
     FirstName VARCHAR(30) NOT NULL,
     LastName VARCHAR(30) NOT NULL,
     ProfilePicture VARCHAR (50) UNIQUE,
     Created DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Forum starts here and is in order
CREATE TABLE Category (
     CategoryId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (CategoryId),
     CategoryTitle VARCHAR(75) NOT NULL UNIQUE
);

CREATE TABLE SubCategory (
     SubCategoryId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (SubCategoryId),
     CategoryId INT NOT NULL,
     FOREIGN KEY fkcat(CategoryId) REFERENCES Category(CategoryId),
     SubCategoryTitle VARCHAR(75) NOT NULL UNIQUE
);

<ol class="topic-styling">';'
<li><span class="glyphicon glyphicon glyphicon-minus" aria-hidden="true"><a href="#">' . $row["CategoryName"]. '</a></span></li>
</ol>
</li>';

CREATE TABLE Topic (
     TopicId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (TopicId),
     CategoryId INT NOT NULL,
     FOREIGN KEY fkCat(CategoryId) REFERENCES Category(CategoryId),
     TopicName VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE Post (
     PostId INT NOT NULL AUTO_INCREMENT,
     PRIMARY KEY (PostId),
     CategoryId INT NOT NULL,
     TopicId INT NOT NULL,
     Author VARCHAR(25),
     Title VARCHAR(128),
     Content TEXT,
     Created DATETIME DEFAULT CURRENT_TIMESTAMP,
     View INT NOT NULL
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
