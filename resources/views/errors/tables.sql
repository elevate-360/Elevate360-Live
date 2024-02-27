CREATE TABLE tblContactDetails (
    cdId int primary key AUTO_INCREMENT,
    cdKey varchar(64) not null,
    cdValue varchar(255) not null
);

INSERT INTO tblContactDetails (cdKey, cdValue) VALUES ('contactNumber', '96647288574');
INSERT INTO tblContactDetails (cdKey, cdValue) VALUES ('emailAddress', 'info@elevate360.in');
INSERT INTO tblContactDetails (cdKey, cdValue) VALUES ('city', 'Surat');
INSERT INTO tblContactDetails (cdKey, cdValue) VALUES ('state', 'Gujarat');
INSERT INTO tblContactDetails (cdKey, cdValue) VALUES ('stateShort', 'Guj');
INSERT INTO tblContactDetails (cdKey, cdValue) VALUES ('country', 'India');
INSERT INTO tblContactDetails (cdKey, cdValue) VALUES ('countryShort', 'Ind');

CREATE TABLE tblReviews (
    rId int primary key AUTO_INCREMENT,
    rName varchar(128) not null,
    rProfession varchar(128) not null,
    rReview varchar(512) not null,
    rImg varchar(512) not null,
    rIsActive char(1) default '1'
);

INSERT INTO tblReviews (rName, rProfession, rReview, rImg) VALUES ('Parag Ambaliya', 'SEO Executive', 'Elevate360 expertly blends IT solutions with SEO, enhancing our online presence and leads. Their commitment and expertise make them an invaluable digital partner.', 'parag.png');
INSERT INTO tblReviews (rName, rProfession, rReview, rImg) VALUES ('Himanshu Ghevariya', 'Inventory Manager', 'Elevate360 revolutionized our e-commerce with a custom IMS, boosting efficiency and customer satisfaction. Their outstanding support has been a game-changer for us.', 'himanshu.png');

CREATE TABLE tblLinks (
    lId int primary key AUTO_INCREMENT,
    lTitle varchar(255) not null,
    lAddress varchar(1024) not null,
    lClass varchar(64),
    lIsActive char(1) default '1'
);

INSERT INTO tblLinks (lTitle, lAddress, lClass) VALUES ('Twitter', 'https://twitter.com/Elevate__360', 'fab fa-twitter');
INSERT INTO tblLinks (lTitle, lAddress, lClass) VALUES ('Instagram', 'https://www.instagram.com/elevate360.in', 'fab fa-instagram');
INSERT INTO tblLinks (lTitle, lAddress, lClass) VALUES ('Linkedin', 'https://www.linkedin.com/company/elevate-360/', 'fab fa-linkedin-in');
INSERT INTO tblLinks (lTitle, lAddress, lClass) VALUES ('Youtube', 'https://www.youtube.com/channel/UC1KjYkmXkssv4FHVd_c0m0g', 'fab fa-youtube');
INSERT INTO tblLinks (lTitle, lAddress, lClass) VALUES ('Facebook', 'https://www.facebook.com/profile.php?id=61554194414644', 'fab fa-facebook-f');
