--First Question
--https://www.hackerrank.com/challenges/revising-the-select-query/problem?isFullScreen=true

SELECT * FROM CITY
WHERE POPULATION >  100000 AND COUNTRYCODE = 'USA';


--Second question
--https://www.hackerrank.com/challenges/revising-the-select-query-2/problem?isFullScreen=true

SELECT NAME FROM CITY
WHERE POPULATION >  120000 AND COUNTRYCODE = 'USA';


--Third question
--https://www.hackerrank.com/challenges/japanese-cities-attributes/problem?isFullScreen=true

SELECT * FROM CITY
WHERE COUNTRYCODE = 'JPN';


--Fourth question 
--https://www.hackerrank.com/challenges/name-of-employees/problem?isFullScreen=true

SELECT name FROM Employee 
ORDER BY name ASC;

--Fifth question
--https://www.hackerrank.com/challenges/salary-of-employees/problem?isFullScreen=true

SELECT name FROM Employee 
WHERE salary  >  2000 AND months < 10
ORDER BY employee_id ASC;


--SIXTH QUESTION 
--https://www.hackerrank.com/challenges/more-than-75-marks/problem?isFullScreen=true

SELECT Name 
FROM STUDENTS  
WHERE Marks > 75 
ORDER BY RIGHT(Name, 3), ID ASC;

--SEVENTH QUESTION
--https://datalemur.com/questions/tesla-unfinished-parts

SELECT part, assembly_step FROM parts_assembly
WHERE finish_date ISNULL ;



