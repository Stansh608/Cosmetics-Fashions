-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2021 at 03:58 PM
-- Server version: 8.0.26-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: 'id17996585_latest'
--

-- --------------------------------------------------------



--Table structure for table 'Login'

CREATE TABLE 'Loginform'(
  'id' INT NOT NULL,
  'email' VARCHAR(50) NULL,
  'passwrd' VARCHAR(50) NULL,
  'submit' VARCHAR(50) NULL,
  PRIMARY KEY('id'),
  );

--dumping data for table 'Login'

INSERT INTO 'Loginform'('email', 'passwrd', 'submit')
VALUES('?','?', 'btnsubmit');

-----------------------------------------------------------


--
--Table structure for table 'Signup'
--
 CREATE TABLE 'Signup' (
  'id' INT NOT NULL,
  'firstName' VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  'lastName' VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  'email' VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  'passwrd' VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  'confirmPassword' VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  'submit' VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
   PRIMARY KEY('id'),
   );
--
--dumping data for table'Signup'
--
INSERT INTO 'Signup'('firstName', 'lastName', 'email', 'passwrd', 'confirmPassword', 'submit')
VALUES('?', '?', '?', '?', '?', 'btnsubmit');

-----------------------------------------------------------
--
--Table structure for table 'payment'
--
CREATE TABLE 'payment'(
  'id' INT NOT NULL,
  'fullname' VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  'cardname' VARCHAR(50) NULL,
  'email' VARCHAR(50) NULL,
  'adress' VARCHAR(50) NULL,
  'city' VARCHAR(50) NULL,
  'datebirth' DATETIME NULL,
  'month' DATETIME NULL,
  'year' DATETIME NULL,
  'gender' VARCHAR(10) NULL,
  'paymenttype' VARCHAR(50) NULL,
  'cardnumber' INT(20) NULL,
  'cardcvc' INT(50) NULL,
  'numberl' BIGINT(10) NULL,
  'expmonth' DATETIME NULL,
  'expyear' DATETIME NULL,
  'pay' VARCHAR(50) NULL,
  PRIMARY KEY('id'),
  );
--
--dumping data for table 'payment'
--
INSERT INTO 'payment'('fullname', 'cardname', 'email', 'adress', 'city', 'datebirth', 'month', 'year', 'gender', 'paymenttype', 
'cardnumber', 'cardcvc', 'numberl', 'expmonth', 'expyear', 'pay')
VALUES('?', '?', '?', '?', '?', '?', '?', '?', '?'), 
('male', 'female'),
('creditcard', 'paypal', 'others'),
('?', '?', '?', '?', 'btnpay');

-----------------------------------------------------------
--
--Table structure for table 'contact'
--
CREATE TABLE 'contact'(
  'id' INT NOT NULL,
  'name' VARCHAR(50) NULL,
  'phone' INT(20) NULL,
  'email' VARCHAR(50) NULL,
  'subject' VARCHAR(50) NULL,
  'message' VARCHAR(50) NULL,
  'sends' VARCHAR(50) NULL,
  'reachus' INT(50) NULL,
  PRIMARY KEY('id'),
  );
--
--dumping data for table 'contact'
--
INSERT INTO 'contact'('name', 'phone', 'email', 'subject', 'message', 'sends', 'reachus')
VALUES('?', '?', '?', '?', '?', 'btnsend'),
('email','phone', 'adress','facebook','twitter','instagram');

-- --------------------------------------------------------
--
--Table structure for table 'about'
--
CREATE TABLE 'about'(
  'id' INT NOT NULL,
  'content' TEXT NULL,
  'more' VARCHAR(50) NULL,
  'social' VARCHAR(50) NULL,
  'mobileapp' VARCHAR(50) NULL,
  'images' VARCHAR(50) NULL,
  PRIMARY KEY('id'),
);
--
--dumping date for table 'about'
--
INSERT INTO 'about'('content', 'social', 'mobileapp', 'images')
VALUES('mission', 'vision', 'purpose', 'btnmore', 'facebook', 'twitter', 'email','instagram', 'images');

