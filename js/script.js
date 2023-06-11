// kelas aktif
const navbarNav = document.querySelector(".navbar-nav");

// menu hamburger di tekan
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// menu search form

const searchform = document.querySelector(".search-form");
const searchbox = document.querySelector("#search-box");

document.querySelector("#search-button").onclick = (e) => {
  searchform.classList.toggle("active");
  searchbox.focus();
  e.preventDefault();
};

// untuk menutup menu tekan sembarangan
const hm = document.querySelector("#hamburger-menu");
const sb = document.querySelector("#search-button");

document.addEventListener("click", function (e) {
  if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
  if (!sb.contains(e.target) && !searchform.contains(e.target)) {
    searchform.classList.remove("active");
  }
});

// Get all the menu card elements
const menuCards = document.querySelectorAll(".menu-card");

// Iterate over each menu card
menuCards.forEach((menuCard) => {
  // Get the link and cart icon elements
  const link = menuCard.querySelector(".menu-card-link");
  const cartIcon = menuCard.querySelector(".menu-card-cart");

  // Add a click event listener to the link element
  link.addEventListener("click", (event) => {
    event.preventDefault();
    // Call a function to spawn the form input or perform any desired action
    spawnFormInput();
  });

  // Add a click event listener to the cart icon element
  cartIcon.addEventListener("click", (event) => {
    event.preventDefault();
    // Call a function to spawn the form input or perform any desired action
    spawnFormInput();
  });
});

// Function to spawn the form input
function spawnFormInput() {
  // Write your code to spawn the form input here
  console.log("Form input spawned!");
}

