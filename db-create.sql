CREATE TABLE `mailing_list` (
    `email_id` int(11) NOT NULL AUTO_INCREMENT,
    `email_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    PRIMARY KEY (`email_id`),
    UNIQUE KEY `email_address` (`email_address`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
