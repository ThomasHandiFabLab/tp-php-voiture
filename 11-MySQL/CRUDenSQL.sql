-- Un commentaire en SQL
-- CECI EST UN SUPPORT POUR LE COURS
-- Insèrer des catégories de films
-- Action, Horreur, Film de gangsters, Science-fiction, Thriller
-- On peut mettre les colonnes entre `` (backtick => alt gr + 7)

-- On insère une catégories

INSERT INTO `category` ('name') VALUES 
('Actions')

-- On insère plusieurs catégories
INSERT INTO `category` ('name') VALUES 
('Actions'), 
('Horreur'), 
('Film de gangsters'), 
('Science-fiction'), 
('Thriller');

-- Pour récupérer toutes les catégories
SELECT * FROM  category;

-- On veut changer Trhiller en Documentaire.

UPDATE category SET name = 'Documentaire' WHERE id = 5;

-- Supprimer la catégorie qui a l'id 5
DELETE FROM category WHERE id = 5;


----------------------------------------------------

-- 1 Film de gangster : Le Parrain 1972, Scarface 1983, Les Affranchis 1990, Heat 1995
-- 2 Action : Die Hard 1988, Demolition Man 1993, Taken 2008, Deadpool 2016, Expandable 2010
-- 3 Horreur : Scream 1996, Vendredi 13 1980, Saw 2005, Scary Movie 2000
-- 4 Science Fiction : Star Wars IV Un nouvel espoir 1977, Alien 1979, ET 1982, Robocop 1987
-- 5 Thriller : The Game 1997, Sixième Sens 1999, Usual Suspects 1995, Fight Club 1999,
-- Inception 2010

INSERT INTO `movie` ('name', 'date') VALUES 
('Le Parrain', '1972', 'Scarface' '1983', 'Les Affranchis' '1990', 'Heat' '1995') id = 1, 
('Die Hard', '1988', 'Demolition Man', '1993', 'Taken', '2008','Deadpool', '2016', 'Expandable', '2010') id = 2, 
('Scream', '1996', 'Vendredi 13', '1980', 'Saw', '2005', 'Scary Movie', '2000') id = 3, 
('Star Wars IV Un nouvel espoir', '1977', 'Alien', '1979', 'E.T', '1982', 'Robocop', '1987')id = 4, 
('The Game', '1997', 'Sixième Sens', '1999', 'Usual Suspects', '1995', 'Fight Club', '1999', 'Inception', '2010')id = 5;


INSERT INTO `movie` ('name', 'date') VALUES 
('Le Parrain', '1972'), ('Scarface' '1983'), ('Les Affranchis' '1990'), ('Heat' '1995'), 
('Die Hard', '1988'), ('Demolition Man', '1993'), ('Taken', '2008'),('Deadpool', '2016'), ('Expandable', '2010'), 
('Scream', '1996'), ('Vendredi 13', '1980'), ('Saw', '2005'), ('Scary Movie', '2000'), 
('Star Wars IV Un nouvel espoir', '1977'), ('Alien', '1979'), ('E.T', '1982'), ('Robocop', '1987'), 
('The Game', '1997'), ('Sixième Sens', '1999'), ('Usual Suspects', '1995'), ('Fight Club', '1999'), ('Inception', '2010');


INSERT INTO `movie` (name, date, category_id1) VALUES 
('Le Parrain', '1972-01-01', 1), 
('Scarface', '1983-01-01', 1), 
('Les Affranchis', '1990-01-01', 1), 
('Heat', '1995-01-01', 1), 
('Die Hard', '1988-01-01', 2), 
('Demolition Man', '1993-01-01', 2), 
('Taken', '2008-01-01', 2), 
('Deadpool', '2016-01-01', 2), 
('Expandable', '2010-01-01', 2), 
('Scream', '1996-01-01', 3), 
('Vendredi 13', '1980-01-01', 3), 
('Saw', '2005-01-01', 3), 
('Scary Movie', '2000-01-01', 3), 
('Star Wars IV Un nouvel espoir','1977-01-01', 4), 
('Alien', '1979-01-01', 4), 
('E.T', '1982-01-01', 4), 
('Robocop', '1987-01-01', 4), 
('The Game', '1997-01-01', 5), 
('Sixième Sens', '1999-01-01', 5), 
('Usual Suspects', '1995-01-01', 5), 
('Fight Club', '1999-01-01', 5), 
('Inception', '2010-01-01', 5);