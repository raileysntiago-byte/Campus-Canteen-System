
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campus Canteen System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #ff8a05f8;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 650px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 8px 0 15px;
            box-sizing: border-box;
        }

        button {
            background: #165b43;
            color: white;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <?php
    include 'header.php';
    include 'menu.php';
    ?>
    <h2>Place Your Order</h2>
    <form method = "POST" action="process.php">
        <label>Name</label><input name="customer_name" required>
        <label>Customer Type</label>
        <select name="customer_type">
            <option value="student">Student</option>
            <option value="employee">Employee</option>
            <option value="guest">Guest</option>
        </select>   
        
        <label>Product</label>
        <select name="product">
            <option value="M1">Chicken Adobo Meal</option>
            <option value="M2">Pork Sisig Meal</option>
            <option value="M3">Vegetable Meal</option>
            <option value="D1">Bottled Water</option>
            <option value="D2">Iced Tea</option>
        </select>
        <label>Quantity</label>
        <input name="quantity" type="number" min="1" max="10" required>
        <label>Budget (PHP)</label>
        <input name="budget" type="number" min="0" step="0.01" required>
        <button type="submit">Process Order</button>
    </form>
    <?php
    include 'footer.php';
    ?>