
--================== To store image file information a table needs to be created in the database. 
-- ************ The following SQL creates an images table with some basic fields in the MySQL database.

CREATE TABLE `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `modifed` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1=Active | 0=Inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--************** Need to insert some data in the images table in the database 
-- ************ which will be fetched from the database later in the script.
INSERT INTO `images` (`id`, `file_name`, `title`, `created`, `modifed`, `status`) VALUES
(1, 'car-img-1.jpg', 'Demo Product 1', '2023-01-12 16:19:36', '2023-01-12 16:19:36', 1),
(2, 'car-img-2.jpg', 'Demo Product 2', '2023-01-12 16:19:53', '2023-01-12 16:19:53', 1),
(3, 'car-img-3.jpg', 'Demo Product 3', '2023-01-12 16:20:03', '2023-01-12 16:20:03', 1),
(4, 'car-img-4.jpg', 'Demo Product 4', '2023-01-12 16:20:11', '2023-01-12 16:20:11', 1),
(5, 'car-img-5.jpg', 'Demo Product 5', '2023-01-12 16:20:22', '2023-01-12 16:20:22', 1);
-- ************ which will be fetched from the database later in the script.
