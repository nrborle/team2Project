CREATE TABLE Event (
	id int NOT NULL,
	date DATE,
	level int,
	location VARCHAR(255),
	teller VARCHAR(255),
	impromptuTopic VARCHAR(255),
	timekeeper1 VARCHAR(255),
	timekeeper2 VARCHAR(255),
	judge1 VARCHAR(255),
	judge2 VARCHAR(255),
	judge3 VARCHAR(255),
	PRIMARY KEY (id)
	);

CREATE TABLE Topic (
	name VARCHAR(255) NOT NULL,
	eventID int,
	PRIMARY KEY (name),
	FOREIGN KEY (eventID) REFERENCES Event(id)
);

CREATE TABLE Speaker (
	eventID int NOT NULL,
	id int NOT NULL,
	name VARCHAR(255),
	finalScore DOUBLE(4,3),
	preparedTime TIME,
	impromptuTime TIME,
	topicName VARCHAR(255),
	PRIMARY KEY (eventID, id),
	FOREIGN KEY (eventID) REFERENCES Event(id),
	FOREIGN KEY (topicName) REFERENCES Topic(name)
);

CREATE TABLE Scoresheet (
	id int NOT NULL,
	row1 int,
	row2 int,
	row3 int,
	row4 int,
	row5 int,
	row6 int,
	row7 int,
	row8 int,
	row9 int,
	row10 int,
	row11 int,
	row12 int,
	row13 int,
	row14 int,
	eventID int,
	speakerID int,
	PRIMARY KEY (id),
	FOREIGN KEY (eventID, speakerID) REFERENCES Speaker(eventID, id)
);

CREATE TABLE user (
	username VARCHAR(255) NOT NULL,
	password VARCHAR(255),
	PRIMARY KEY (username)
);
