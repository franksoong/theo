CREATE USER bugs@localhost IDENTIFIED BY 'bugs';
GRANT ALL PRIVILEGES ON *.* TO bugs@localhost;
CREATE USER bugs IDENTIFIED BY 'bugs';
GRANT ALL PRIVILEGES ON *.* TO bugs@"%";
select host,user from mysql.user; 


create database IF NOT EXISTS theo CHARACTER SET utf8 COLLATE utf8_general_ci;
use theo;

-- mysqldump -ubugs -pbugs theo.library >g:\tmp.sql

-- soong test for git

CREATE TABLE IF NOT EXISTS `library` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `display_name` varchar(128) NOT NULL,
  `inner_name` varchar(128) NOT NULL,
  `format` varchar(6) NOT NULL,
  `store_path` varchar(128) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `description` text,
  `comments` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `inner_name` (`inner_name`)
) ENGINE=InnoDB;