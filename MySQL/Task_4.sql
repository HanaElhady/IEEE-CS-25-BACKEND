-- https://www.hackerrank.com/challenges/what-type-of-triangle/problem?isFullScreen=true
-- Type of triangle
SELECT  
    CASE 
        WHEN GREATEST(A, B, C) >= (A + B + C - GREATEST(A, B, C)) THEN 'Not A Triangle'
        WHEN A = B AND B = C THEN 'Equilateral'
        WHEN A = B OR B = C OR A = C THEN 'Isosceles'
        ELSE 'Scalene'
    END AS TriangleType
FROM TRIANGLES;


-- https://www.hackerrank.com/challenges/the-pads/problem?isFullScreen=true
-- The pads
(SELECT 
    CONCAT(Name, '(', LEFT(Occupation, 1), ')') AS Result
 FROM OCCUPATIONS
 ORDER BY Name)

UNION ALL

(SELECT 
    CONCAT('There are a total of ', COUNT(*), ' ', LOWER(Occupation), 's.') AS Result
 FROM OCCUPATIONS
 GROUP BY Occupation)
 
ORDER BY Result;


-- https://www.hackerrank.com/challenges/the-company/problem?isFullScreen=true
-- New companies 
SELECT 
    C.company_code, 
    C.founder,
    COUNT(DISTINCT L.lead_manager_code) AS lead_manager_count,
    COUNT(DISTINCT S.senior_manager_code) AS senior_manager_count,
    COUNT(DISTINCT M.manager_code) AS manager_count,
    COUNT(DISTINCT E.employee_code) AS employee_count
FROM Company C
JOIN Lead_Manager L ON C.company_code = L.company_code
JOIN Senior_Manager S ON C.company_code = S.company_code
JOIN Manager M ON C.company_code = M.company_code
JOIN Employee E ON C.company_code = E.company_code
GROUP BY C.company_code, C.founder
ORDER BY C.company_code ASC;


-- https://www.hackerrank.com/challenges/sql-projects/problem?isFullScreen=true
-- Project Planning

-- https://www.hackerrank.com/challenges/average-population/problem?isFullScreen=true
-- Average population
SELECT FLOOR(AVG(POPULATION)) FROM CITY


-- https://www.hackerrank.com/challenges/harry-potter-and-wands/problem?isFullScreen=true
-- Ollivander's Inventory


-- https://www.hackerrank.com/challenges/the-report/problem?isFullScreen=true
-- The report
SELECT 
    CASE 
        WHEN G.Grade >= 8 THEN S.Name
        ELSE 'NULL' 
    END AS Name, 
    G.Grade, 
    S.Marks
FROM Students S
JOIN Grades G 
    ON S.Marks BETWEEN G.Min_Mark AND G.Max_Mark
ORDER BY G.Grade DESC, 
         (CASE WHEN G.Grade >= 8 THEN S.Name END) ASC, 
         S.Marks ASC;


-- https://www.hackerrank.com/challenges/weather-observation-station-15/problem?isFullScreen=true
-- Weather observation station 15
SELECT ROUND(LONG_W, 4)
FROM STATION
WHERE LAT_N < 137.2345
ORDER BY LAT_N DESC
LIMIT 1;


--
