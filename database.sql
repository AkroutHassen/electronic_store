-- Create the electronic_store database
CREATE DATABASE IF NOT EXISTS electronic_store;

-- Use the electronic_store database
USE electronic_store;

-- Create the users table
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    password VARCHAR(255),
    city VARCHAR(255),
    country VARCHAR(255),
    address VARCHAR(255),
    postal_code VARCHAR(10),
    phone VARCHAR(15),
    number VARCHAR(15),
    role INT
);

-- Create the orders table
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date DATE,
    address VARCHAR(255),
    total_amount DECIMAL(10, 2),
    user_id INT,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Create the categories table
CREATE TABLE IF NOT EXISTS categories (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255)
);

-- Create the discounts table
CREATE TABLE IF NOT EXISTS discounts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    discount DECIMAL(5, 2)
);

-- Create the products table
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    brand VARCHAR(255),
    description TEXT,
    price float,
    qty_stock INT,
    in_stock BOOLEAN,
    date DATE,
    new_price float,
    discount_id INT,
    category_id INT,
    FOREIGN KEY (discount_id) REFERENCES discounts(id) ON DELETE SET NULL ON UPDATE CASCADE,
    FOREIGN KEY (category_id) REFERENCES categories(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Create the images table
CREATE TABLE IF NOT EXISTS images (
    id INT AUTO_INCREMENT PRIMARY KEY,
    path VARCHAR(255),
    product_id INT,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Create the orderdetails table
CREATE TABLE IF NOT EXISTS orderdetails (
    id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT,
    product_id INT,
    price float,
    qty INT,
    FOREIGN KEY (order_id) REFERENCES orders(id) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (product_id) REFERENCES products(id) ON DELETE CASCADE ON UPDATE CASCADE
);
