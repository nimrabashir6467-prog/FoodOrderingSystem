<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Food - QuickBite</title>

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

<div class="container mt-5" style="max-width:500px;">

    <div class="card shadow p-4 text-center">

        <h2 class="text-danger mb-3">Delete Food</h2>

        <p>Are you sure you want to delete this food item?</p>

        <img src="../images/burger.jpg" width="120" class="mb-3">

        <h4>Burger</h4>
        <p>Price: <strong>500 Rs</strong></p>

        <div class="mt-3">
            <a href="view_food.php" class="btn btn-secondary">Cancel</a>
            <button class="btn btn-danger">Delete</button>
        </div>

    </div>

</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    © 2026 QuickBite
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>