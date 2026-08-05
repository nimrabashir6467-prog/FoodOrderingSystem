<!DOCTYPE html>
<html>
<head>

<title>QuickBite - Manage Orders</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

</head>

<body>


<nav class="navbar navbar-dark bg-danger">

<div class="container">

<a class="navbar-brand fw-bold" href="dashboard.php">
🍔 QuickBite
</a>

<a href="dashboard.php" class="btn btn-light btn-sm">
Dashboard
</a>

</div>

</nav>



<div class="container mt-5">


<h2 class="text-center text-danger mb-4">
📦 Manage Orders
</h2>


<div id="ordersContainer" class="row">

</div>


</div>




<script type="module">


import { db } from "./firebase.js";


import { 
collection,
getDocs,
updateDoc,
deleteDoc,
doc
}

from "https://www.gstatic.com/firebasejs/11.0.2/firebase-firestore.js";





const ordersContainer = document.getElementById("ordersContainer");





async function loadOrders(){


ordersContainer.innerHTML = "";



const snapshot = await getDocs(collection(db,"orders"));



snapshot.forEach((orderDoc)=>{


let order = orderDoc.data();

let id = orderDoc.id;



ordersContainer.innerHTML += `


<div class="col-md-4 mb-3">


<div class="card shadow p-3">


<h4>${order.foodName}</h4>


<p>
Quantity: ${order.quantity}
</p>


<p>
Price: Rs. ${order.price || order.totalPrice}
</p>


<p>
Status: ${order.status}
</p>



<button class="btn btn-success mb-2"
onclick="updateStatus('${id}')">

Complete Order

</button>



<button class="btn btn-danger"
onclick="deleteOrder('${id}')">

Delete Order

</button>



</div>


</div>



`;



});



}





// Update Status

window.updateStatus = async function(id){


await updateDoc(doc(db,"orders",id),{

status:"Completed"

});


alert("Order Completed ✅");


loadOrders();


}





// Delete Order

window.deleteOrder = async function(id){


await deleteDoc(doc(db,"orders",id));


alert("Order Deleted 🗑️");


loadOrders();


}





loadOrders();



</script>



</body>
</html>