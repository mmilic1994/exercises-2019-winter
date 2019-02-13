SELECT *
FROM `country`;

SELECT *
FROM `country`
WHERE `population` > 20000000;

SELECT `country`.*
FROM `country`
WHERE `country`.`population` > 20000000;

SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC;

SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 0, 10;

SELECT `Name`, `Continent`
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 0, 10;