CREATE TABLE `news` (
			 `id` MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			 `title` VARCHAR(50) NOT NULL,
			 `text` TEXT NOT NULL,
			 `author_id` MEDIUMINT UNSIGNED NOT NULL,
			 `author_sign` VARCHAR(50) NOT NULL,
 			 `post_date` DATETIME NOT NULL,
 			 `pict_name` VARCHAR(12),
 			 `show` CHAR(1) DEFAULT 'N' NOT NULL			 
);