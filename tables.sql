CREATE DATABASE gnc_clinic_system;

CREATE TABLE users(
    id int AUTO_INCREMENT PRIMARY KEY,
    role enum('user','admin') NOT NULL DEFAULT 'user',
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
);

CREATE TABLE inventory(
    id int AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR (255) NOT NULL,
    category ENUM('Medicine','Supply') NOT NULL,
    stock VARCHAR (255) NOT NULL,
    expiration_date VARCHAR (255) NOT NULL,
    quantity INT NOT NULL,
    status VARCHAR(20) GENERATED ALWAYS AS (
        CASE 
            WHEN stock <= 10 THEN 'Low on Stock'
            ELSE 'Normal'
        END
    ) STORED 
);

CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id_num VARCHAR(255) NOT NULL UNIQUE,
    first_name VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255) NULL,
    last_name VARCHAR(255) NOT NULL,
    course ENUM(
        'BSA', 
        'BSBA', 
        'BSIT', 
        'BSN', 
        'BSMLS', 
        'BSCE', 
        'BSP', 
        'BSTM'
    ) NULL,
    year_section VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone_num VARCHAR(20) NOT NULL,
    birthdate DATE NOT NULL,
    age INT NOT NULL,
    gender ENUM ('Male', 'Female') NOT NULL,
    student_type ENUM ('Elementary', 'Junior High School', 'Senior High', 'College') NOT NULL,
    address VARCHAR(255) NOT NULL
);

CREATE TABLE transactions (
    transaction_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    concern ENUM('Medicine','Necessities', 'Clinic Admission') NOT NULL,
    transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP 
    ON UPDATE CURRENT_TIMESTAMP,

    FOREIGN KEY (student_id) REFERENCES students(id)
);
