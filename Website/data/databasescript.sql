CREATE Database justaskdb Collate 'utf8_general_ci';
USE justaskdb;

create Table User
(
	ID Int NOT NULL Primary Key AUTO_INCREMENT,
    Vorname VARCHAR(45),
    Nachname VARCHAR(45),
    Email VARCHAR(45),
    Profibild VARCHAR(100),
		Passwort VARCHAR(30),
    Gesperrt BOOLEAN
);

create table Frage
(
	ID Int NOT NULL Primary Key AUTO_INCREMENT,
  	Inhalt VARCHAR(300),
  	Titel VARCHAR(45),
		Zeit TIME,
		Upvotes INT
);

create table Antwort
(
	ID Int NOT NULL Primary Key AUTO_INCREMENT,
	Inhalt VARCHAR(300),
	istHilfreich BOOLEAN,
	Frage_ID int,
	User_ID int,
	FOREIGN KEY (Frage_ID) REFERENCES Frage(ID),
	FOREIGN KEY (User_ID) REFERENCES User(ID)

);

create table Thema
(
	ID Int NOT NULL Primary Key AUTO_INCREMENT,
	Thema VARCHAR(45)
);

create table Frage_Thema
(
	ID Int NOT NULL Primary Key AUTO_INCREMENT,
	Frage_ID int,
	Thema_ID int,
	FOREIGN KEY (Frage_ID) REFERENCES Frage(ID),
	FOREIGN Key (Thema_ID) REFERENCES Thema(ID)
);

create table Score_User_Themen
(
	ID Int NOT NULL Primary Key AUTO_INCREMENT,
	Score Int,
	istExperte BOOLEAN,
	Thema_ID int,
	User_ID int,
	FOREIGN Key (Thema_ID) REFERENCES Thema(ID),
	FOREIGN Key (User_ID) REFERENCES User(ID)
);
user
create table User_Frage
(
	ID Int NOT NULL Primary Key AUTO_INCREMENT,
	hasVoted BOOLEAN,
	Frage_ID int,
	User_ID int,
	FOREIGN KEY (Frage_ID) REFERENCES Frage(ID),
	FOREIGN KEY (User_ID) REFERENCES User(ID)
);


CREATE USER 'justaskdbuser'@'localhost' IDENTIFIED BY '<ZY.K4!e>g?U#.+]u4mf63';
GRANT SELECT,INSERT,UPDATE,DELETE on justaskdb.* to justaskdbuser@localhost;


SELECT * FROM user;

INSERT INTO user(ID, Vorname, Nachname,Email,Profibild,Passwort,Gesperrt)
VALUES(1, "Lukas", "Schwab", "ex@me.com", "someurl", "asdf", false);


INSERT INTO frage(ID,Inhalt,Titel,Zeit,Upvotes)
VALUES(1, "Das ist eine seeeeeeeeeeeeehr lange Frage...",
		"Testfrage :D", null, 41
);

SELECT * FROM frage;


INSERT INTO frage(Inhalt,Titel,Zeit,Upvotes)
VALUES("Das ist auch eine extreeeeeeeem lange Frage...",
		"Testfrage2 :D", null, 99
);

INSERT INTO frage(Inhalt,Titel,Zeit,Upvotes)
VALUES("Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.",
		"Lorem :D", null, 99
);