-- --------------------------------------------------------
--
--Table structure for table 'cart'
--
CREATE TABLE 'cart'(
  'id' INT NOT NULL,
  'product' VARCHAR(50) NULL,
  'quantity' INT AUTO_INCREMENT,
  'subtotal' NUMERIC NULL,
  'tax' NUMERIC NULL,
  'total' NUMERIC AUTO_INCREMENT,
  'removes' VARCHAR(50) NULL,
  PRIMARY KEY('id'),
);
--
--dumping data for table 'cart'
--
INSERT INTO 'cart'('product', 'quantity', 'subtotal', 'tax', 'total', 'removes')
VALUES('images', 'names', 'price'),
('?', '?', '?', '?', 'btnremove'));

-- --------------------------------------------------------
--
--Table structure for table 'products'
--
CREATE TABLE 'products'(
  'id' INT NOT NULL,
  'shoptitle' TEXT NULL,
  'homemenu' VARCHAR(50) NULL,
  'inventory' TEXT NULL,
  'btnclick' VARCHAR(50) NULL,
  'featuredproducts' VARCHAR AUTO_INCREMENT,
  'latestproducts' VARCHAR AUTO_INCREMENT,
  'btnadd' VARCHAR(50) NULL,
  'exclusive' VARCHAR AUTO_INCREMENT,
  'btnbuy' VARCHAR(50) NULL,
  PRIMARY KEY('id'),
);
--
--dumping data for table 'products'
--
INSERT INTO 'products'('shoptitle', 'homemenu', 'inventory', 'btnclick','featuredproducts', 
'latestproducts', 'btnadd', 'exclusive', 'btnbuy')
VALUES('HYPERSTORES'),
('menuicon', 'home', 'products', 'payment', 'account', 'contact', 'aboutus', 'carticon'),
('inventory', 'btnclick'),
('images', 'productname', 'rating', 'price', 'btnadd'),
('names', 'descriptions', 'btnbuy');

-- --------------------------------------------------------
--
--Table structure for table 'search'
--
CREATE TABLE 'search'(
  'id' INT NOT NULL,
  'search' TEXT AUTO_INCREMENT,
  'submit' VARCHAR(20) NULL,
  PRIMARY KEY('id'),
);
--
--dumping data for table 'search'
--
INSERT INTO 'search'('search', 'submit')
VALUES('?', 'iconsearch');

-- --------------------------------------------------------
--
-- Table structure for table `users`
--
CREATE TABLE 'users' (
  'id' int NOT NULL,
  'username' varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  'pwd' varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  'statuses' int DEFAULT NULL,
  'access' int DEFAULT NULL,
  '_userstypes' int DEFAULT NULL,
  PRIMARY KEY('id'),
) ;
--
-- Dumping data for table `users`
--
INSERT INTO 'users' ('id', 'username', 'pwd', 'statuses', 'access', '_userstypes') VALUES
(1, 'webadmin', '$2y$10$NKXLi/BalpfosYj2btEkjO7KZxvIX/bBJx1uPVieALynD/LUEP3pe', 0, 1624207745, 7),
(2, 'ordersadmin', '$2y$10$PlqpvA9Oafxu9UA6tbF67OL86oqDjFgY9IPUuSHoPXl3LQ12J8wHu', 0, 1603212168, 3),
(4, 'productsadmin', '$2y$10$gaaoUP8s7iE5QF0HgLTBOut3AL8HhHT4UXhcQ.3mnc42JzM3O/opq', 0, 1626969881, 9),
(6, 'usersadmin', '$2y$10$W4KkiELlafJWyHHamXko/.lzcc0cvRvYSCpqBNt9sbQXB9NVVq3kq', 0, 1590327417, 11),
(7, 'systemadmin', '$2y$10$ImHVY1dgkuB4RMWE8PYd0u7Y3S9TO1mwkJUl6rjeMhwuSpRBbjJue', 0, 1626969877, 13);

-----------------------------------------------------------
COMMIT;