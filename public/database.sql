CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE forum (
     id
     section
     category
);

CREATE TABLE donations (
     id
     amount NOT NULL,
     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
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
