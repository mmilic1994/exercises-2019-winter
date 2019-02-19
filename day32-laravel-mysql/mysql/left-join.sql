SELECT *
FROM `city`
LEFT JOIN `country`
    ON `city`.`CountryCode` = `country`.`Code`
WHERE `city`.`Population` > 5000000;

SELECT *
FROM `countrylanguage`
LEFT JOIN `country`
    ON `countrylanguage`.`CountryCode` = `country`.`Code`
WHERE `countrylanguage`.`Language` LIKE '%English%'
ORDER BY `countrylanguage`.`Percentage` DESC,
    `country`.`Name` ASC;