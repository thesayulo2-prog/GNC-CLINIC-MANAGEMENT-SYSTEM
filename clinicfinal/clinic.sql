CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    school_id VARCHAR(50) UNIQUE,
    first_name VARCHAR(100),
    middle_name VARCHAR(100),
    last_name VARCHAR(100),
    year_section VARCHAR(50),
    email VARCHAR(150),
    phone VARCHAR(20),
    birthdate DATE,
    age INT,
    gender VARCHAR(20),
    student_type VARCHAR(50),
    department VARCHAR(50),
    address TEXT
);

CREATE TABLE transactions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    concern VARCHAR(50),
    details TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (student_id) REFERENCES students(id)
);

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    role ENUM('admin', 'user') DEFAULT 'user',
    status ENUM('Active','Inactive') DEFAULT 'Active',
    last_login DATETIME,
    FOREIGN KEY (student_id) REFERENCES students(id)
);