use team11;

DROP TABLE IF EXISTS moonOrders;

CREATE TABLE moonOrders (
	id INTEGER PRIMARY KEY UNIQUE,
	weapon_name TEXT NOT NULL,
	brooch_name TEXT NOT NULL,
	total_price FLOAT NOT NULL
);
