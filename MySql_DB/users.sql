CREATE TABLE `users` (
			 `id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			 `login` VARCHAR(32) NOT NULL,									 				 		 
 			 `password` VARCHAR(32) NOT NULL,								 				 		 
 			 `user_page` VARCHAR(50),				 								   /* user personnal page */			 		 
			 `guestbook_admin` CHAR(1) DEFAULT 'N' NOT NULL,
			 `questions` CHAR(1) DEFAULT 'N' NOT NULL, 				 
 			 `questions_admin` CHAR(1) DEFAULT 'N' NOT NULL,
 			 `news_writer` CHAR(1) DEFAULT 'N' NOT NULL,
 			 `news_admin` CHAR(1) DEFAULT 'N' NOT NULL,
			 UNIQUE (`id`),
			 UNIQUE (`login`)
);