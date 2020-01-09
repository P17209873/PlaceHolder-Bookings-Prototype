DROP DATABASE IF EXISTS prototype;

CREATE DATABASE prototype;

USE prototype;

DROP TABLE IF EXISTS EventType;

CREATE TABLE EventType (
    EventTypeID INT(11) NOT NULL AUTO_INCREMENT,
    EventType VARCHAR(255),
    PRIMARY KEY (EventTypeID)
);

CREATE TABLE Event (
    EventID INT(11) NOT NULL AUTO_INCREMENT,
    EventName VARCHAR(255),
    DateOfEvent DATE,
    TimeStart TIME,
    TimeEnd TIME,
    EventTypeID INT(11),
    PRIMARY KEY (EventID),
    FOREIGN KEY (EventTypeID) REFERENCES EventType(EventTypeID)
);

INSERT INTO EventType (EventType) VALUES ('Wedding');
INSERT INTO EventType (EventType) VALUES ('Gig');
INSERT INTO EventType (EventType) VALUES ('Party');
INSERT INTO EventType (EventType) VALUES ('Film-Showing');