CREATE TABLE `guestbook` (
			 `id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			 `show` CHAR(1) DEFAULT 'N' NOT NULL,
			 `post_date` DATETIME NOT NULL,
			 `author` VARCHAR(50) NOT NULL,
			 `mail` VARCHAR(100),
			 `message` TEXT NOT NULL,
			 UNIQUE (`id`)
);