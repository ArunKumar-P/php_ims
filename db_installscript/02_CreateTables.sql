USE php_ims;

CREATE TABLE IF NOT EXISTS user (
	id 				int(11) NOT NULL auto_increment, 
	username 		varchar(255) , 
	email			varchar(255) , 
	password		varchar(300) ,
    user_type 		enum('Admin','Other'),
	register_date	date,
    last_login		date,
    notes			varchar(255),
	PRIMARY KEY 	(id)
);

ALTER TABLE `user` ADD UNIQUE(`password`);
ALTER TABLE `user` CHANGE `last_login` `last_login` DATETIME NULL DEFAULT NULL;

CREATE TABLE  IF NOT EXISTS categories( 
	`cid` INT(11) NOT NULL auto_increment, 
    `parent_cat` INT(11) NOT NULL , 
    `category_name` VARCHAR(255) NOT NULL , 
    `status` ENUM('1', '0') NOT NULL, 
    PRIMARY KEY (`cid`), UNIQUE (`category_name`)
);