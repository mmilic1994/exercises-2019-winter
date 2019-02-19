-- # complaint
-- CREATE TABLE `complaint` (
--   `id` int(11) NOT NULL AUTO_INCREMENT,
--   `customer_name` varchar(127) NULL COLLATE utf8_general_ci DEFAULT NULL,
--   `text` text NULL COLLATE utf8_general_ci DEFAULT NULL,
--   `filed_at` datetime NULL DEFAULT NULL,
--   PRIMARY KEY (`id`)
-- ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- your SQL here

INSERT INTO `complaint`
(`customer_name`, `text`, `filed_at`)
VALUES
('Maud Williams', 'I was nearly not perfectly satisfied!', '2017-02-17 14:55:12'),
('Roger Bernard', 'The kid size does not fit my kid!', '2017-02-01 19:13:48');