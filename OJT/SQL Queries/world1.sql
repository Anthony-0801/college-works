-- Anthony A. Cabulang

SELECT * FROM world.country
	WHERE country.continent = 'Europe';

SELECT * FROM world.country
	WHERE country.continent IN ('North America', 'Africa');

SELECT city.*
FROM city
JOIN country ON city.CountryCode = country.Code
	WHERE country.population > 100000000;

SELECT country.name AS country, countrylanguage.language, countrylanguage.IsOfficial
	FROM country
	JOIN countrylanguage ON country.code = countrylanguage.CountryCode;

SELECT country.name AS country, countrylanguage.language
	FROM country
	JOIN countrylanguage ON country.code = countrylanguage.CountryCode
		WHERE countrylanguage.language = 'Spanish' OR countrylanguage.language = 'English';

SELECT country.name AS country, countrylanguage.*
	FROM country
	JOIN countrylanguage ON country.code = countrylanguage.CountryCode
		WHERE countrylanguage.language = 'Arabic' 
        AND countrylanguage.Percentage > 30
        AND countrylanguage.IsOfficial = 'F';

SELECT country.name AS country, countrylanguage.*
	FROM country
	JOIN countrylanguage ON country.code = countrylanguage.CountryCode
		WHERE countrylanguage.language = 'French' 
        AND countrylanguage.Percentage < 50;

SELECT country.name AS country, countrylanguage.*
	FROM country
	JOIN countrylanguage ON country.code = countrylanguage.CountryCode
		ORDER BY countrylanguage.language, country.name;
	
SELECT country.name AS country, city.name AS city, countrylanguage.language, countrylanguage.IsOfficial
	FROM country
	JOIN countrylanguage ON country.code = countrylanguage.CountryCode
    JOIN city ON country.code = city.CountryCode
		ORDER BY city.Population DESC LIMIT 100;

SELECT country.name AS country, country.LifeExpectancy, city.name AS city, countrylanguage.language, country.Population
	FROM country
	JOIN countrylanguage ON country.code = countrylanguage.CountryCode
    JOIN city ON country.code = city.CountryCode
    WHERE country.lifeExpectancy < 40
		ORDER BY city.Population DESC LIMIT 100;

SELECT country.name AS country, city.name AS city, country.LifeExpectancy, countrylanguage.language
	FROM country
	JOIN countrylanguage ON country.code = countrylanguage.CountryCode
    JOIN city ON country.code = city.CountryCode
    WHERE countrylanguage.language = 'English'
		ORDER BY country.LifeExpectancy DESC LIMIT 100;