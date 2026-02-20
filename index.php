<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
      @font-face {
    font-family: interphases demibold;
    src: url(TT\ Interphases\ Pro\ Trial\ DemiBold.ttf);
}
@font-face {
    font-family: interphases medium;
    src: url(TT\ Interphases\ Pro\ Trial\ Medium.ttf);
}
@font-face {
    font-family: interphases extrabold;
    src: url(TT\ Interphases\ Pro\ Trial\ ExtraBold.ttf);
}
        #sign-up {
  font-family: interphases demibold;
  background-color: #000B58;
  border: none;
}

#carousel-details{
  font-family: interphases medium;
  color: #000B58;
}
#carousel-tagline{
  font-family: interphases extrabold;
  color: #000B58;
}
#image-carousel{
  object-fit: cover;
  opacity: 0.3;
}
/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}


/* MARKETING CONTENT
-------------------------------------------------- */

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  margin-bottom: 1.5rem;
  text-align: center;
}
/* rtl:begin:ignore */
.marketing .col-lg-4 p {
  margin-right: .75rem;
  margin-left: .75rem;
}
/* rtl:end:ignore */


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 5rem 0; /* Space out the Bootstrap <hr> more */
}

/* Thin out the marketing headings */
/* rtl:begin:remove */
.featurette-heading {
  letter-spacing: -.05rem;
}

/* rtl:end:remove */

/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 40em) {
  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 1.25rem;
    font-size: 1.25rem;
    line-height: 1.4;
  }

  .featurette-heading {
    font-size: 50px;
  }
}

@media (min-width: 62em) {
  .featurette-heading {
    margin-top: 7rem;
  }
}

#sign-up{
  background-color: darkred;
}

body {
    margin: 0;
    padding: 0;
    background-color: #E3E3E3;
    font-family: interphases medium;
}

.carousel-img{
    width: 101.5%;
    height: 520px;
    object-fit: cover;
    z-index: -5;
    opacity: 0.2;
    position: relative;
    text-align: center;
}
.product-grid{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  column-gap: 1px;
  width: 95%;
  margin: auto;
  padding: 20px;
  margin-right: 20px;

}
.product-div{
    background: beige;
    width: 200px;
    padding-top: 25px;
   /* padding-left: 20px; */
    border-radius: 20px;
    height: 320px;
    box-shadow: 0px 0px 30px -5px #000a5841;
    transition: 0.5s ease;
    line-height: 20px;
    margin-bottom: 20px;
    padding-left: 20px;
 
}
.product-div:hover{
    transform: scale(1.05);
}
.product-img-holder {
    height: 55%;
    width: 85%;
    align-content: center;
    margin-left: 5px;
    border-radius: 15px;
    background-color: #E3E3E3;
    
   }
#image-holder{
  border-radius: 15px;
  height: 100%;
  width: 100%;
  object-fit: cover;
}

.label-box-name{
    font-family: interphases extrabold;
    color: black;
    font-size: 20px;
    position: relative;
    margin-top: 10px;
    color: darkred;
    text-align: left;
}
.label-box {
    font-family: interphases demibold;
    color: black;
    font-size: 13px;
    
}
.product-price, .product-stocks{
    font-family: interphases medium;
    color: #E3E3E3;
    font-size: 13px;
    position: relative;
}
#price-box{
  font-size: 14px;
}

#buy-now{
    border: 1px solid darkred;
    background-color: darkred;
    color: #E3E3E3;
    padding: 5px 8px;
    font-family: interphases demibold;
    margin-top: 10px;
    transition: 0.5s ease;
    width: 100px;
    font-size: 12px;
    border-radius: 5px;
} 
#add-cart{
  margin-right: 5px;
  border-radius: 50px;
  width: 55px;
  border: 1px solid darkred;
    background-color: darkred;
    color: #E3E3E3;
    padding: 5px 8px;
    font-family: interphases demibold;
    margin-top: 10px;
    transition: 0.5s ease;
    font-size: 12px;
}
#add-cart:hover, #buy-now:hover{
    background-color: white;
    color: darkred;
    border: 1px solid darkred;
}
.product-header{
    text-align: center;
    font-family: interphases extrabold;
    font-size: 30px;
}
.category-header{
    width: 100%;
    text-align: center;
    color: #000B58;
    font-family: interphases demibold;
    font-size: 20px;
}
.image-modal{
      background-color: navy;
    }
    .main-logo{
      width: 9%;
      margin-top: 15px;
      
    }
    .nav-div{
      width: 10%;
      margin: 22px auto 0 auto;
      margin-left: 0px;
    }
    a{
      margin-right: 10px;
    }
        #bg-modal{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.43);
  opacity: 0;
  z-index: -100;
}
#bg-modal.show{
  opacity: 1;
  z-index: 50;
} 
    #pop-up-modal{
      border-radius: 20px;
      display: flex;
      box-shadow: 0px 0px 30px -5px #000a5841;
            position: fixed;
            z-index: -50;
            top: 150px;
            left: 250px;
            justify-content: center;
            align-items: center;
            width: 60%;
            height: 50%;
            background-color: white;
            opacity: 0;
            transition: opacity 0.4s ease;     
    }
      #pop-up-modal.show{
      opacity: 1;
      display: block;
      display: flex;
      z-index: 10;
    }


