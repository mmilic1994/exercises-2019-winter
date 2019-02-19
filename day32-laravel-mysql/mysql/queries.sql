SELECT *
FROM `city`
WHERE `District` LIKE '%Holland';

SELECT *
FROM `city`
WHERE `Name` LIKE '%ville%';

SELECT *
FROM `city`
WHERE `CountryCode` IN ('CZE', 'SVK', 'AFG');

SELECT *
FROM `city`
WHERE 1
LIMIT 100;

SELECT `city`.*
FROM `city`
WHERE 1
ORDER BY `Population` DESC
LIMIT 100;

DELETE
FROM `region`
WHERE `id` = 1;

DELETE
FROM `region`
WHERE `slug` LIKE '%america%';

DELETE
FROM `region`



DELETE
FROM `region`
WHERE 1;

UPDATE `users`
SET `username` = 'Bruce'
WHERE 1;