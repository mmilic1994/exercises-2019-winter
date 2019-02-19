EXPLAIN
SELECT `paragraphs`.*
FROM `paragraphs`
WHERE `id` = 1337;

SELECT `words`.*
FROM `words`
WHERE `word` = 'kissed';

SELECT `paragraphs`.*
FROM `paragraphs`
WHERE `text` LIKE '%Edmond Dantès%';

-- 41 results
-- 0.0213 seconds


SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('Edmond Dantès')

-- 788 results
-- 0.0036 seconds

SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('"Edmond Dantès"')

-- 41 results
-- 0.0044 seconds

SELECT *,
    MATCH (`text`) AGAINST ('Edmond Dantès')
FROM `paragraphs`
WHERE MATCH (`text`) AGAINST ('+Edmond +Dantès' IN BOOLEAN MODE)

-- 90 results
-- 0.0041 seconds