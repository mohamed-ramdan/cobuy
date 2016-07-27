/**
db-create-sql-schema.sql 
-------------------------
Historical Changes
===================
Version         Author               Date               Description
0.0             Mohamed Ramadan      27.07.2016         initial version create script.
0.1             Mohamed Ramadan      27.07.2016         create table users.



*/


-- create table users
CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY , 
    fname VARCHAR(50),
    lname VARCHAR(50),
    email VARCHAR(50),
    photo VARCHAR(300),
    password VARCHAR(50),
    isProductOwner BOOLEAN DEFAULT="false",
    isAdmin BOOLEAN DEFAULT="false",
    isBlocked BOOLEAN DEFAULT="false"
);

--create table product
CREATE TABLE products(
    id INT NOT NULL PRIMARY KEY,
    description VARCHAR(500),
    photo VARCHAR(300),
    price VARCHAR(100)
);

