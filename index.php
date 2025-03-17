<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camping Shop</title>
    <link rel="stylesheet" href="jamp1.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: rgb(4, 64, 36);
            padding: 10px;
            text-align: center;
            border-radius: 50%;
        }
        th {
            background-color: rgb(4, 64, 36);
            border-radius: 50%;
        }
        .sticky {
            position: fixed;
            top: 0;
           
            width: 100%;
        }
        .add-to-go {
    background-color:rgb(59, 12, 178); 
    color: white; 
    padding: 15px 32px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block;
    font-size: 16px; 
    border: none; 
    border-radius: 12px; 
    cursor: pointer; 
    align-items: center;
    justify-content: center;
    display: block;
    margin: 0 auto;
  }
  
  .add-to-go:hover {
    background-color:rgb(10, 3, 34); 
  }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="image/adventure.webp" alt="Camping" width="60" height="60">
        </div>
        <nav>
            <ul>
                <li> <a href="#">Home</a>
                </li>
                <li><a href="#">Products</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Cart</a></li>
                <li><a href="#">About Us</a></li>
            </ul>
        </nav>
        
    </header>
    

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Our Camping Mall</h1>
            <h6>Create your dream campsite with our camping essentials!</h6>
        </div>
    </section>

    <section class="products">
        <h2>Get everything you need with a Discount</h2>
        <div class="product-list">
            <div class="product">
                <img src="image/fe.webp" alt="Tents" width="150" height="200">
                <p>Tents</p>
                <del>120$</del>
                <b>100$</b>
                <div>
                <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
            <div class="product">
                <img src="image/lamp.jpg" alt="Camping Shelters"  >
                <p>Lamps</p>
                <del>220$</del>
                <b>160$</b>
                <div>
                <button class="add-to-cart">Add to Cart</button>
                </div>
                
            </div>
            <div class="product">
                <img src="image/gas.jpg" alt="Sleeping Equipment" >
                <p>Gas Stove</p>
                <del>190$</del>
                <b>150$</b>
                <div>
                <button class="add-to-cart">Add to Cart</button>
                </div>
                
            </div>
            <div class="product">
                <img src="image/chair.jpg" alt="Camping Furniture" >
                <p>Camp Chair</p>
                <del>183$</del>
                <b>148$</b>
                <div>
                <button class="add-to-cart">Add to Cart</button>
                </div>
                
            </div>
            
        </div>
    </section>

    <section class="guides">
     <h2>Popular Products And Accessories</h2>
        <div class="scroll-container">
            <div class="scroll-content">
                <div class="product"><img src="image/hammock.webp" alt="Hammocks">
                <p>Hammock</p>
                <del>64$</del>
                <b>52$</b>
                <div>
                <button class="add-to-cart">Add to Cart</button>
                </div>
                
            </div>

                
                <div class="product"><img src="image/sleepingbag.jpg" alt="Shelter">
                <p>Slepping Bag</p>
                <del>150$</del>
                <b>140$</b>
                <div>
                <button class="add-to-cart">Add to Cart</button>
                </div>
                </div>
                
                <div class="product"><img src="image/charger.jpg" alt="Sleeping Bag"><p>Charger</p><del>220$</del>
                <b>150$</b>><div>
                <button class="add-to-cart">Add to Cart</button>
                </div></div>
                
                <div class="product"><img src="image/compasss.jpg" alt="Camping Chair"><p>Compass GPS</p><del>220$</del>
                <b>190$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                
                <div class="product"><img src="image/icebox.avif" alt="Cooking Equipment"><p>Ice Box</p><del>180$</del>
                <b>150$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                
                
                <div class="product"><img src="image/backbag.jpg" alt="Water Bottle"><p>BackBag</p><del>160$</del>
                <b>130$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
               
                <div class="product"><img src="image/flashlight.webp" alt="Water Bottle"><p>FlashLight</p><del>170$</del>
                <b>150$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                
                <div class="product"><img src="image/multiknife.webp" alt="Water Bottle"><p>Multi Knife</p><del>70$</del>
                <b>60$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                
                <div class="product"><img src="image/camptrap.webp" alt="Water Bottle"><p>Camptrap</p><del>180$</del>
                <b>170$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                
                <div class="product"><img src="image/raingear.jpg" alt="Water Bottle"> <p>RainGear</p><del>1540$</del>
                <b>1000$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
               
                <div class="product"><img src="image/redrepellent.png" alt="Water Bottle"><p>Redrepellent</p><del>320$</del>
                <b>296$</b><div><button class="add-to-cart">Add to Cart</button></div></div>

                <div class="product"><img src="image/camptable.jpg" alt="Water Bottle"><p>Camptable</p><del>420$</del>
                <b>300$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                <div class="product"><img src="image/whistle.jpg" alt="Water Bottle"><p>Whistle</p><del>520$</del>
                <b>400$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                <div class="product"><img src="image/suncream.jpg" alt="Water Bottle"><p>Suncream</p><del>420$</del>
                <b>300$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                <div class="product"><img src="image/raincover.jpg" alt="Water Bottle"><p>Raincover</p><del>220$</del>
                <b>100$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                <div class="product"><img src="image/fuelcaster.webp" alt="Water Bottle"><p>Fuel canister</p><del>740$</del>
                <b>600$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                <div class="product"><img src="image/paracord.jpg" alt="Water Bottle"><p>Paracord</p><del>220$</del>
                <b>190$</b><div><button class="add-to-cart">Add to Cart</button></div></div>
                
                
                
            </div>
        </div>
        

        
    </section>
    <section class="Stay">
        <h1>Way To Stay</h1>
        <div class="image-container">
            <figure>
            <img src="image/cabin.jpg" alt="cabi-list" width="420" height="300">
            <figcaption>
                Cabins & lodging
                <p>Find comfort and convenience with a cabin or lodge.</P>
            </figcaption>

            </figure>
            <figure>
            <img src="image/rvsite.jpg" alt="rvsite-list" width="420" height="300" >
            <figcaption>
                RV Sites
                <p>Camp in style from the comfort of your vehicle.</p>
            </figcaption>

            </figure>
            <figure>
            <img src="image/tentsite.jpg" alt="tentsize-list" width="420" height="300">
            <figcaption>
                Tent Sites
                <p>Pitch your tent and relax next to the fire.</p>
            </figcaption>

            </figure>
    

            
            
            


        </div>
         <button class="add-to-go">Go To Blog</button>

        

    </section>
    <section class="hold">
        <h1>See personalized recommedations</h1>
        <button class="add-to-sign">Sign in</button>
        <p>New Customers?Start Here</p>
        <button class="add-to-resign">Register</button>

    </section>
    <style>
    .image-container {
      display: flex;
      justify-content: space-between;
    }
    .hold h1 
    {
        align item: center;
        margin: 0;
        color:  #d0e666;
        text-align: center;
        
    }
    .hold p
    {
        align item: center;
        margin: 0;
        color:  #d0e666;
        text-align: center;
        
    }
    .add-to-sign {
    background-color:rgb(216, 19, 19); 
    color: white; 
    padding: 15px 32px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block;
    font-size: 13px; 
    border: none; 
    border-radius: 0px; 
    cursor: pointer; 
    align-items: center;
    justify-content: center;
    display: block;
    margin: 0 auto;
  }
  
  .add-to-sign:hover {
    background-color:rgb(10, 3, 34); 
  }
  .add-to-resign {
    background-color:rgb(14, 218, 126); 
    color: white; 
    padding: 15px 32px;
    text-align: center; 
    text-decoration: none; 
    display: inline-block;
    font-size: 13px; 
    border: none; 
    border-radius: 0px; 
    cursor: pointer; 
    align-items: center;
    justify-content: center;
    display: block;
    margin: 0 auto;
  }
  
  .add-to-resign:hover {
    background-color:rgb(10, 3, 34); 
  }

    .image-container figure {
      text-align: center; /* Center the caption */
    }

    .image-container img {
      widt
      height: auto;
    }

    figcaption {
      font-size: 16px;
      color: white;
      margin-top: 8px;
    }
    footer
    {
        background-color: white;
    }
    footer p
    {
        color: black;
    }
  </style>
  
<footer>
        <p>© 2025 Camping Shop. All Rights Reserved By Kaung Khant Htet.</p>
        <a href="https://www.facebook.com/share/15ATVXmBBF/?mibextid=wwXIfr" target="_blank">
        <img src="image/facebook.png" alt="Facebook" width="90" height="60">
        </a>
        <a href="https://www.instagram.com" target="blank">
        <img src="image/inte.jpg" alt="Telegram" width="50"height="50">
        </a>
        <a href="https://t.me/yourchannel" target="_blank">
        <img src="image/telegm.png" alt="Instragram" width="60" height="50">
        </a>
</footer>


<table id="myTable">
    <thead>
        <tr id="headerRow">
            <th><div class="logo">
            <img src="image/adventure.webp" alt="Camping" width="60" height="60">
            </div></th>
            
        </tr>
    </thead>
    
</table>

<script>
    window.onscroll = function() {
        var header = document.getElementById("headerRow");
        if (window.pageYOffset > header.offsetTop) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    };
</script>



    <script src="script.js"></script>
</body>
</html>