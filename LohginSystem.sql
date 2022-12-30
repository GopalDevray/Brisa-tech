CREATE DATABASE LoginSystem;

CREATE TABLE IF NOT EXISTS `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `email` varchar(50) NOT NULL,
 `phone` number(10) NOT NULL,
 `password` varchar(50) NOT NULL,
 `cpassword` varchar(50) NOT NULL,
 `create_datetime` datetime NOT NULL,
 PRIMARY KEY (`id`)
);


