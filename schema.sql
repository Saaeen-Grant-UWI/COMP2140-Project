-- Create table for customers
CREATE TABLE customers (
  customer_id INT PRIMARY KEY AUTO_INCREMENT,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  phone_number VARCHAR(20), 
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);


-- Create table for vehicles
CREATE TABLE vehicles (
  vehicle_id INT PRIMARY KEY AUTO_INCREMENT,
  customer_id INT NOT NULL,
  license_plate_number VARCHAR(255) NOT NULL UNIQUE,
  make VARCHAR(255) NOT NULL,
  model VARCHAR(255) NOT NULL,
  year INT NOT NULL,
  FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);

-- Create table for appointments
CREATE TABLE appointments (
  appointment_id INT PRIMARY KEY AUTO_INCREMENT,
  customer_id INT NOT NULL,
  license_plate_number VARCHAR(255) NOT NULL,
  time VARCHAR(255) NOT NULL,
  date DATE NOT NULL,
  FOREIGN KEY (customer_id) REFERENCES customers(customer_id),
  FOREIGN KEY (license_plate_number) REFERENCES vehicles(license_plate_number)
);

-- Create table for admins
CREATE TABLE admins (
  admin_id INT PRIMARY KEY AUTO_INCREMENT,
  email VARCHAR(255) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL
);
