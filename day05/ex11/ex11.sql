SELECT 
    UPPER(b.last_name) AS 'NAME', b.first_name, c.price
FROM
    `member` a,
    user_card b,
    subscription c
WHERE
    a.id_sub = c.id_sub
        AND a.id_user_card = b.id_user
        AND c.price > 42
ORDER BY b.last_name ASC , b.first_name ASC;