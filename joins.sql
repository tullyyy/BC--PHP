SELECT *
FROM `users`
LEFT JOIN `world`.`avatars`
  ON `users`.`avatar_id` = `world`.`avatars`.`id`
  WHERE `world`.`avatars`.`url` LIKE '%jpg'
  AND `users`.`name` IS NOT NULL;



SELECT `users`.*, `avatars`.`id` AS avatars_id, `avatars`.`url`
FROM `users`
LEFT JOIN `avatars`
  ON `users`.`avatar_id` = `avatars`.`id`
-- you need the alias AS avatars_id here otherwise the avatars.id will override the users id from users.*

SELECT `avatars`.`id`, `avatars`.`url`, `users`.*
FROM `users`
LEFT JOIN `avatars`
  ON `users`.`avatar_id` = `avatars`.`id`
-- here, the users id would override the avatars id because it is input in last







-- Joins allow you to select rows from multiple tables at once, joined in a specified way.
-- INNER JOINS
-- Also just JOIN. Select rows from both tables only when there is a match.

SELECT *
FROM `table`
INNER JOIN `table2`
  ON `table`.`column1` = `table2`.`column2`



-- LEFT JOIN
-- Selects all rows from the first table and only matching rows from the second table.
SELECT *
FROM `table`
LEFT JOIN `table2`
  ON `table`.`column1` = `table2`.`column2`

-- In all joins you can specify more than one condition for each join. This can serve to better specify which row we want joined.
SELECT *
FROM `table`
LEFT JOIN `table2`
  ON `table`.`column1` = `table2`.`column2`
  AND `table`.`column3` = `table2`.`column4`
  AND `table2`.`column5` = 'some_value'



-- RIGHT JOIN
-- Selects all rows from the second table and only matching rows from the first table.
SELECT *
FROM `table2`
RIGHT JOIN `table`
  ON `table2`.`column2` = `table`.`column1`




-- Exercise
-- Using the database world write and execute a SQL query that would select all records in the table city with population above 5 million and left join the appropriate records in the country table using the CountryCode column.

SELECT `city`.*
FROM `city`
LEFT JOIN `country`
ON `city`.`CountryCode` = `country`.`Code`
WHERE `population` > '5000000';

-- exercise
-- Exercise
-- Using the database world write and execute a SQL query that would select all records int the table countrylanguage that have 'English' in their Language column and left join the appropriate records in the country table using the CountryCode column.

SELECT `countrylanguage`.*
FROM `countrylanguage`
LEFT JOIN `country`
ON `countrylanguage`.`CountryCode` = `country`.`Code`
WHERE `Language` = 'English';
-- Exercise (optional)
-- Exercise (optional)
-- Using the database imdb_test, write an SQL query that would select all genre names for a specific movie in a single query.

-- Exercise (optional)
-- Exercise (optional)
-- Using the database imdb_test, write an SQL query that would select all actors (profession_id = 3) for a specific movie in a single query.

``