.customer-info{
  width: 20%;
  font-size: 12px;
}
.image-div-modal{
      width: 20%;
      left: 0;
      margin-right: 80px;
    }
    #image-modal {
      width: 150%; 
      height: 100%;
      border-radius: 20px;
      mix-blend-mode: darken;
    }
        .modal-info{
      height: 100%;
      width: 40%;
    }
    #name{
      font-family: interphases extrabold;
      font-size: 35px;
      margin-top: 30px;
      width: 80%;
      margin-left: 30px;
      background-color: none;
      border: none;
      color: darkred;
    }
    #name-modal{
      margin-top: 25px;
    }
    #price, #price2{
      font-family: interphases demibold;
      margin-top: 10px;
      font-size: 20px;
      background-color: none;
      border: none;
      
    }
    #price-modal{
      margin-left: 30px;
      margin-bottom: 20px;
    }
    #stocks{
      font-family: interphases medium;
      font-size: 15px;
      margin-top: 5px;
      margin-left: 30px;
      background-color: none;
      border: none;
    }
    #total_order{
      background-color: none;
      margin-left: 5px;
      width: 30%;
      border: 1px solid #000B58;
      border-radius: 10px;
      margin-top: 15px;
      text-align: center;
    }
    #total_price{
      background-color: none;
      margin-left: 5px;
      width: 30%;
      border: 1px solid #000B58;
      border-radius: 10px;
      margin-top: 10px;
    }
    .quantity-modal{
      margin-left: 30px;
    }
    .place-order{
      height: 12%;
      width: 100%;
      font-size: 20px;

      margin-top: 10px;
      border: none;
      border-radius: 10px;
      background-color: darkred;
      color: white;
    }
    .place-order:hover{
      background-color: #E3E3E3;
      border: 1px solid darkred;
      color: darkred;
    }
    #product_id{
      visibility: hidden;
    }
    #exit-button{
      position: relative;
      left: 160px;
      top: -16px;
      transition: 0.5s ease;
      cursor: pointer;
    }
    .exit-button:hover{
      transform: scale(1.04);
    }
    header{
      background-color: beige;
      color: darkred;
      height: 50px;
      display: flex;
      top: 0;
      position: sticky;
      z-index: 99;
      box-shadow: 1px 5px 20px 2px grey;
      width: 100%;
      
    }
    header span{
      font-family: interphases extrabold;
      font-size: 33px;
      margin-left: 20px;
      width: 50%;
    }
    header a{
      text-decoration: none;
      color: darkred;
      
    }
    .nav-main{
      margin: 13px 0px 0px 30px;
      width: 250%;
    }
    .search-index{
      width: 100%;
      position: relative;
      bottom: 6px;
      align-content: right;
      justify-content: right;
    }
    .search-index input[type=button]{
      background-color: darkred;
      color: beige;
      border: none;
      border-radius: 4px;
      font-family: interphases demibold;
    }
    .search-index input[type=text]{
      border: 1px solid darkred;
      border-radius: 4px;
    }


footer {
    margin-top: 50px;
}
.footer-text{
    font-family: interphases medium;
    font-size: 14px;
    background-color: darkred;
    color: #E3E3E3;
    height: 50px;
    text-align: center;
    padding-top: 15px;

}
.text-favorite{
  text-align: center;
  color: darkred;
  width: 100%;
  font-family: interphases extrabold;
  font-size: 40px;
  margin-top: 30px;
}
#carousel-tagline{
  color: darkred;
}
#carousel-details{
  color: darkred;

}
</style>


    </style>
</head>
<body>
    <header>
        <span id="main-logo">SEOULADE</span>
        <div class="nav-main">
        <a href="product.php">Products</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        </div>
        <div class="search-index">
        <input type="text" name="" id="">
        <input type="button" value="SEARCH">
        <span><img src="" alt="" class="cart-logo"></span>
        </div>
    </header>

        <section class="carousel-section">
