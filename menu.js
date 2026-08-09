import { db } from "./firebase.js";

import {
collection,
getDocs,
addDoc
} from "https://www.gstatic.com/firebasejs/11.0.2/firebase-firestore.js";

const foodContainer = document.getElementById("food-container");
const searchFood = document.getElementById("searchFood");

let allFoods = [];

// ================= PLACE ORDER =================

const placeOrder = async (name, price) => {

```
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

catch (error) {

    console.error("Order Error:", error);

    alert("Order failed: " + error.message);

}
```

};

// ================= DISPLAY FOOD =================

const displayFood = (foods) => {

```
foodContainer.innerHTML = "";

if (foods.length === 0) {

    foodContainer.innerHTML = `
        <div class="text-center">
            <p class="text-danger">
                No food items found.
            </p>
        </div>
    `;

    return;
}


foods.forEach((food) => {

    foodContainer.innerHTML += `

    <div class="col-md-4 mb-4">

        <div class="card shadow h-100">

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
```

};

// ================= LOAD FOOD FROM FIREBASE =================

const loadFood = async () => {

```
try {

    console.log("Loading food from Firebase...");

    const querySnapshot =
        await getDocs(
            collection(db, "food_items")
        );


    console.log(
        "Food documents found:",
        querySnapshot.size
    );


    allFoods = [];


    querySnapshot.forEach((doc) => {

        console.log(
            "Food:",
            doc.id,
            doc.data()
        );

        allFoods.push(doc.data());

    });


    displayFood(allFoods);

}

catch (error) {

    console.error(
        "Firebase Error:",
        error
    );


    foodContainer.innerHTML = `

        <div class="text-center">

            <p class="text-danger">

                Firebase Error:

            </p>

            <p>

                ${error.message}

            </p>

        </div>

    `;

}
```

};

// ================= SEARCH =================

searchFood.addEventListener("keyup", () => {

```
const searchValue =
    searchFood.value.toLowerCase();


const filteredFoods =
    allFoods.filter((food) => {

        return food.name
            .toLowerCase()
            .includes(searchValue);

    });


displayFood(filteredFoods);
```

});

// Make placeOrder available to HTML button

window.placeOrder = placeOrder;

// Load food

loadFood();
