ALTER TABLE  `nb_company` ADD  `contact_name` VARCHAR( 20 ) NOT NULL DEFAULT  '' AFTER  `logo` ,
ADD  `mobile` VARCHAR( 20 ) NOT NULL DEFAULT  '' AFTER  `contact_name` ,
ADD  `telephone` VARCHAR( 20 ) NOT NULL DEFAULT  '' AFTER  `mobile` ,
ADD  `email` VARCHAR( 50 ) NOT NULL DEFAULT  '' AFTER  `telephone` ,
ADD  `homepage` VARCHAR( 255 ) NOT NULL DEFAULT  '' AFTER  `email`,
ADD  `create_time` Int NOT NULL DEFAULT 0 AFTER `homepage`,
ADD  `delete_flag` TINYINT NOT NULL DEFAULT 0 AFTER `create_time`
