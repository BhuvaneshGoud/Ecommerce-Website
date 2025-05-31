# Ecommerce-Website
Ecommerce Website Using PHP MyAdmin

E-Commerce PHP Application
A simple e-commerce application built using PHP and MySQL. This includes features like product management, shopping cart, admin panel, and more.
*****************************************************************************************
🚀 Features
Product listing and details

Cart management (add/update/delete)

Admin login/logout

Admin dashboard

Add/Edit/Delete products
******************************************************************************************
📦 Requirements
PHP >= 7.4

MySQL >= 5.7

Web server (Apache/Nginx) or XAMPP/Laragon/WAMP

Composer (if using any dependencies)
*******************************************************************************************
🛠️ Installation & Setup
Clone the repository

git clone https://github.com/BhuvaneshGoud/ecommerce.git

Move project to your server directory

If using XAMPP: Move to htdocs/ folder

If using Laragon: Move to www/ folder

Start the web server and MySQL

For XAMPP or Laragon, open the control panel and start Apache and MySQL

Create the database

Open phpMyAdmin

Create a new database (e.g., ecommerce_db)

Import the provided .sql file (usually found in the /database folder)

Configure database connection

Open the configuration file (e.g., config.php)

Set your DB_HOST, DB_USER, DB_PASS, and DB_NAME correctly

Access the project in the browser

Visit:::: http://localhost/your-project-folder
********************************************************************************************************************
🔐 Admin Panel
URL: http://localhost/your-project-folder/admin/

Default Credentials:

Username: admin

Password: admin123 (or set in DB)
*********************************************************************************************************
📁 Folder Structure Overview
bash
Copy
Edit
/admin           → Admin panel pages  
/cart            → Cart functionality  
/config          → Configuration files  
/database        → SQL dump  
/products        → Product management  
/index.php       → Home page
********************************************************************************************
❓ Troubleshooting
Check PHP error logs if a page is blank

Make sure the database name matches in your config

Ensure Apache and MySQL are running
******************************************************************************************************
📜 License
This project is for learning purposes. Use it freely with credits.
******************************************************************************************************
