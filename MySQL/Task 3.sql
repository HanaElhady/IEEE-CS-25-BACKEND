-- Japanese cities name
-- https://www.hackerrank.com/challenges/japanese-cities-name/problem?isFullScreen=true
SELECT NAME FROM CITY
WHERE COUNTRYCODE = 'JPN';
------------------------------------------------------------------------------------------------------
-- Weather observation station 2
-- https://www.hackerrank.com/challenges/weather-observation-station-2/problem?isFullScreen=true

------------------------------------------------------------------------------------------------------
-- Weather observation station 9
-- https://www.hackerrank.com/challenges/weather-observation-station-9/problem?isFullScreen=true
SELECT DISTINCT CITY FROM STATION 
WHERE LEFT(CITY, 1) NOT IN ('A','E','I', 'O','U','a','e','i','o','u');
------------------------------------------------------------------------------------------------------
-- Weather observation station 10
-- https://www.hackerrank.com/challenges/weather-observation-station-10/problem?isFullScreen=true
SELECT DISTINCT CITY FROM STATION 
WHERE RIGHT(CITY, 1) NOT IN ('A','E','I', 'O','U','a','e','i','o','u');
------------------------------------------------------------------------------------------------------
-- Weather observation station 12
-- https://www.hackerrank.com/challenges/weather-observation-station-12/problem?isFullScreen=true
SELECT DISTINCT CITY FROM STATION 
WHERE LEFT(CITY, 1) NOT IN ('A','E','I', 'O','U','a','e','i','o','u') 
AND
RIGHT(CITY, 1) NOT IN ('A','E','I', 'O','U','a','e','i','o','u');
------------------------------------------------------------------------------------------------------
-- Average population
-- https://www.hackerrank.com/challenges/average-population/problem?isFullScreen=true
------------------------------------------------------------------------------------------------------
-- Teams power users
-- https://datalemur.com/questions/teams-power-users
------------------------------------------------------------------------------------------------------
-- Click through rate
-- https://datalemur.com/questions/click-through-rate
