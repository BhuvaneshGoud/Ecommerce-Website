<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right,rgb(123, 247, 254),rgb(95, 255, 199));
    }

    .checkout {
        width: 80%;
            margin: 50px auto;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: transparent;
    }

    h1 {
        text-align: center;
        text-color: black;
    }

    button {
        padding: 10px 20px;
        border: none;
        background-color: green;
        color: white;
        cursor: pointer;
        border-radius: 5px;
    }

    button:hover {
        background-color: darkgreen;
    }
</style>
<body>
    <div class="checkout">
        <h1>Checkout</h1>
        <p>Thank you for your purchase!</p>
        <p>Your order has been placed successfully.</p>
    </div>
</body>
</html>
