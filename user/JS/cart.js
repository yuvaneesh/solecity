let carts = document.querySelectorAll('.add-cart');

let products = [
  {
    name:"Air Dior",
    tag:"airdior",
    price: 107999,
    inCart: 0
  },
  {
    name:"Smoke Gray",
    tag:"smokegray",
    price: 950,
    inCart: 0
  },
  {
    name:"Retro High",
    tag:"retrohigh",
    price: 1200,
    inCart: 0
  },
  {
    name:"Travis Scott Low",
    tag:"travisscottlow",
    price: 2000,
    inCart: 0
  },
  {
    name:"Converse Off White",
    tag:"converseoffwhite",
    price: 1299,
    inCart: 0
  },
  {
    name:"Asadi",
    tag:"asadi",
    price: 15,
    inCart: 0
  },
  {
    name:"Ultraboost",
    tag:"ultraboost",
    price: 30,
    inCart: 0
  },
  {
    name:"Vapormax",
    tag:"vapormax",
    price: 1299,
    inCart: 0
  },
  {
    name:"Adilette",
    tag:"adilette",
    price: 150,
    inCart: 0
  },
  {
    name:"Deerupt Runner",
    tag:"deeruptrunner",
    price: 500,
    inCart: 0
  },
  {
    name:"Grand Court",
    tag:"grandcourt",
    price: 350,
    inCart: 0
  },
  {
    name:"Human Race",
    tag:"humanrace",
    price: 699,
    inCart: 0
  },
  {
    name:"Nmd R1",
    tag:"nmdr1",
    price: 650,
    inCart: 0
  },
  {
    name:"Nmd R1 PRIDE",
    tag:"nmdr1pride",
    price: 650,
    inCart: 0
  },
  {
    name:"Stan Smith",
    tag:"stansmith",
    price: 355,
    inCart: 0
  },
  {
    name:"Swift Run",
    tag:"swift run",
    price: 250,
    inCart: 0
  },
  {
    name:"Air Force 1",
    tag:"force",
    price: 350,
    inCart: 0
  },
  {
    name:"Air Jordan 1",
    tag:"jordans",
    price: 450,
    inCart: 0
  },
  {
    name:"Air Zoom",
    tag:"zooms",
    price: 430,
    inCart: 0
  },
  {
    name:"Free Rn",
    tag:"freern",
    price: 650,
    inCart: 0
  },
  {
    name:"Revolution 5",
    tag:"revolution5",
    price: 500,
    inCart: 0
  },
  {
    name:"Vapormax",
    tag:"vapormax",
    price: 750,
    inCart: 0
  },
  {
    name:"Zoom Pegasus",
    tag:"zoompegasus",
    price: 680,
    inCart: 0
  },
  {
    name:"Zoom Winflo",
    tag:"zoomwinflo",
    price: 380,
    inCart: 0
  },
];

for (let i=0; i < carts.length; i++) {
  carts[i].addEventListener('click', () => {
    cartNumbers(products[i]);
    totalCost(products[i])
  })
}

function onLoadCartNumbers() {

  let productNumbers = localStorage.getItem('cartNumbers');

  if (productNumbers) {
    document.querySelector('.cart span').textContent = productNumbers;
  }
}

function cartNumbers(product, action) {
  let productNumbers = localStorage.getItem('cartNumbers');
  productNumbers = parseInt(productNumbers);

  let cartItems = localStorage.getItem('productsInCart');
  cartItems = JSON.parse(cartItems);

  if(action == "decrease") {
    localStorage.setItem('cartNumbers', productNumbers - 1);
    document.querySelector('.cart span').textContent = productNumbers - 1;
  } else if(productNumbers) {
    localStorage.setItem("cartNumbers", productNumbers + 1);
    document.querySelector('.cart span').textContent = productNumbers + 1;
  } else {
    localStorage.setItem('cartNumbers', 1);
    document.querySelector('.cart span').textContent = 1;
  }
  setItems(product);
}

function setItems(product) {
  let cartItems = localStorage.getItem('productsInCart');
  cartItems = JSON.parse(cartItems);

  if(cartItems != null) {

    if (cartItems[product.tag] == undefined) {
      cartItems = {
        ...cartItems, 
        [product.tag]: product
      }
    }
    cartItems[product.tag].inCart += 1;
  } else {
    product.inCart = 1;
    cartItems = {
      [product.tag]: product
    }
  }
  localStorage.setItem("productsInCart", JSON.stringify(cartItems))
}

