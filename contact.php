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

     <section id="page-header">
        <h2>#ContactUs</h2>
        <p>We love to hear from you!</p>

     </section>

     <section id="contact-details" class="section-p1">
        <div class="details">
            <span>CONNECT WITH US</span>
            <h2>Visit our location or contact us today</h2>
            <li>
                <i class="bx bx-map"></i>
                <p>
                    Eshwaran Kovil Erode Fort, Erode, Tamil Nadu 638001
                     </p>
                </li>
                <li>
                <i class="bx bx-envelope"></i>
                <p>abcdefghi@gmail.com</p>
                </li>
                <li>
                <i class="bx bx-phone"></i>
                <p>1234567890</p>
            </li>
            <li>
                <i class='bx bx-time-five'></i>
                <p>Monday to Saturday: 9.00am to 9pm</p>
            </li>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3911.897214002179!2d77.71891777058369!3d11.342217823870103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba96f476ac55361%3A0x25a1639cc07e622a!2sEshwaran%20Kovil!5e0!3m2!1sen!2sin!4v1702535963983!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
     </section>

     <section id="form-details">
        <form action="">
            <span>TYPE YOUR MESSAGE</span>
            <h2>We love to hear from you</h2>
            <input type="text" placeholder="Your Name">
            <input type="text" placeholder="E-Mail">
            <input type="text" placeholder="Subject">
            <textarea name="" placeholder="Your Message" cols="30" rows="10"></textarea>
            <button class="normal" onclick="display();">Submit</button>
        </form>
        <div class="message">
            <img src="img\message.png" >
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
    <script src="js\script3.js"></script>
    </body>
    </html>