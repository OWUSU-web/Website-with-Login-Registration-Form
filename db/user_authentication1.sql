-- Create the user_authentication database if it doesn't exist
CREATE DATABASE IF NOT EXISTS user_authentication1;

-- Use the user_authentication database
USE user_authentication1;

-- Create the users table to store user information
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);
