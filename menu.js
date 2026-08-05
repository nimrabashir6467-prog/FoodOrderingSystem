import { db } from "./firebase.js";

import { 
    collection, 
    getDocs, 
    addDoc 
} from "https://www.gstatic.com/firebasejs/11.0.2/firebase-firestore.js";


const foodContainer = document.getElementById("food-container");
const searchFood = document.getElementById("searchFood");


let allFoods = [];



// Place Order Function

const placeOrder = async (name, price) => {

    try {

        await addDoc(collection(db, "orders"), {

            foodName: name,
            price: price,
            quantity: 1,
            status: "Pending",
            orderDate: new Date()

        });


        alert("Order Placed Successfully ✅");

    } 
    catch(error) {

        console.log("Order Error:", error);

    }

};




// Display Food Function

const displayFood = (foods) => {


    foodContainer.innerHTML = "";


    foods.forEach((food) => {


        foodContainer.innerHTML += `

        <div class="col-md-4">

            <div class="card shadow mb-4">

    <img
        src="${food.image}"
        class="card-img-top"
        alt="${food.name}"
        style="height:200px; object-fit:cover;"
    >

    <div class="card-body text-center">

        <h4>${food.name}</h4>


                    <p>
                    Category: ${food.category}
                    </p>


                    <p>
                    Price: Rs. ${food.price}
                    </p>



                    <button 
                    class="btn btn-danger"
                    onclick="placeOrder('${food.name}', ${food.price})">

                    Order

                    </button>


                </div>

            </div>

        </div>

        `;


    });


};




// Load Food From Firebase

const loadFood = async () => {


    try {


        const querySnapshot = await getDocs(collection(db, "food_items"));


        querySnapshot.forEach((doc)=>{


            allFoods.push(doc.data());


        });



        displayFood(allFoods);



    }
    catch(error){


        console.log("Firebase Error:", error);


    }


};




// Search Functionality

searchFood.addEventListener("keyup", ()=>{


    let searchValue = searchFood.value.toLowerCase();



    let filteredFoods = allFoods.filter((food)=>{


        return food.name.toLowerCase().includes(searchValue);


    });



    displayFood(filteredFoods);



});





window.placeOrder = placeOrder;


loadFood();