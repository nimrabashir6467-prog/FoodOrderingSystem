<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickBite - Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">🍔 QuickBite</a>

        <div>
            <a href="dashboard.php" class="btn btn-light btn-sm">Dashboard</a>
            <a href="index.php" class="btn btn-light btn-sm">Home</a>
        </div>
    </div>
</nav>

<!-- Profile -->
<div class="container mt-5">

    <div class="card shadow p-4 mx-auto" style="max-width:600px;">

        <h2 class="text-center text-danger mb-4">
            👤 User Profile
        </h2>

        <table class="table table-bordered">

            <tr>
                <th>Email</th>
                <td id="userEmail">Loading...</td>
            </tr>

            <tr>
                <th>Account Status</th>
                <td>Active ✅</td>
            </tr>

            <tr>
                <th>Authentication</th>
                <td>Firebase Authentication</td>
            </tr>

        </table>

        <div class="text-center mt-3">

            <button id="logoutBtn" class="btn btn-danger">
                Logout
            </button>

        </div>

    </div>

</div>

<footer class="bg-dark text-white text-center p-3 mt-5">
    © 2026 QuickBite
</footer>

<script type="module">

import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-app.js";

import {
    getAuth,
    onAuthStateChanged,
    signOut
} from "https://www.gstatic.com/firebasejs/11.0.2/firebase-auth.js";


const firebaseConfig = {
  apiKey:  "AIzaSyBVoU3UMmWPji03TS_XU_ZNHCGtY5fJrPQ",
  authDomain: "quickbite-21e58.firebaseapp.com",
  projectId: "quickbite-21e58",
  storageBucket: "quickbite-21e58.firebasestorage.app",
  messagingSenderId: "874037081220",
  appId: "1:874037081220:web:f7812a30f6350075aabed1"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);


// Show Logged-in User Email
onAuthStateChanged(auth, (user) => {

    if(user){

        document.getElementById("userEmail").innerHTML = user.email;

    }else{

        window.location.href = "login.php";

    }

});


// Logout
document.getElementById("logoutBtn").addEventListener("click", ()=>{

    signOut(auth).then(()=>{

        alert("Logout Successful ✅");

        window.location.href="login.php";

    });

});

</script>

</body>
</html>