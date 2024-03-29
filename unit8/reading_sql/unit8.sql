use team11;

DROP TABLE IF EXISTS customers;
CREATE TABLE customers (
	id INTEGER PRIMARY KEY UNIQUE,
	name TEXT NOT NULL,
	address TEXT NOT NULL
);

DROP TABLE IF EXISTS custOrders;
CREATE TABLE custOrders (
	id INTEGER PRIMARY KEY UNIQUE,
	custID INTEGER NOT NULL,
	Qty INTEGER NOT NULL,
	FOREIGN KEY(custID) REFERENCES customers(id)
);
