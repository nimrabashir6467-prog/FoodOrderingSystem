<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Food - QuickBite</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand fw-bold" href="../dashboard.php">🍔 QuickBite</a>
    </div>
</nav>

<div class="container mt-5">

    <h2 class="text-center text-danger mb-4">Food Menu</h2>

    <table class="table table-bordered table-hover text-center">

        <tr class="table-danger">
            <th>ID</th>
            <th>Food</th>
            <th>Price</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>1</td>
            <td>Burger</td>
            <td>500 Rs</td>
            <td><img src="../images/burger.jpg" width="70"></td>
            <td>
                <a href="edit_food.php" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete_food.php" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Pizza</td>
            <td>800 Rs</td>
            <td><img src="../images/pizza.jpg" width="70"></td>
            <td>
                <a href="edit_food.php" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete_food.php" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>Cold Drink</td>
            <td>200 Rs</td>
            <td><img src="../images/drink.jpg" width="70"></td>
            <td>
                <a href="edit_food.php" class="btn btn-warning btn-sm">Edit</a>
                <a href="delete_food.php" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>

    </table>

    <a href="add_food.php" class="btn btn-success">+ Add New Food</a>

</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    © 2026 QuickBite
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>