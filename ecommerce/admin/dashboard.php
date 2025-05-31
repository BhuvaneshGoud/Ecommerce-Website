<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header("Location: login.php");
    exit();
}

// Initialize variables with empty values
$total_products = "";
$total_orders = "";
$total_users = "";
$total_revenue = "";
$new_users = "";
$total_feedback = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $total_products = $_POST['total_products'];
    $total_orders = $_POST['total_orders'];
    $total_users = $_POST['total_users'];
    $total_revenue = $_POST['total_revenue'];
    $new_users = $_POST['new_users'];
    $total_feedback = $_POST['total_feedback'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right,rgb(123, 247, 254),rgb(95, 255, 199));
            color: #333;
        }
        .container {
            width: 80%;
            margin: 50px auto;
            background-color: transparent;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        nav a {
            text-decoration: none;
            padding: 12px 25px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        nav a:active {
            transform: scale(0.95);
        }
        nav a:hover {
            background-color: #45a049;
            transform: scale(1.05);
        }
        .logout {
            background-color: #f44336;
        }
        .logout:active {
            transform: scale(0.95);
        }
        .logout:hover {
            background-color: #e53935;
            transform: scale(1.05);
        }
        .dashboard-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 30px;
        }
        .card {
            background-color: #fff;
            padding: 20px;
            margin: 10px;
            width: calc(33% - 20px);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .form-container {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-container form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        .form-container form input[type="text"],
        .form-container form input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-container form input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .form-container form input[type="submit"]:hover {
            background-color: #45a049;
        }
        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            color: #777;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const buttons = document.querySelectorAll("nav a");
            buttons.forEach(button => {
                button.addEventListener("click", function() {
                    alert(`Navigating to: ${this.textContent}`);
                });
            });
        });
    </script>
</head>
<body>
    <div class="container">
        <h2>Admin Dashboard</h2>
        <nav>
            <a href="add_product.php">Add Product</a>
            <a href="manage_products.php">Manage Products</a>
            <a href="logout.php" class="logout">Logout</a>
        </nav>
        <div class="form-container">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="total_products">Total Products:</label>
                <input type="number" id="total_products" name="total_products" value="<?php echo $total_products; ?>" required>
                
                <label for="total_orders">Orders:</label>
                <input type="number" id="total_orders" name="total_orders" value="<?php echo $total_orders; ?>" required>
                
                <label for="total_users">Users:</label>
                <input type="number" id="total_users" name="total_users" value="<?php echo $total_users; ?>" required>
                
                <label for="total_revenue">Revenue:</label>
                <input type="number" id="total_revenue" name="total_revenue" value="<?php echo $total_revenue; ?>" required>
                
                <label for="new_users">New Users:</label>
                <input type="number" id="new_users" name="new_users" value="<?php echo $new_users; ?>" required>
                
                <label for="total_feedback">Feedback:</label>
                <input type="number" id="total_feedback" name="total_feedback" value="<?php echo $total_feedback; ?>" required>
                
                <input type="submit" value="Submit">
            </form>
        </div>
        <div class="dashboard-content">
            <div class="card">
                <h3>Total Products</h3>
                <p><?php echo $total_products; ?></p>
            </div>
            <div class="card">
                <h3>Orders</h3>
                <p><?php echo $total_orders; ?></p>
            </div>
            <div class="card">
                <h3>Users</h3>
                <p><?php echo $total_users; ?></p>
            </div>
            <div class="card">
                <h3>Revenue</h3>
                <p>$<?php echo $total_revenue; ?></p>
            </div>
            <div class="card">
                <h3>New Users</h3>
                <p><?php echo $new_users; ?></p>
            </div>
            <div class="card">
                <h3>Feedback</h3>
                <p><?php echo $total_feedback; ?></p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Admin Dashboard</p>
    </footer>
</body>
</html>
