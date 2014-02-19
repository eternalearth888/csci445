use team11;
DROP TABLE IF EXISTS pets;

CREATE TABLE pets (
	id INTEGER PRIMARY KEY UNIQUE,
	name TEXT NOT NULL,
	age INTEGER NOT NULL,
	pet_type TEXT NOT NULL
);

INSERT INTO pets 
VALUES
(1, 'Fluffy', 3, 'cat'),
(2, 'Fido', 8, 'dog'),
(3, 'Fiona', 2, 'turtle'),
(4, 'Felix', 10, 'cat'),
(5, 'Foobar', 4, 'dog');

SELECT * FROM pets;
SELECT pets.name , pets.age FROM pets;
SELECT count(*) FROM pets WHERE pet_type='dog';
UPDATE pets SET name='Thomas' WHERE name='Fiona';
DELETE FROM pets WHERE name='Foobar';
SELECT * FROM pets;
SELECT name FROM pets ORDER BY name;
SELECT AVG(age) FROM pets;
