CREATE TABLE roles (
    role_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    department VARCHAR(55) NOT NULL,
    role_name VARCHAR(55) NOT NULL,
    salary INT NOT NULL
);

CREATE TABLE employee (
    employee_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(55) NOT NULL,
    last_name VARCHAR(55) NOT NULL,
    display_name VARCHAR(55) NOT NULL,
    email VARCHAR(55) NOT NULL,
    password VARCHAR(255) NOT NULL
);

INSERT INTO employee (first_name, last_name, display_name, email, password) VALUES
('John', 'Doe', 'John Doe', 'john.doe@example.com', 'password1'),
('Jane', 'Smith', 'Jane Smith', 'jane.smith@example.com', 'password2');
