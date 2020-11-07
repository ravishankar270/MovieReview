CREATE TABLE `User` (
	`user_id` INT NOT NULL AUTO_INCREMENT,
	`username` varchar(255),
	`password` varchar(255),
	`Phone_no` FLOAT NOT NULL,
	`Email_id` varchar(255) NOT NULL,
	`cliend_id` varchar(500) NOT NULL,
	PRIMARY KEY (`user_id`)
);

CREATE TABLE `Reviews` (
	`review_id` INT NOT NULL AUTO_INCREMENT,
	`description` varchar(255),
	`review_likes` INT NOT NULL,
	`Spoiler_tag` varchar(255) NOT NULL,
	`user_id` INT NOT NULL,
	`E_id` INT NOT NULL,
	PRIMARY KEY (`review_id`)
);

CREATE TABLE `Entertainment` (
	`Director` varchar(255) NOT NULL,
	`Name` varchar(255) NOT NULL,
	`E_id` INT NOT NULL AUTO_INCREMENT,
	`MPPA` varchar(255) NOT NULL,
	`genre` varchar(255) NOT NULL,
	`images` varchar(255) NOT NULL,
	`rating` FLOAT NOT NULL,
	`description` varchar(255) NOT NULL,
	`admin_id` INT NOT NULL,
	PRIMARY KEY (`E_id`)
);

CREATE TABLE `Admin` (
	`admin_name` varchar(255) NOT NULL,
	`admin_id` INT NOT NULL,
	`admin_email` varchar(255) NOT NULL,
	`admin_password` varchar(255) NOT NULL,
	PRIMARY KEY (`admin_id`)
);

CREATE TABLE `Movie` (
	`runtime` FLOAT NOT NULL,
	`E_id` INT NOT NULL,
	PRIMARY KEY (`runtime`,`E_id`)
);

CREATE TABLE `TV shows` (
	`no_of_seasons` INT NOT NULL,
	`no_of_episodes` INT NOT NULL,
	`E_id` INT NOT NULL,
	PRIMARY KEY (`no_of_seasons`,`E_id`)
);

CREATE TABLE `rating` (
	`user_id` INT NOT NULL,
	`E_id` INT NOT NULL,
	PRIMARY KEY (`user_id`,`E_id`)
);

CREATE TABLE `watch_list` (
	`user_id` INT NOT NULL,
	`E_id` INT NOT NULL,
	PRIMARY KEY (`user_id`,`E_id`)
);

CREATE TABLE `fan theory` (
	`theory_id` INT NOT NULL AUTO_INCREMENT,
	`question` varchar(1000) NOT NULL,
	`user_id` INT NOT NULL,
	PRIMARY KEY (`theory_id`)
);

CREATE TABLE `Comments` (
	`comment_id` INT NOT NULL AUTO_INCREMENT,
	`theory_id` INT NOT NULL,
	`user_id` INT NOT NULL,
	`comments` varchar(1000) NOT NULL,
	PRIMARY KEY (`comment_id`)
);

ALTER TABLE `Reviews` ADD CONSTRAINT `Reviews_fk0` FOREIGN KEY (`user_id`) REFERENCES `User`(`user_id`);

ALTER TABLE `Reviews` ADD CONSTRAINT `Reviews_fk1` FOREIGN KEY (`E_id`) REFERENCES `Entertainment`(`E_id`);

ALTER TABLE `Entertainment` ADD CONSTRAINT `Entertainment_fk0` FOREIGN KEY (`admin_id`) REFERENCES `Admin`(`admin_id`);

ALTER TABLE `Movie` ADD CONSTRAINT `Movie_fk0` FOREIGN KEY (`E_id`) REFERENCES `Entertainment`(`E_id`);

ALTER TABLE `TV shows` ADD CONSTRAINT `TV shows_fk0` FOREIGN KEY (`E_id`) REFERENCES `Entertainment`(`E_id`);

ALTER TABLE `rating` ADD CONSTRAINT `rating_fk0` FOREIGN KEY (`user_id`) REFERENCES `User`(`user_id`);

ALTER TABLE `rating` ADD CONSTRAINT `rating_fk1` FOREIGN KEY (`E_id`) REFERENCES `Entertainment`(`E_id`);

ALTER TABLE `watch_list` ADD CONSTRAINT `watch_list_fk0` FOREIGN KEY (`user_id`) REFERENCES `User`(`user_id`);

ALTER TABLE `watch_list` ADD CONSTRAINT `watch_list_fk1` FOREIGN KEY (`E_id`) REFERENCES `Entertainment`(`E_id`);

ALTER TABLE `fan theory` ADD CONSTRAINT `fan theory_fk0` FOREIGN KEY (`user_id`) REFERENCES `User`(`user_id`);

ALTER TABLE `Comments` ADD CONSTRAINT `Comments_fk0` FOREIGN KEY (`theory_id`) REFERENCES `fan theory`(`theory_id`);

ALTER TABLE `Comments` ADD CONSTRAINT `Comments_fk1` FOREIGN KEY (`user_id`) REFERENCES `User`(`user_id`);

