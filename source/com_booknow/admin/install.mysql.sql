CREATE TABLE IF NOT EXISTS `#__booknow_employees` (
  `employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `fk_calendar` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `published` tinyint(2) DEFAULT 1,
  `ordering` int(11) DEFAULT NULL,
  PRIMARY KEY (`employee_id`)
);

CREATE TABLE IF NOT EXISTS `#__booknow_services` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `duration` int(11) DEFAULT NULL,
  `unit` tinyint(3) DEFAULT NULL,
  `price` decimal DEFAULT NULL,
  `currency` tinyint(3) DEFAULT NULL,
  `price_type` tinyint(3) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `published` tinyint(2) DEFAULT 1,
  `ordering` int(11) DEFAULT NULL,
  PRIMARY KEY (`service_id`)
);

CREATE TABLE IF NOT EXISTS `#__booknow_waitlists` (
  `waitlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `fulfilled` tinyint(2) DEFAULT 0,
  `fulfilled_time` datetime DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`waitlist_id`)
);

CREATE TABLE IF NOT EXISTS `#__booknow_wishlists` (
  `wishlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`wishlist_id`)
);

CREATE TABLE IF NOT EXISTS `#__booknow_reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `review` text DEFAULT NULL,
  `rating` varchar(55) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `published` tinyint(2) DEFAULT 1,
  PRIMARY KEY (`review_id`)
);