function totalCost(product, action) {
  let cartCost = localStorage.getItem('totalCost');
  
  console.log("My cartCost is", cartCost);
  console.log(typeof cartCost);
  if(action == "decrease"){
    cartCost = parseInt(cartCost);

    localStorage.setItem("totalCost", cartCost - product.price);
  } else if (cartCost != null) {
    cartCost = parseInt(cartCost);
    localStorage.setItem("totalCost", cartCost + product.price);
  } else {
    localStorage.setItem("totalCost", product.price);
  }
}

function displayCart() {
  let cartItems = localStorage.getItem("productsInCart");
  cartItems = JSON.parse(cartItems);
  let productContainer = document.querySelector(".products");
  let cartCost = localStorage.getItem('totalCost');

  //console.log(cartItems);
  if (cartItems && productContainer) {
    productContainer.innerHTML = '';
    Object.values(cartItems).map(item => {
      productContainer.innerHTML += `
      <div class="product">
        <ion-icon name="close-circle"></ion-icon>
        <span>${item.name}</span>
      </div>
      <div class="price">RM${item.price}.00</div>
      <div class="quantity">
        <ion-icon class="decrease" name="arrow-dropleft-circle"></ion-icon>
        <span>${item.inCart}</span>
        <ion-icon class="increase" name="arrow-dropright-circle"></ion-icon>
      </div>
      <div class="total">
        RM${item.inCart * item.price}.00
      </div>
      `;
    });

    productContainer.innerHTML += `
      <div class="basketTotalContainer">
        <h4 class="basketTotalTitle">
          Basket Total
        </h4>
        <h4 class="basketTotal">
          RM${cartCost}.00
        </h4>
    `;
  }

  deleteButtons();
  manageQuantity();
}

function deleteButtons() {
  let deleteButtons = document.querySelectorAll('.product ion-icon');
  let productName;
  let productNumbers = localStorage.getItem('cartNumbers');
  let cartItems = localStorage.getItem('productsInCart');
  cartItems = JSON.parse(cartItems);
  let cartCost = localStorage.getItem('totalCost');

  for(let i=0; i < deleteButtons.length; i++) {
    deleteButtons[i].addEventListener('click', () => {
      productName = deleteButtons[i].parentElement.textContent.trim().toLowerCase().replace(/ /g, '');
      //console.log(productName);
      //console.log(cartItems[productName].name + "" + cartItems[productName].inCart)
      localStorage.setItem('cartNumbers', productNumbers - cartItems[productName].inCart);

      localStorage.setItem('totalCost', cartCost - (cartItems[productName].price * cartItems[productName].inCart));

      delete cartItems[productName];
      localStorage.setItem('productsInCart', JSON.stringify(cartItems));

      onLoadCartNumbers();
      displayCart();
    });
  }
}

function manageQuantity() {
  let decreaseButtons = document.querySelectorAll('.decrease');
  let increaseButtons = document.querySelectorAll('.increase');
  let cartItems = localStorage.getItem('productsInCart');
  let currentQuantity = 0;
  let currentProduct = "";
  cartItems = JSON.parse(cartItems);
  console.log(cartItems);

  for(let i=0; i < decreaseButtons.length; i++) {
    decreaseButtons[i].addEventListener('click', () => {
      currentQuantity = decreaseButtons[i].parentElement.querySelector('span').textContent;
      console.log(currentQuantity);
      currentProduct = decreaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLowerCase().replace(/ /g, '').trim();
      console.log(currentProduct);

      if(cartItems[currentProduct].inCart > 1) {
        cartItems[currentProduct].inCart -= 1;
        cartNumbers(cartItems[currentProduct], "decrease");
        totalCost(cartItems[currentProduct], "decrease");
        localStorage.setItem('productsInCart', JSON.stringify(cartItems));
        displayCart();
      }
    });
  }

  for(let i=0; i < increaseButtons.length; i++) {
    increaseButtons[i].addEventListener('click', () => {
      currentQuantity = increaseButtons[i].parentElement.querySelector('span').textContent;
      console.log(currentQuantity);
      currentProduct = increaseButtons[i].parentElement.previousElementSibling.previousElementSibling.querySelector('span').textContent.toLowerCase().replace(/ /g, '').trim();
      console.log(currentProduct);

        cartItems[currentProduct].inCart += 1;
        cartNumbers(cartItems[currentProduct]);
        totalCost(cartItems[currentProduct]);
        localStorage.setItem('productsInCart', JSON.stringify(cartItems));
        displayCart();
      
    });
  }
}

onLoadCartNumbers();
displayCart();