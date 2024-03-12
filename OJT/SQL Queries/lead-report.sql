-- Anthony A. Cabulang 

SELECT lead_gen_business.sites.domain_name AS website,
		lead_gen_business.clients.client_id
FROM	lead_gen_business.sites
JOIN	lead_gen_business.clients ON sites.client_id = clients.client_id
WHERE	clients.client_id = 15;

SELECT lead_gen_business.sites.created_datetime AS month,
	COUNT(lead_gen_business.sites.domain_name) AS total_count
FROM lead_gen_business.sites
WHERE EXTRACT(YEAR_MONTH FROM created_datetime) = '201106';

SELECT lead_gen_business.billing.charged_datetime AS month,
	SUM(lead_gen_business.billing.amount) AS revenue
FROM lead_gen_business.billing
WHERE  DATE(billing.charged_datetime) = '2012-11-19';

SELECT	lead_gen_business.clients.client_id,
        lead_gen_business.billing.amount AS total_revenue,
        EXTRACT(MONTH FROM lead_gen_business.billing.charged_datetime) AS month,
        EXTRACT(YEAR FROM lead_gen_business.billing.charged_datetime) AS year
FROM	lead_gen_business.clients
JOIN	lead_gen_business.billing ON clients.client_id = billing.client_id
WHERE	clients.client_id = 1;

SELECT	CONCAT(lead_gen_business.clients.first_name,' ', lead_gen_business.clients.last_name) AS client_name,
        lead_gen_business.billing.amount AS total_revenue,
        EXTRACT(MONTH FROM lead_gen_business.billing.charged_datetime) AS month,
        EXTRACT(YEAR FROM lead_gen_business.billing.charged_datetime) AS year
FROM	lead_gen_business.clients
JOIN	lead_gen_business.billing ON clients.client_id = billing.client_id
WHERE	clients.client_id = 1;

SELECT lead_gen_business.sites.domain_name AS website,
		lead_gen_business.leads.leads_id AS number_of_leads
FROM lead_gen_business.sites
JOIN lead_gen_business.leads ON sites.site_id = leads.site_id
WHERE DATE(leads.registered_datetime) BETWEEN '2011-03-15' AND '2011-04-15';

SELECT CONCAT(lead_gen_business.clients.first_name,' ', lead_gen_business.clients.last_name) AS client_name,
		lead_gen_business.sites.domain_name,
		lead_gen_business.leads.site_id AS num_leads
FROM lead_gen_business.clients
JOIN lead_gen_business.sites ON clients.client_id = sites.client_id
JOIN lead_gen_business.leads ON sites.site_id = leads.site_id;

SELECT CONCAT(lead_gen_business.clients.first_name,' ', lead_gen_business.clients.last_name) AS client,
		lead_gen_business.leads.site_id AS number_of_leads
FROM lead_gen_business.clients
JOIN lead_gen_business.sites ON clients.client_id = sites.client_id
JOIN lead_gen_business.leads ON sites.site_id = leads.site_id
WHERE EXTRACT(YEAR FROM lead_gen_business.leads.registered_datetime) = 2012
GROUP BY client;

SELECT CONCAT(lead_gen_business.clients.first_name, ' ', lead_gen_business.clients.last_name) AS client,
    COUNT(lead_gen_business.leads.site_id) AS number_of_leads,
    EXTRACT(MONTH FROM lead_gen_business.leads.registered_datetime) AS month
FROM lead_gen_business.clients
JOIN lead_gen_business.sites ON clients.client_id = sites.client_id
JOIN lead_gen_business.leads ON sites.site_id = leads.site_id
WHERE EXTRACT(YEAR_MONTH FROM lead_gen_business.leads.registered_datetime) BETWEEN '201201' AND '201206'
GROUP BY client, month
ORDER BY client ASC;

SELECT CONCAT(lead_gen_business.clients.first_name, ' ', lead_gen_business.clients.last_name) AS client,
    GROUP_CONCAT(lead_gen_business.sites.domain_name) AS site_names,
    COUNT(lead_gen_business.sites.site_id) AS total_count
FROM lead_gen_business.clients
JOIN lead_gen_business.sites ON clients.client_id = sites.client_id
GROUP BY client;



