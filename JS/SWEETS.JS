const product = [
  {
    id: 0,
    image: "IMAGES/SWEET_CRAVINGS/almond_chocolate.webp",
    title: "ALMOND CHOCOLATES",
    price: 150,
  },
  {
    id: 1,
    image: "IMAGES/SWEET_CRAVINGS/brown_rasgola.webp",
    title: "RASGOOLA",
    price: 80,
  },
  {
    id: 2,
    image: "IMAGES/SWEET_CRAVINGS/coconut_barfi.webp",
    title: "COCONUT BURFI",
    price: 60,
  },
  {
    id: 3,
    image: "IMAGES/SWEET_CRAVINGS/GULAB_JAMUN.jpg",
    title: "GILAB JAMUN",
    price: 100,
  },
  {
    id: 4,
    image: "IMAGES/SWEET_CRAVINGS/kaju_katli.webp",
    title: "KAJU KATLI",
    price: 200,
  },
  {
    id: 5,
    image: "IMAGES/SWEET_CRAVINGS/milk_pedha.webp",
    title: "MILK PEDHA ",
    price: 120,
  },
  {
    id: 6,
    image: "IMAGES/SWEET_CRAVINGS/sugar_rewari.webp",
    title: "SUGAR REWARY",
    price: 80,
  },
  {
    id: 7,
    image: "IMAGES/SWEET_CRAVINGS/sugar_free_laddoos.jpg",
    title: "SUGAR FREE LADOOS",
    price: 160,
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
