UPDATE `city`
SET `Name` = 'Prague'
WHERE `id` = 3339

-- Write SQL to update the record in table city that has the column id with the value 3339.
-- Set it's Name column to 'Prague'



UPDATE `city`
SET `Population` = '1294513'
WHERE `id` = 3339
-- Write SQL to update the record in table city that has the column id with the value 3339.
-- Set it's Population column to 1294513



UPDATE `country`
SET `HeadOfState` = 'Donald J. Trump'
WHERE `GovernmentForm` = 'US Territory'
-- Write and execute SQL query to update all records in the country table that have the value 'US Territory' in the column GovernmentForm and set the value of their column HeadOfState to 'Donald J. Trump'

UPDATE `country`
SET `HeadOfState` = 'Donald J. Trump'
WHERE `HeadOfState` = 'George W. Bush'
-- Write and execute SQL query to update all records in the country table that have the value 'George W. Bush' in the column HeadOfState and set the value of their column HeadOfState to 'Donald J. Trump'



UPDATE `country`
SET `Population` = '300',
`GNP` = '13.91'
WHERE `Name` = 'United States Minor Outlying Islands'
-- Write and execute a single SQL query to update a single record in the country table that has the value 'United States Minor Outlying Islands' in the column Name in the following manner:
