CREATE TABLE `users` (
			 `id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			 `name` VARCHAR(50) NOT NULL,
			 `login` VARCHAR(50) NOT NULL,
 			 `password` VARCHAR(50) NOT NULL,		 
			 `guestbook_admin` CHAR(1) DEFAULT 'N' NOT NULL,
			 `qa_form` CHAR(1) DEFAULT 'N' NOT NULL,
			 UNIQUE (`id`),
			 UNIQUE (`login`)
);