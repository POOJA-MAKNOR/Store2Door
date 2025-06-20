const product = [
  {
    id: 0,
    image: "IMAGES/DAIRY_PRODUCTS/bread2.jpg",
    title: "Bread",
    price: 120,
  },
  {
    id: 1,
    image: "IMAGES/DAIRY_PRODUCTS/buttermilk.png",
    title: "ButterMilk",
    price: 70,
  },
  {
    id: 2,
    image: "IMAGES/DAIRY_PRODUCTS/cheese.webp",
    title: "Cheese",
    price: 60,
  },
  {
    id: 3,
    image: "IMAGES/DAIRY_PRODUCTS/cream.webp",
    title: "Amul cream",
    price: 50,
  },
  {
    id: 4,
    image: "IMAGES/DAIRY_PRODUCTS/milk_powder2.webp",
    title: "Milk Powder",
    price: 40,
  },
  {
    id: 5,
    image: "IMAGES/DAIRY_PRODUCTS/milk.webp",
    title: "Milk",
    price: 50,
  },
  {
    id: 6,
    image: "IMAGES/DAIRY_PRODUCTS/fruit-bread.png",
    title: "Fruit bread",
    price: 60,
  },
  {
    id: 7,
    image: "IMAGES/DAIRY_PRODUCTS/yoghurt.webp",
    title: "Yoghurt",
    price: 90,
  },
];
const categories = [
  ...new Set(
    product.map((item) => {
      return item;
    })
  ),
];
let i = 0;
document.getElementById("root").innerHTML = categories
  .map((item) => {
    var { image, title, price } = item;
    return (
      `<div class='box'>
            <div class='img-box'>
                <img class='images' src=${image}></img>
            </div>
        <div class='bottom'>
        <p>${title}</p>
        <h2>Rs ${price}.00</h2>` +
      "<button onclick='addtocart(" +
      i++ +
      ")'>Add to cart</button>" +
      `</div>
        </div>`
    );
  })
  .join("");

var cart = [];

function addtocart(a) {
  cart.push({ ...categories[a] });
  displaycart();
}
function delElement(a) {
  cart.splice(a, 1);
  displaycart();
}

function displaycart() {
  let j = 0,
    total = 0;
  document.getElementById("count").innerHTML = cart.length;
  if (cart.length == 0) {
    document.getElementById("cartItem").innerHTML = "Your cart is empty";
    document.getElementById("total").innerHTML = "Rs " + 0 + ".00";
  } else {
    document.getElementById("cartItem").innerHTML = cart
      .map((items) => {
        var { image, title, price } = items;
        total = total + price;
        document.getElementById("total").innerHTML = "Rs " + total + ".00";
        return (
          `<div class='cart-item'>
                <div class='row-img'>
                    <img class='rowimg' src=${image}>
                </div>
                <p style='font-size:12px;'>${title}</p>
                <h2 style='font-size: 15px;'>Rs ${price}.00</h2>` +
          "<i class='fa-solid fa-trash' onclick='delElement(" +
          j++ +
          ")'></i></div>"
        );
      })
      .join("");
  }
}

function showPlaced() {
  alert("Your Order Will be placed After Login !!");
}
