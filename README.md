# 📦 OCS (Online Complaint System)

OCS is a full-stack web application designed to streamline the process of submitting and managing product-related complaints. It provides two interfaces: one for users to submit issues and another for admins to manage products and review complaints.

## 👤 User Interface (UI)

### - Product Browsing

- Users can view available products categorized and styled with responsive design.
- Product details include name, category, and image preview.

### - Complaint Submission

- Users can easily file complaints through a structured form.
- Inputs include product ID, issue type, and user message.
- Form validations ensure proper data entry before submission.

### - Feedback Confirmation

- After submission, users receive feedback or redirect confirmations ensuring smooth flow.

### - Clean & Responsive UI

- Designed with mobile responsiveness and usability in mind.
- CSS is modular and scoped separately for the user portal.

## 🔐 Admin Dashboard Features

### - Secure Admin Authentication

- Passwords are hashed and verified using `password_hash()` and `password_verify()` for login security.
- Session-based login system to protect admin-only routes.

### - Product Management Panel

- Admins can view, add, edit, or remove products.
- Dynamic product cards loaded from the database with image previews.

### - Complaint Review System

- Complaints are listed from users in a clear table layout.
- Useful for support and tracking issues.

### - Navigation & UI

- Intuitive navigation with page highlighting and logout option.

## ⚙️ Tech Stack

- Frontend: HTML, CSS (custom with variables for theme)
- Backend: PHP
- Database: MySQL
- Session Management: PHP native `$_SESSION`
- Security: Prepared statements, hashed passwords, and session-based authentication

## 📁 Folder Structure

```
/OCS
├── admin/                   # Admin-specific pages
│   ├── add_product.php
│   ├── admin_complaints.php
│   ├── admin_login.php
│   ├── admin_navbar.php
│   ├── admin_products.php
│   ├── delete_product.php
│   ├── edit_product.php
│   └── logout.php
├── css/                     # Stylesheets
│   ├── admin_style.css
│   └── style.css
├── image/                   # Static images (e.g., product images)
├── includes/                # Reusable PHP components
│   ├── db.php               # Database connection
│   ├── footer.php
│   ├── navbar.php
│── complaint.php
├── database.sql             # SQL dump to set up the database
├── faqs.php                 # FAQs page
├── homepage.php             # Public landing page
├── product.php              # Product listing view for users
├── submit_complaint.php     # Complaint submission handler
└── README.md                # Project documentation
```

## 🚀 How to Run

1. Clone the project and place it inside your local server's root directory (e.g., `htdocs` for XAMPP).

2. Import the SQL file (if provided) into your MySQL server to create required tables (`admin`, `products`, `complaints`).

3. Set your database credentials in ` includes/db.php`.

4. Start with `localhost/OCS/homepage.php` for user-side or `localhost/OCS/admin/admin_login.php` for admin-side.

## 👦Author

### [@Deepesh Sunuwar](https://github.com/darkkphoenyx)

## 🔗Can Find Me

Github: [@darkkphoenyx](https://github.com/darkkphoenyx)  
LinkedIn: [@deepeshsunuwar](https://www.linkedin.com/in/deepesh-sunuwar-6237351aa/)  
Facebook: [@deepesh.sunuwar.08](https://www.facebook.com/deepesh.sunuwar.08)  
Instagram: [@sun_deepesh](https://www.instagram.com/sun_deepesh/)  
E-mail: deepgeneral33@gmail.com
