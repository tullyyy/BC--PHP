SELECT *
FROM `country`
--select all columns from all the rows

SELECT *
FROM `country`
WHERE `population` > 20000000;
-- Write a SQL query to select everything from the table country with population above 20 000 000

SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC;
-- Write a SQL query to select everything from the table country with population above 20 000 000 and order it by population
-- asc (ascending) desc (descending)

SELECT *
FROM `country`
WHERE `population` > 20000000
ORDER BY `population` DESC
LIMIT 10;
-- Write a SQL query to select everything from the table country with population above 20 000 000, order it by population and limit the results to first 10


SELECT * 
FROM `table`
ORDER BY `table`.`column1` ASC
-- The order can be either ascending ASC or descending DESC


SELECT * 
FROM `table`
ORDER BY `table`.`column1` ASC,
         `table`.`column2` DESC
-- More than one way of ordering the results can be set which is used when the previous value is equal.

SELECT * 
FROM `table`
LIMIT 10



SELECT * 
FROM `table`
LIMIT 0, 10

SELECT * 
FROM `table`
LIMIT 10, 10

-- You can also specify the offset at which this limited amound begins.
-- The first number is how many items will be skipped




SELECT * 
FROM `city`
LIMIT 100
-- Write a SQL query that would select only first 100 rows of the city table.

SELECT * 
FROM `city`
ORDER BY `population` DESC
LIMIT 100
-- Write a SQL query that would select 100 rows of the city table with the best (biggest) Population value.



-- LIKE
SELECT * 
FROM `table`
WHERE `column` LIKE 'some%'
-- Selects rows where column begins with 'some'.

SELECT * 
FROM `table`
WHERE `column` LIKE '%text'
-- Selects rows where column ends with 'text'.

SELECT * 
FROM `table`
WHERE `column` LIKE '%me te%'
-- Selects rows where anywhere in column there is a string 'me te'.

SELECT * 
FROM `table`
WHERE `column` LIKE 'so_e te_t'
-- Selects rows where value in column looks like 'so_e te_t' where _ can be any letter. So 'some text' as well as 'sore tent'

SELECT *
FROM `city`
WHERE 'District' LIKE '%Holland';

SELECT *
FROM `city`
WHERE `Name` LIKE '%ville%';



-- IN
SELECT *
FROM `user`
WHERE `role` IN ('administrator', 'moderator')
-- Selects all records from table user where the value of column role is either 'administrator' or 'moderator'



SELECT *
FROM `city`
WHERE `CountryCode` IN ('CZE', 'SVK', 'POL', 'HUN')
ORDER BY `population` DESC
LIMIT 10;
-- Write an SQL query to select 10 largest cities (order by Population) from the city table that are in one of the V4 countries: Czechia, Slovakia, Poland, Hungary (their country is specified with their CountryCode column)
-- Use IN
-- The CountryCode values are: CZE, SVK, POL, HUN



-- INSERT
INSERT
INTO `users`
(`username`, `email`)
VALUES
('bruce', 'bruce@wayne.com')
-- Inserts a record into the table users, putting 'bruce' into the username column and 'bruce@wayne.com' into the email column.