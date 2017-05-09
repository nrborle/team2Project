CREATE TABLE Event (
	id int NOT NULL AUTO_INCREMENT,
	date DATE,
	level VARCHAR(255),
	location VARCHAR(255),
	PRIMARY KEY (id)
	);

CREATE TABLE Speaker (
	eventID int NOT NULL,
	speaker VARCHAR(255) NOT NULL,
	finalScore DOUBLE,
	squad VARCHAR(255),
	PRIMARY KEY (eventID, speaker),
	FOREIGN KEY (eventID) REFERENCES Event(id)
);

CREATE TABLE user (
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255) NOT NULL,
	permissions boolean,
	PRIMARY KEY (username)
);

INSERT INTO user
VALUES ("moot", "moot", 1);
