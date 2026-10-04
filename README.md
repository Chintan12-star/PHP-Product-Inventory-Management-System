# Product Inventory Management System

A web-based **Product Inventory Management System** developed using **PHP and MySQL**. The project provides user registration and login authentication, session management, product CRUD operations, and PDF export functionality.

## 📌 Project Overview

This project was developed as a PHP practical assessment. It demonstrates how PHP can be integrated with MySQL to build a simple inventory management application.

The system contains two main database tables:

- `users` – Stores registered user information.
- `products` – Stores product inventory records.

## 🚀 Features

### 1. User Registration
- User registration with:
  - Name
  - Email
  - Password
  - Phone Number
  - City
- Passwords are securely hashed using PHP's `password_hash()` function.

### 2. User Login
- Login using email and password.
- Password verification using `password_verify()`.
- Session-based authentication.
- Invalid login credentials display an appropriate error message.

### 3. Dashboard
- Accessible only to logged-in users.
- Displays the logged-in user's name.
- Navigation bar.
- Logout functionality.
- Generate PDF option.

### 4. Product Management

Users can add product details including:

- Product Name
- Category
- Price
- Quantity
- Supplier Name

### 5. CRUD Operations

The system supports complete CRUD functionality:

- **Create** – Add new products.
- **Read** – Display products from MySQL.
- **Update** – Edit existing product details.
- **Delete** – Delete products with confirmation.

### 6. PDF Export

- Product records can be exported as a PDF.
- PDF data is fetched directly from the MySQL database.

## 🛠️ Technologies Used

- **PHP**
- **MySQL**
- **HTML5**
- **CSS3**
- **JavaScript**
- **XAMPP**
- **MySQL / phpMyAdmin**
- **Sessions**
- **SQL**
- **PDF Generation Library**

## 📂 Project Structure

```text
PHP-Product-Inventory-Management-System/
│
├── db.php
├── dashborad.php
├── register.php
├── login.php
├── home.php
├── logout.php
├── edit.php
├── delete.php
├── pdf.php
│
│
└── README.md
```

> The exact filenames may differ depending on the implementation.

## 🗄️ Database

Create a MySQL database and configure the database connection in `db.php`.

The project uses two tables:

### Users Table

Stores registration and authentication details.

```text
users
├── id
├── name
├── email
├── password
├── phone
└── city
```

### Products Table

Stores inventory information.

```text
products
├── id
├── product_name
├── category
├── price
├── quantity
└── supplier_name
```

## ⚙️ Installation & Setup

### Step 1: Install XAMPP

Install XAMPP and start:

- Apache
- MySQL

### Step 2: Clone the Repository

```bash
git clone https://github.com/YOUR-USERNAME/PHP-Product-Inventory-Management-System.git
```

### Step 3: Move Project to XAMPP

Copy the project folder into:

```text
C:\xampp\htdocs\
```

### Step 4: Create Database

Open:

```text
http://localhost/phpmyadmin
```

Create the required database and import the SQL file from:

```text
database/database.sql
```

### Step 5: Configure Database Connection

Update `db.php` with your MySQL configuration.

Example:

```php
<?php

$conn = mysqli_connect("localhost", "root", "", "product_inventory");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

?>
```

### Step 6: Run the Project

Open the project in your browser:

```text
http://localhost/PHP-Product-Inventory-Management-System/
```

## 🔐 Security Features

- Password hashing using `password_hash()`.
- Password verification using `password_verify()`.
- Session-based authentication.
- Dashboard restricted to logged-in users.
- Logout functionality destroys the user session.

## 📊 CRUD Workflow

```text
Login
  ↓
Dashboard
  ↓
Add Product
  ↓
View Products
  ↓
Edit / Update
  ↓
Delete
  ↓
Generate PDF
```

## 🎯 Learning Objectives

This project demonstrates practical implementation of:

- PHP programming
- MySQL database connectivity
- SQL queries
- User authentication
- PHP sessions
- CRUD operations
- Form handling
- Password hashing
- PDF generation
- XAMPP and phpMyAdmin

## 👨‍💻 Author

**Chintamani Ghevade**

Computer Engineering Student

## 📄 Project Requirements

This project follows the requirements of the PHP Practical Assessment covering PHP, MySQL, Sessions, CRUD Operations and PDF Generation.
