/**
* CREATE DATABASE
*/

CREATE DATABASE NullDateIdiormTwig;

USE NullDateIdiormTwig;


/**
* CREATE TABLES STRUCTURE
*/


/**
* Create Test Table
*/
CREATE TABLE Test(
	TestID INTEGER AUTO_INCREMENT PRIMARY KEY,
	Time TIME
);

INSERT INTO Test
VALUES
	(NULL, NULL),
	(NULL, '01:12:33'),
	(NULL, '21:22:23'),
	(NULL, '11:52:13'),
	(NULL, '01:22:23'),
	(NULL, '05:32:43'),
	(NULL, '08:32:43'),
	(NULL, '10:32:43'),
	(NULL, '14:52:53'),
	(NULL, '17:42:23'),
	(NULL, '18:22:13');