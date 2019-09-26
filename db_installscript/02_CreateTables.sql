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

