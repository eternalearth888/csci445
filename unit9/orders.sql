use team11;

DROP TABLE IF EXISTS weapons;

CREATE TABLE weapons (
	id INTEGER PRIMARY KEY UNIQUE,
	weapon_type TEXT NOT NULL,
	price_weapon float(5,2)
);

DROP TABLE IF EXISTS brooches;

CREATE TABLE brooches (
	id INTEGER PRIMARY KEY UNIQUE,
	brooch_type TEXT NOT NULL,
	price_brooch float(5,2)
);

INSERT INTO weapons VALUES
	('1', 'Moon Tiara', '150.00'),
        ('2', 'Crescent Moon Wand', '150.00'),
	('3', 'Spiral Moon Heart Rod', '150.00'),
	('4', 'Kaleido-Moon-Scope', '150.00'),
	('5', 'Eternal Tiare', '150.00'),
	('6', 'Final Tiare', '150.00')
;

INSERT INTO brooches VALUES
	('1', 'Henshin Brooch', '100.00'),
	('2', 'Crystal Star', '100.00'),
	('3', 'Cosmic Heart Compact', '100.00'),
	('4', 'Crisis Moon Compact', '100.00'),
	('5', 'Eternal Moon Arictle', '100.00')
;
