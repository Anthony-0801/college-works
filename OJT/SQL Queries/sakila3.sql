-- Anthony A. Cabulang

SELECT sakila.country.country AS country,
       COUNT(sakila.customer.customer_id) AS total_number_of_customers
FROM country
JOIN city ON country.country_id = city.country_id
JOIN address ON city.city_id = address.city_id
JOIN customer ON address.address_id = customer.address_id
GROUP BY country
ORDER BY country ASC;

SELECT sakila.city.city AS full_city_name,
		sakila.country.country AS full_country_name,
		COALESCE(COUNT(sakila.customer.customer_id), 0) AS total_number_of_customers
FROM sakila.city
JOIN sakila.country ON sakila.city.country_id = sakila.country.country_id
LEFT JOIN sakila.address ON sakila.city.city_id = sakila.address.city_id
LEFT JOIN sakila.customer ON sakila.address.address_id = sakila.customer.address_id
GROUP BY sakila.city.city, sakila.country.country
ORDER BY total_number_of_customers;

SELECT DATE_FORMAT(rental.rental_date, '%M-%Y') AS month_and_year,
		SUM(payment.amount) AS total_rental_amount,
		COUNT(*) AS total_transactions,
		AVG(payment.amount) AS average_rental_amount
FROM sakila.payment
INNER JOIN sakila.rental ON payment.rental_id = rental.rental_id
GROUP BY month_and_year, rental.rental_date
ORDER BY rental.rental_date;

SELECT EXTRACT(HOUR FROM rental.rental_date) AS hour_of_the_day,
		SUM(payment.amount) AS total_payments_received
FROM sakila.payment
INNER JOIN sakila.rental ON payment.rental_id = rental.rental_id
GROUP BY hour_of_the_day
ORDER BY total_payments_received DESC
LIMIT 10;


