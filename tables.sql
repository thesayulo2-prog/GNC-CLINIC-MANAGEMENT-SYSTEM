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

CREATE TABLE transaction(
    CREATE TABLE transactions (
    transaction_id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT NOT NULL,
    concern ENUM('Medicine','Supply') NOT NULL,
    department ENUM(
        'College of Accountancy', 
        'College of Business Administration', 
        'College of Arts, Sciences and Education', 
        'College of Nursing', 'College of Medical Laboratory Science', 
        'College of Engineering'
        ) NOT NULL,
    transaction_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    FOREIGN KEY (student_id) REFERENCES students(student_id)
);

CREATE TABLE students(
    id int AUTO_INCREMENT PRIMARY KEY,
    student_id_num VARCHAR(255) NOT NULL,
    first_name VARCHAR(255) NOT NULL,
    middle_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    year_section VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone_num VARCHAR(255) NOT NULL,
    birthdate VARCHAR(255) NOT NULL,
    age VARCHAR(255) NOT NULL,
    gender VARCHAR(255) NOT NULL,
    student_type VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL
);
