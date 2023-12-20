<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Chutties world</title>
        <link rel="stylesheet" href="css\style.css">


<!--for icons using boxicons.com (2)-->
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">


<!--for fonts using google-fonts-open sans family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet"> 

</head>
<body class="show-cart">
    <!--navbar-->
    <section id="header">
        <a href="#"><img src="img\logo3.png" alt="" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a  href="index.php">Home</a></li>
                <li><a href="boys.php">Boys</a></li>
                <li><a href="girls.php">Girls</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.php">Aboutus</a></li>
                <li><a class="lg-bag" id="lg-bag" ><i class='bx bx-shopping-bag'></i></a></li>
                <a href="#" id="close"><i class='bx bx-arrow-back'></i></a>
            </ul>
        </div>
        <div id="mobile">
           
            <a ><i class="bx bx-shopping-bag"></i></a>
            <i id="bar" class="bx bx-menu"></i>
        </div>
     </section>

     <div class="cart">
        <div class="cart-tab">
            <h1>Shopping Cart</h1>
           <div class="list-cart">
               <div class="item">
                   <div class="image">
                       <img src="img\g5.webp" alt="">
                   </div>
                   
                   <div class="name">
                    Y&F Plain Peach Dress                 
                     </div>
                   <div class="totalPrice">
                       ₹799.00
                   </div>
                   <div class="quantity">
                    <strong><input type="number" value="1" min="0" class="number"></strong>
                   </div>
               </div>

               <div class="item">
                <div class="image">
                    <img src="img\g9.webp" alt="">
                </div>
                
                <div class="name">
                    Kids Plain Navy Dress                  
                  </div>
                <div class="totalPrice">
                    ₹999.00
                </div>
                <div class="quantity">
                    <strong><input type="number" value="1" min="0"></strong>
                </div>
            </div>

            <div class="item">
                <div class="image">
                    <img src="img\b11.webp" alt="">
                </div>
                
                <div class="name">
                    ids Color-Block Multicolored Shirt                  
                  </div>
                <div class="totalPrice">
                    ₹499.00
                </div>
                <div class="quantity">
                    <strong><input type="number" value="1" min="0"></strong>
                </div>
            </div>

            <div class="item">
                <div class="image">
                    <img src="img\b4.webp" alt="">
                </div>
                
                <div class="name">
                    Kids Peach Coconut Tree                 
                  </div>
                <div class="totalPrice">
                    ₹599.00
                </div>
                <div class="quantity">
                    <strong><input type="number" value="1" min="0"></strong>
                </div>
            </div> <div class="item">
                <div class="image">
                    <img src="img\g20.webp" alt="">
                </div>
                
                <div class="name">
                    Kids White Self-Textured Jumpsuit                 
                  </div>
                <div class="totalPrice">
                    ₹899.00
                </div>
                <div class="quantity">
                    <strong><input type="number" value="1" min="0"></strong>
                </div>
            </div> 
           
</div>
           <div class="btn2">
               <button class="close2">CLOSE</button>
               <button class="checkout">CHECK OUT</button>
           </div>
   
           </div>
        </div>

     <section id="productdetails" class="section-p1">
        <div class="single-pro-image">
            <img src="img\b2.webp" alt="" width="100%" id="mainImg"> 
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home / Boys</h6>
            <h4>Kids Glass Printed Pocket Burgundy T-Shirt</h4>
            <h2>₹ 299.00</h2>
            <select>
                <option>Select Age</option>
                <option>3-4</option>
                <option>4-5</option>
                <option>6-7</option>
                <option>7-8</option>
            </select>
           <strong><input type="number" value="1" min="0"></strong>
            <button class="normal">Add to Cart</button>
            <h4>Product Details:</h4><span>
                SKU: 300945151001
                Description: Shirt
                
                Stand out from the crowd with this color-block multicolored shirt from HOP kids. The bold and vibrant colors create a striking and unique look. Pair it with neutral bottoms like black pants or jeans to let the shirt be the focal point of your outfit.
                
                Net Quantity: 1N
                Fit: Comfort Fit
                Care Instruction: Machine Wash
                Fabric Composition: Woven Oxford
                Manufactured By:
                
                Trent Limited, Bombay House, 24, Homi Mody Street, Fort, Mumbai – 400001
                Country Of Origin: India
            </span>
        </div>
     </section>

     <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and<span> special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button  onclick="window.location.href='login.php'" class="normal">Sign Up</button>
        </div>
     </section>

     
     <footer class="section-p1">
        <div class="col">
            <img src="img\logo3.png" alt=""  width=250px;
            height=70px;>
            <h4>Contact</h4>
            <p><strong>Address:</strong>166/7,Bharadhiyar Street,Pallipalayam,Namakkal-638006</p>
            <p><strong>Phone:</strong>01234 56789 (or) 2345 6789 </p>
            <p><strong>Hours:</strong>10.00-18.00.Mon - Sat</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon">
                    <i class='bx bxl-facebook'></i>
                    <i class='bx bxl-instagram-alt' ></i>
                    <i class='bx bxl-meta'></i>
                    <i class='bx bxl-youtube'></i>
                </div>
                </div></div>
                <div class="col">
                    <h4>About</h4>
                    <a href="index.php">Home</a>
                    <a href="collection.php">Collections</a>
                    <a href="about.php">Aboutus</a>
                    <a href="contact.php">Contact Us</a>
                 </div>
                <div class="col">
                    <h4>My Account</h4>
                    <a onclick="window.location.href='register.php'">Sign In</a>
                    <a >View Cart</a>
                    <a href="login.php">Log Out</a>
                    <a href="#">Help</a>
                </div>
                <div class="copyright">
                    <p>&copy; 2023, Tech etc - HTML CSS Ecommerce Site</p>
                </div>
            </div>
        </div>
     </footer>
    <script src="js\script2.js"></script>
    <script src="js\script1.js"></script>
</body>
</html>