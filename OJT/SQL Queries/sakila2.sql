-- Anthony A. Cabulang

SELECT * FROM sakila.customer;

SELECT
    CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name,
    address.address
FROM customer
JOIN address ON customer.address_id = address.address_id;


SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name,
    address.address, city.city
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id;

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name,
    address.address, city.city, country.country
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
JOIN country ON city.country_id = country.country_id;

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name,
    address.address, city.city, country.country
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
JOIN country ON city.country_id = country.country_id
	WHERE country.country = 'Bolivia';

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name,
    address.address, city.city, country.country
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
JOIN country ON city.country_id = country.country_id
	WHERE country.country IN ('Bolivia', 'Germany', 'Greece');

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name,
    address.address, city.city, country.country
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
JOIN country ON city.country_id = country.country_id
	WHERE city.city = 'Baku';

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name,
    address.address, city.city, country.country
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
JOIN country ON city.country_id = country.country_id
	WHERE city.city IN ('Baku', 'Beira', 'Bergamo');

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name, country.country,
 LENGTH(country.country) AS country_name_length 
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
JOIN country ON city.country_id = country.country_id
	ORDER BY country_name_length < 5 DESC;

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name, country.country, city.city,
 LENGTH(city.city) AS city_name_length 
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
JOIN country ON city.country_id = country.country_id
	ORDER BY city_name_length > 10 DESC, country.country ASC;

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name, city.city
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
	WHERE city.city LIKE ('%ba');

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name, city.city,
 LENGTH(city.city) AS city_name_length
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
	WHERE city.city LIKE ('%%')
	ORDER BY city_name_length DESC;

SELECT 
	CONCAT(customer.first_name, ' ', customer.last_name) AS customer_name, city.city, country.country,
    LENGTH(city.city) AS city_name_length,
    LENGTH(country.country) AS country_name_length
FROM customer
JOIN address ON customer.address_id = address.address_id 
JOIN city ON address.city_id = city.city_id
JOIN country ON city.country_id = country.country_id
	WHERE LENGTH(country.country) > LENGTH(city.city)
	ORDER BY country.country - city.city;