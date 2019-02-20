-- Récupère tous les films

SELECT name FROM movie;

-- Récupère tous les films dans la catégorie "Films de gangster"

SELECT * FROM movie WHERE category_id1 = 3

-- Récupère tous les films dans la catégorie "Films de gangster" qui sont sortis avant 1990

SELECT * FROM movie WHERE category_id1 = 3 AND date <= '1990-01-01'

-- Récupère tous les films du plus récent au plus vieux

SELECT * FROM movie ORDER BY `date` DESC;

-- Récupère les films dans l'ordre aléatoire

SELECT * FROM movie ORDER BY RAND()

-- Récupère les 10 premiers films à partir du 4ème

SELECT * FROM movie LIMIT 3, 10;

-- Récupère le film le plus récent

SELECT movie FROM movies ORDER BY release_date DESC;

-- Récupère le film le plus ancien

SELECT date FROM movie WHERE date=MAX(date); ???? --------------------------------------------------------------------------------

-- Récupère le film le plus récent et le plus ancien

SELECT 'date', MAX(date), MIN(date) FROM movie GROUP BY 'date'

-- Compte le nombre de films

SELECT COUNT(id) FROM movie;

-- Avoir la moyenne des années de sortie des films

SELECT AVG(date) FROM movie

--prob j'ai 19480553.2500 même / SELECT COUNT(id) FROM movie; (44), valeur fausse



-------------

-- mysql_fetch_object ( resource $result [, string $class_name [, array $params ]] ) : object ????
-- mysql_fetch_object() retourne un tableau qui contient la ligne demandée dans le résultat result et déplace le pointeur de données interne d'un cran. ????????????????????????

-- result
--La ressource de résultat qui vient d'être évaluée. Ce résultat vient de l'appel à la fonction mysql_query().

--class_name
--Le nom de la classe à instancier, définit les propriétés et retourne. SI ce paramètre n'est pas spécifié, un objet stdClass sera retourné.

--params
--Un tableau de paramètres à passer au constructeur pour les objets class_name.



-- BONUS AVOIR L'ANNEE MAX DE CHAQUE ID

--SELECT category_id1, MAX(date) FROM movie GROUP BY category_id1