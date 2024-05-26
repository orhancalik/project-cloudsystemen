const products = [
  { id: 1, name: "Lifting Gloves", price: 16.99 },
  { id: 2, name: "Adjustable Dumbbells", price: 125.99 },
  { id: 3, name: "Protein Bar", price: 2.49 },
  { id: 4, name: "Fitness Watch", price: 89.99 },
  { id: 5, name: "Yoga Mat", price: 12.99 },
  { id: 6, name: "Gym Shirt", price: 16.99 },
  { id: 7, name: "Wheyprotein Shake", price: 29.99 },
  { id: 8, name: "Fitness Ball", price: 9.99 },
  { id: 9, name: "Cardio Machine", price: 79.99 },
  { id: 10, name: "Personal Training", price: 19.99 },
  { id: 11, name: "Gym Nutrition", price: 25.99 },
  { id: 12, name: "Group Fitness", price: 22.99 },
];
let cart = [];
let wishlist = [];

function addToCart(productName) {
  const product = products.find((p) => p.name === productName);
  if (product) {
    cart.push(product);
    updateCart();
  }
}

// wishlist
function addToWishlist(productName) {
  const product = products.find((p) => p.name === productName);
  if (product) {
    wishlist.push(product);
    updateWishlist();
  }
}

function toggleWishlist(button) {
  const productName = button.parentNode.querySelector("h2").textContent;

  const index = wishlist.findIndex((p) => p.name === productName);

  if (index === -1) {
    wishlist.push(products.find((p) => p.name === productName));
    button.classList.add("active");
  } else {
    wishlist.splice(index, 1);
    button.classList.remove("active");
  }

  updateWishlist();
}

function updateWishlist() {
  const wishlistElement = document.getElementById("wishlist");
  wishlistElement.innerHTML = "";
  wishlist.forEach((product) => {
    const li = document.createElement("li");

    const productImage = document.createElement("img");
    productImage.src = `assets/${product.name
      .toLowerCase()
      .replace(/\s/g, "")}.jpg`;
    productImage.alt = product.name;
    productImage.style.width = "100px";
    productImage.style.height = "100px";
    li.appendChild(productImage);

    const productInfo = document.createElement("span");
    productInfo.textContent = `${product.name} - €${product.price}`;
    li.appendChild(productInfo);

    const removeButton = document.createElement("button");
    removeButton.classList.add("remove-item-btn");
    removeButton.textContent = "x";
    removeButton.onclick = function () {
      removeItemFromWishlist(product.name);
    };
    li.appendChild(removeButton);

    wishlistElement.appendChild(li);
  });
}

function updateCart() {
  const cartElement = document.getElementById("cart");
  const cartCountElement = document.getElementById("cart-count");
  const subtotalElement = document.getElementById("subtotal");
  const vatElement = document.getElementById("vat");
  const totalElement = document.getElementById("total");

  let itemCount = 0;
  let subtotal = 0;

  const cartMap = new Map();

  cart.forEach((product) => {
    if (cartMap.has(product.name)) {
      cartMap.set(product.name, cartMap.get(product.name) + 1);
    } else {
      cartMap.set(product.name, 1);
    }
    subtotal += product.price;
  });

  cartElement.innerHTML = "";
  cartMap.forEach((quantity, productName) => {
    const product = products.find((p) => p.name === productName);
    const li = document.createElement("li");

    const productImage = document.createElement("img");
    productImage.src = `assets/${productName
      .toLowerCase()
      .replace(/\s/g, "")}.jpg`;
    productImage.alt = productName;
    productImage.style.width = "100px";
    productImage.style.height = "100px";
    li.appendChild(productImage);

    const productInfo = document.createElement("span");
    productInfo.textContent = `${productName} x ${quantity} - €${(
      product.price * quantity
    ).toFixed(2)}`;
    li.appendChild(productInfo);

    const removeButton = document.createElement("button");
    removeButton.classList.add("remove-item-btn");
    removeButton.textContent = "x";
    removeButton.onclick = function () {
      removeItem(productName);
    };
    li.appendChild(removeButton);

    cartElement.appendChild(li);

    itemCount += quantity;
  });
  function removeItem(productName) {
    const index = cart.findIndex((p) => p.name === productName);
    if (index !== -1) {
      cart.splice(index, 1);
      updateCart();
    }
  }

  function removeItemFromWishlist(productName) {
    const index = wishlist.findIndex((p) => p.name === productName);
    if (index !== -1) {
      wishlist.splice(index, 1);
      updateWishlist();
    }
  }

  const vat = subtotal * 0.21;
  const total = subtotal + vat;

  cartCountElement.textContent = itemCount;
  subtotalElement.textContent = `€${subtotal.toFixed(2)}`;
  vatElement.textContent = `€${vat.toFixed(2)}`;
  totalElement.textContent = `€${total.toFixed(2)}`;
}

function clearCart() {
  cart = [];
  updateCart();
}

//slideshow

let slider = document.querySelector(".slider .list");
let items = document.querySelectorAll(".slider .list .item");
let next = document.getElementById("next");
let prev = document.getElementById("prev");
let dots = document.querySelectorAll(".slider .dots li");

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function () {
  active = active + 1 <= lengthItems ? active + 1 : 0;
  reloadSlider();
};
prev.onclick = function () {
  active = active - 1 >= 0 ? active - 1 : lengthItems;
  reloadSlider();
};
let refreshInterval = setInterval(() => {
  next.click();
}, 4000);
function reloadSlider() {
  slider.style.left = -items[active].offsetLeft + "px";
  //
  let last_active_dot = document.querySelector(".slider .dots li.active");
  last_active_dot.classList.remove("active");
  dots[active].classList.add("active");

  clearInterval(refreshInterval);
  refreshInterval = setInterval(() => {
    next.click();
  }, 4000);
}

dots.forEach((li, key) => {
  li.addEventListener("click", () => {
    active = key;
    reloadSlider();
  });
});
window.onresize = function (event) {
  reloadSlider();
};

