SELECT 
    a.title AS 'Title', a.summary AS 'Summary', a.prod_year
FROM
    film a,
    genre b
WHERE
    a.id_genre = b.id_genre
        AND LOWER(b.name) = 'erotic'
ORDER BY a.prod_year DESC;

