UPDATE ft_table
SET date_creation=DATE_ADD(date_creation,INTERVAL 20 YEAR)
WHERE id > 5;