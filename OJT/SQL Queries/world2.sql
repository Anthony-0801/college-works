-- Anthony A. Cabulang

SELECT country.continent, 
       COUNT(country.Name) AS total_countries,
       AVG(country.LifeExpectancy) AS lifeexpectancy
FROM country
WHERE country.LifeExpectancy > 70
GROUP BY country.continent;

SELECT country.continent,
       COUNT(country.Name) AS total_countries,
       AVG(country.LifeExpectancy) AS lifeexpectancy
FROM country
WHERE country.LifeExpectancy BETWEEN 60 AND 70
GROUP BY country.continent;

SELECT country.Name AS country,
		AVG(country.LifeExpectancy) AS life_expectancy
FROM country
WHERE country.LifeExpectancy > 75
GROUP BY country.Name;

SELECT country.Name AS country,
		AVG(country.LifeExpectancy) AS life_expectancy
FROM country
WHERE country.LifeExpectancy < 40
GROUP BY country.Name;

SELECT country.Name AS country,
       SUM(country.Population) AS total_population
FROM country
GROUP BY country.Name
ORDER BY total_population DESC
LIMIT 10;

SELECT SUM(country.Population) AS total_population
FROM country;

SELECT country.continent AS continent,
       SUM(country.Population) AS total_population
FROM country
GROUP BY country.continent
HAVING SUM(country.Population) > 500000000
ORDER BY total_population DESC;

SELECT country.continent AS continent,
		COUNT(country.Name) AS country,
       SUM(country.Population) AS total_population,
       AVG(country.LifeExpectancy) AS life_expectancy
FROM country
GROUP BY country.continent
HAVING AVG(country.LifeExpectancy) < 71
ORDER BY total_population DESC;

SELECT country.Name AS country,
       COUNT(city.name) AS number_of_cities
FROM country
JOIN city ON country.Code = city.CountryCode
GROUP BY country.Name;

SELECT country.Name AS country,
       countrylanguage.Language,
       COUNT(country.Name) AS number_of_countries
FROM country
JOIN countrylanguage ON country.Code = countrylanguage.CountryCode
JOIN city ON country.Code = city.CountryCode
GROUP BY country.Name, countrylanguage.Language;

SELECT countrylanguage.Language,
       COUNT(country.Name) AS number_of_countries,
       countrylanguage.IsOfficial
FROM country
JOIN countrylanguage ON country.Code = countrylanguage.CountryCode
GROUP BY countrylanguage.Language, countrylanguage.IsOfficial;

SELECT country.Continent,
		COUNT(city.Name) AS total_cities,
        AVG(city.Population) AS average_cities_population
FROM country
JOIN city ON country.code = city.CountryCode
GROUP BY country.Continent;

SELECT countrylanguage.Language,
		SUM(country.Population) AS total_population
FROM country
JOIN countrylanguage ON country.Code = countrylanguage.CountryCode
GROUP BY countrylanguage.Language
ORDER BY total_population DESC;