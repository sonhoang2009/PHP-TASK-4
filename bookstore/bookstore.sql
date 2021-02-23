CREATE DATABASE BOOKSTORE;
USE BOOKSTORE;

CREATE TABLE BOOK(
    author varchar(128),
    title varchar (128),
    type varchar (16),
    year char (4),
    isbn char (13) primary key
);

INSERT INTO BOOK VALUE ('Mark Twain', 'The Adventures of Tom Sawyer', 'Fiction',1876,9871598184891),
('Jane Austen','P and P','Fiction',1811,9871598184892),
('Charles','The O and O','Fiction',1812,9871598184893),
('Mark Twain','The Andveced of ABC','Non-Fiction',1813,9871598184894),
('William','R and J','Play',1594,9871598184895);

CREATE TABLE ACCOUNT(
    number int (11) primary key,
    balance float
);

INSERT INTO ACCOUNT VALUE (12345,1025.5),
(466135,140);