<div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#myCarousel"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img id="image-carousel" src="imageabout.png      " alt="img1" width="100%" height="100%">

            <div class="container">
              <div class="carousel-caption text-start">
                <h1 id="carousel-tagline" style="margin-bottom: 80px; font-size: 60px; text-align: center; z-index: 0;">Your One Stop<br> Korean Merch Shop.</h1>
                <p class="opacity-75" id="carousel-details" style="position: relative; bottom: 70px; text-align: center;">
                  Discover the fun and flavors of South Korea.
                </p>
                <p id="signup-btn" style="position: relative; bottom: 50px; text-align: center;">
                  <a class="btn btn-lg btn-primary" href="#" id="sign-up">Shop Now!</a>
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img id="image-carousel" src="CAROUSEL1.jpg" alt="img1" width="100%" height="100%">

            <div class="container">
              <div class="carousel-caption">
                <h1 id="carousel-tagline">Another example headline.</h1>
                <p id="carousel-details">
                  Some representative placeholder content for the second slide
                  of the carousel.
                </p>
                <p><a class="btn btn-lg btn-primary" href="#" id="sign-up">Learn more</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img id="image-carousel" src="CAROUSEL2.webp" alt="img1" width="100%" height="100%">

            <div class="container">
              <div class="carousel-caption text-end">
                <h1 id="carousel-tagline">One more for good measure.</h1>
                <p id="carousel-details">
                  Some representative placeholder content for the third slide of
                  this carousel.
                </p>
                <p>
                  <a class="btn btn-lg btn-primary" href="#" id="sign-up">Browse gallery</a>
                </p>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#myCarousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section class="favorites-section">
            <h2 class="text-favorite">Your K-Merch Favorites!</h2>
                <?php
        include 'db.php';

        $sql = "SELECT * FROM products";
        $result = $conn->query(query:$sql);
    ?>

   <div class="product-grid">
<?php
if($result->num_rows > 0) {
    while ($product = $result->fetch_assoc()){
    
?>
 <div class="product-div">
            <!-- PARA SA IMAGE -->
        <div class="product-img-holder">
        <img src="image.php?id=<?php echo $product['product_id']; ?> " alt="Product Image" id="image-holder">
        </div>
            <!-- PARA SA PROD. NAME -->
        <div class="label-box-name">
            <?php echo $product['name']; ?>
        </div>
            <!-- PARA SA PROD. PRICE -->
            <div class="label-box" id="price-box">
            PHP <?php echo number_format($product['price']); ?>.00
        </div>
            <!-- PARA SA STOCKS -->
        <div class="label-box">
            <?php echo $product['stocks'];?> Stocks Available
        </div>
        <div class="btn-group">
         <input type="submit" value="+ Cart" id="add-cart" onclick="addToCart(<?php echo $product['product_id']; ?>)">
         <button id="buy-now" onclick="openBuyNow(<?php echo $product['product_id']; ?>,
         '<?php echo addslashes($product['name']); ?>',
         <?php echo $product['price']; ?>,
         <?php echo $product['stocks']; ?>
         )">
         Buy Now
         </button>
         </div>
         </div>
         <?php
    }
             } else {
        echo "<p>No products available.</p>";
    }
    $conn->close();
         ?>
          <div id="bg-modal">
<form method="post" action="productadd.php">
    <div id="pop-up-modal">
      <div class="image-div-modal"><img src="" alt="Product Image" id="image-modal"><input type="hidden" name="product_id" id="product_id"></div>
  
      <div class="modal-info">
      
      <div id="name-modal"><span id="name"></span><br></div>
      <div id="price-modal"><span>PHP </span><span id="price"></span><span id="price2">.00</span></div> 
      <div id="stock-modal"><strong><span id="stocks"></strong></span><span> Stocks Available</span></div>
      <div class="quantity-modal">Quantity: <input type="number" name="total_order" id="total_order"></div>
      <div class="quantity-modal">Total Price: <input type="number" name="total_price" id="total_price"></div>
      
      
  </div>
            <div class="customer-info">
              <span id="exit-button">X</span>
        <p><strong>Customer Information</strong></p>
        <hr>
        <label for="name">Full Name:</label>
        <input type="text" name="name-customer" id="name-customer">

        <label for="address">Address:</label>
        <input type="text" name="address-customer" id="address-customer">

        <label for="contact">Contact Number:</label>
        <input type="text" name="contact-customer" id="contact-customer">
        <input type="submit" value="Place Order" class="place-order">
      </div>
    </div>
    </form>

</div>

      </section>

      <footer>
    <p class="footer-text">
        Copyright 2025 © SEOULADE.
    </p>
</footer>
        <script
      src="bootstrap.bundle.min.js"
      class="astro-vvvwv3sm"
    >
  </script>

      <script>
        function openBuyNow(id, name, price, stocks) {
        currentPrice = price;

        document.getElementById("product_id").value = id;
        document.getElementById("name").innerText = name;
        document.getElementById("price").innerText = price;
        document.getElementById("stocks").innerText = stocks;

        document.getElementById("image-modal").src =
        "image.php?id=" + id;

        document.getElementById("total_order").value = 1;
        updateTotal();

        document.getElementById("pop-up-modal").classList.add('show');
        document.getElementById("bg-modal").classList.add('show');
      }
      function updateTotal() {
        let quantity = document.getElementById("total_order").value;
        let total = currentPrice * quantity;

        document.getElementById("total_price").value = total.toFixed(2);

        document.getElementById("total_order").addEventListener("input", updateTotal);
      }

      document.getElementById("exit-button").addEventListener('click', function() {
        document.getElementById("pop-up-modal").classList.remove('show');
        document.getElementById("bg-modal").classList.remove('show');

      });
  </script>
</body>
</html>