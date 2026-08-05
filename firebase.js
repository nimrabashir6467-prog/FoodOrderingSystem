import { initializeApp } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-app.js";
import { getFirestore } from "https://www.gstatic.com/firebasejs/11.0.2/firebase-firestore.js";

const firebaseConfig = {
  apiKey: "AIzaSyBVoU3UMmWPji03TS_XU_ZNHCGtY5fJrPQ",
  authDomain: "quickbite-21e58.firebaseapp.com",
  projectId: "quickbite-21e58",
  storageBucket: "quickbite-21e58.firebasestorage.app",
  messagingSenderId: "874037081220",
  appId: "1:874037081220:web:f7812a30f6350075aabed1"
};

const app = initializeApp(firebaseConfig);

const db = getFirestore(app);

export { db };