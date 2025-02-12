-- Japanese cities name
-- https://www.hackerrank.com/challenges/japanese-cities-name/problem?isFullScreen=true
SELECT NAME FROM CITY
WHERE COUNTRYCODE = 'JPN';
------------------------------------------------------------------------------------------------------
-- Weather observation station 2
-- https://www.hackerrank.com/challenges/weather-observation-station-2/problem?isFullScreen=true
SELECT ROUND(SUM(LAT_N), 2) AS lat, ROUND(SUM(LONG_W), 2) AS lon
FROM STATION;
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
SELECT AVG(POPULATION) FROM CITY;
------------------------------------------------------------------------------------------------------
-- Teams power users
-- https://datalemur.com/questions/teams-power-users
SELECT sender_id, COUNT(message_id) AS count_messages
FROM messages
WHERE DATE_TRUNC('month', sent_date) = '2022-08-01'::DATE
GROUP BY sender_id
ORDER BY count_messages DESC
LIMIT 2;
------------------------------------------------------------------------------------------------------
-- Click through rate
-- https://datalemur.com/questions/click-through-rate
SELECT app_id,
    ROUND(100.0 * SUM(CASE WHEN event_type = 'click' THEN 1 ELSE 0 END) 
          / SUM(CASE WHEN event_type = 'impression' THEN 1 ELSE 0 END), 2) AS ctr
FROM events
WHERE EXTRACT(YEAR FROM timestamp) = 2022
GROUP BY app_id;
