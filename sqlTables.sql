CREATE DATABASE IF NOT EXISTS user_management;

CREATE TABLE user(
	id INT NOT NULL AUTO_INCREMENT,
	username VARCHAR(100) NOT NULL UNIQUE,
	email VARCHAR(255) NOT NULL UNIQUE,
	password VARCHAR(200) NOT NULL,
	role INT NOT NULL,
	CONSTRAINT user_id PRIMARY KEY (id)
);


CREATE TABLE user_profile(
	id INT NOT NULL AUTO_INCREMENT,
	user_id INT NOT NULL,
	fname VARCHAR(255) NOT NULL,
	lname VARCHAR(255) NOT NULL,
	address VARCHAR(255) NOT NULL,
	phone int(20) NOT NULL,
	city VARCHAR(255) NOT NULL,
	PRIMARY KEY (id),
	FOREIGN KEY (user_id) REFERENCES user(id) ON DELETE CASCADE ON UPDATE CASCADE
);