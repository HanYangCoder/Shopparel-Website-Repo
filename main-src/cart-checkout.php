<?php
  session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Checkout - Shopparel</title>
    <!---stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!--light-slider-css-->
    <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
    <!--jQuery-->
     <script src="js/jQuery.js"></script>
     <!--light-slider-js-->
     <script src="js/lightslider.js"></script>

    <!--fav-icon-->
    <link rel="shorcut icon" href="images/bag.png"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        
            body{
                font-family:poppins;
            }
        </style>
    <!--using -fontAwesome-for-icons-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
    </head>
    
    <body>
        <!--navigation-->
        <nav>
           
        <!--menu bar-->
        <div class="navigation">
            <!--logo-->
            <a href="#" class="logo">
                <img src="images/logo.png"/>
            </a>
            <!--menu-->
            <ul class="menu">
                <li><a href="index.php">Trends</a>
                     <!--sale-lable-->
                     <span class ="sale-lable">Sale</span>
                </li>
               
                <li><a href="men.php">Men</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="kids.php">Kids</a></li>
            </ul>

            <!--right-menu-->
            <div class="right-menu">
                <!--search-->
                <a href="#" class ="search">
                    <i class="fas fa-search"></i>
                </a>

                <!--user EDITED to use sessions to keep user logged in-->
                <?php if (isset($_SESSION["userID"])): ?>
                <a href="user-profile.php" class="user">
                    <i class="fas fa-user"></i>
                </a>
                <?php else: ?>

                <a href="#" class="user">
                    <i class="fas fa-user"></i>
                </a>
                <?php endif; ?>
                <!--cart-icon-->
                <a href="cart.php">
                    <i class="fas fa-shopping-cart">
                    <!--number-of-product-in-cart-->
                    <span class="num-cart-product">0</span>
                    </i>
                </a>
            </div>
        </div>
        </nav>
        <!--search-bar-->

        <div class="search-bar">
            <!--search-input-->
            <div class="search-input">
                <!--input-->
                <input type="text" placeholder="Search For Product"/>
                <!--cancel-btn-->
                <a href="#" class="search-cancel">
                    <i class="fas fa-times"></i>
                </a>
            </div>
        </div>

        <!--login-and-sign-up-->
        <div class="form">
        <!--login--> 
        <div class="login-form">  
            <!--cancel-btn-->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--heading-->
            <strong>Log In</strong>
            <!-- EDITED this part to redirect data to verifyLogin.php for authentication-->
            <!--inputs-->
            <form name="login_old_member" action="verifyLogin.php" method="GET">
                <input type="text" id="userID" name="userID"  placeholder="Enter User ID"  required="true"/>
                <input type="password" id="password" name="password" placeholder="Enter Password" required="true"/>
                <!--submit-btn-->
                <input type="submit" id="submit" value="Log In"/>
            </form>
           <!--forget-and-sign-up-btn-->
           <div class="form-btns">
           <a href="#" class="forget">Forget Your Password?</a>
           <a href="#" class="sign-up-btn">Create Your Account</a> 
           </div>
        </div>
    
         <!--Sign-Up-->
         <div class="sign-up-form">
            <!--cancel-btn-->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--heading-->
            <strong>Sign Up</strong>
            <!--inputs-->
            <form name="signup_new_member" action="registerNewUser.php" method="GET">
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required/>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required/>
                <input type="password" id="password" name="password" placeholder="Password" required/>
                <input type="text" id="contactNumber" name="contactNumber" placeholder="333333" required/>
                <input type="text" id="email" name="email" placeholder="Example@gmail.com" required/>
                <input type="text" id="address" name="address" placeholder="Example City" required/>
                <!--submit-btn-->
                <input type="submit" id="submit" value="Sign Up"/>
            </form>
           <!--forget-and-sign-up-btn-->
           <div class="form-btns">
           <a href="#" class="already-account">Already Have Account?</a>
           </div>
        </div>

        </div>

        <!--check-out-billing-details-->
        <div class="row">
          <div class="col-75">
            <div class="container">
              <form action="/action_page.php">
        
                <div class="row">
                  <div class="col-50">
                    <h3>Billing Address</h3>
                    <label for="fname"><i class="fa fa-user"></i> Full Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Complete Name">
                    <label for="fname"><i class="fas fa-phone-square-alt"></i> Contact No.</label>
                    <input type="text" id="contactno" name="contactnumber" placeholder="+639-5534-7985-43">
                    <label for="email"><i class="fa fa-envelope"></i> Email</label>
                    <input type="text" id="email" name="email" placeholder="john@example.com">
                    <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                    <input type="text" id="adr" name="address" placeholder="Brgy. Muzon, Taytay, Rizal">
                    <label for="city"><i class="fa fa-institution"></i> City</label>
                    <input type="text" id="city" name="city" placeholder="Manila">
                    <label for="country"><i class="fas fa-globe-asia"></i> Country</label>
                    <input type="text" id="state" name="state" placeholder="">
                    <label for="zip">Zip Code</label>
                    <input type="text" id="zip" name="zip" placeholder="1870">
                     

                    <h3>Shipping Method</h3>
                    <label>
                      <input type="checkbox" checked="checked" name="sameadr"> J&T Express
                    </label>
                    <label>
                      <input type="checkbox" checked="checked" name="sameadr"> LBC
                    </label>
                    <label>
                      <input type="checkbox" checked="checked" name="sameadr"> Ninjavan
                    </label>
                    <label>
                      <input type="checkbox" checked="checked" name="sameadr"> JRS Express
                    </label>
                    <label>
                      <input type="checkbox" checked="checked" name="sameadr"> Standard Delivery
                    </label>
                  </div>
        
                  <div class="col-50">
                    <h3>Payment Method</h3>

                    <label>
                      <input type="checkbox" checked="checked" name="sameadr"> Cash On Delivery
                    </label>
                    <label>
                      <input type="checkbox" checked="checked" name="sameadr"> Credit Card
                    </label>
                    <br>
                    <label for="fname">Accepted Cards</label>
                    <div class="icon-container">
                      <i class="fa fa-cc-visa" style="color:navy;"></i>
                      <i class="fa fa-cc-amex" style="color:blue;"></i>
                      <i class="fa fa-cc-mastercard" style="color:red;"></i>
                      <i class="fa fa-cc-discover" style="color:orange;"></i>
                    </div>
                    <label for="cname">Name on Card</label>
                    <input type="text" id="cname" name="cardname" placeholder="Complete Name">
                    <label for="ccnum">Credit card number</label>
                    <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
                    <label for="expmonth">Exp Month</label>
                    <input type="text" id="expmonth" name="expmonth" placeholder="September">
                    <label for="expyear">Exp Year</label>
                    <input type="text" id="expyear" name="expyear" placeholder="2018">
                    <label for="cvv">CVV</label>
                    <input type="text" id="cvv" name="cvv" placeholder="352">
                     
                    
                  </div>
                </div>

          
                <br>
                <label>
                  <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
                </label>
                <input type="submit" value="Continue to checkout" class="btn">
              </form>
            </div>
          </div>
        
          <div class="col-25">
            <div class="container">
              <h4>Cart
                <span class="price" style="color:black">
                  <i class="fa fa-shopping-cart"></i>
                  <b>3</b>
                </span>
              </h4>
              <p><a href="#">Jayden Skinny Pants</a> <span class="price"> ₱799.00</span></p>
              <p><a href="#">Kids Boy Fashion</a> <span class="price">₱599.00</span></p>
              <p><a href="#">Rita Yosemite Tee</a> <span class="price">₱399.00</span></p>
            
              <hr>
              <p>Subtotal <span class="subprice" style="color:black"><b>₱1,797.00</b></span></p>
              <p>Shipping Fee <span class="sfprice" style="color:black"><b>₱150.00</b></span></p>
              <p>Total <span class="price" style="color:black"><b>₱1,947.00</b></span></p>
              <br>
              <p>Shipping Method <span class="smethod" style="color:black"><b>J&T Express</b></span></p>
              <p>Payment Method <span class="pmethod" style="color:black"><b>Cash on Delivery</b></span></p>
            </div>
          </div>
        </div>


      
       

        
    <!--footer---------------------------->
   
    <div class="footer">
        <div class="footer-content">
    
          <div class="footer-section about">
            <h1 class="logo-text"><span>Shop</span>parel</h1>
            <p>
              Shopparel is a web-based, Fashion E-Commerce platform 
              in the Philippines that caters to non-mainstream retailers.
              It specifically retails clothing fashion and apparel, such 
              as tops and bottoms. 
            </p>
           
           
    
          </div>
    
          <div class="footer-section links">
            <h2>Customer Service</h2>
    
            <ul>
              <a href="#">
                <li>FAQ</li>
              </a>
              <a href="#">
                <li>Size Guide</li>
              </a>
              <a href="#">
                <li>Exchanges and Returns</li>
              </a>
              <a href="#">
                <li>Products index</li>
              </a>
              <a href="#">
                <li>Contact Us</li>
              </a>
            </ul>
          </div>
    
          <div class="footer-section links">
            <h2>Quick Links</h2>
    
            <ul>
              <a href="#">
                <li>Who Are We</li>
              </a>
              <a href="#">
                <li>Sell With Us</li>
              </a>
              <a href="#">
                <li>Advertise With Us</li>
              </a>
              <a href="#">
                <li>Terms & Conditions</li>
              </a>
              <a href="#">
                <li>Privacy Policy</li>
              </a>
            </ul>
          </div>
    
          <div class="footer-section links">
            <h3>Contact Us</h3>
    
            <ul>
              <a href="#">
                <li>Luna St., La Paz, Iloilo City, <br>
                    Philippines</li>
              </a>
              <a href="#">
                <li>+639-5534-7985-43</li>
              </a>
              <a href="#">
                <li>Shopparel@gmail.com</li>
              </a>
              <a href="#">
                <li>Shopparel Support</li>
              </a>
              <a href="#">
                <li>Admin</li>
              </a>
            </ul>
          </div>
    
         
          <div class="socials">
            
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          
        </div>
    
      </div>
        
      </div>
      
    
           
            <!--script-->
            <script type="text/javascript">
    
            /*------For Search bar -------*/
            $(document).on('click','.search',function(){
                $('.search-bar').addClass('search-bar-active')
            });
    
            $(document).on('click','.search-cancel',function(){
                $('.search-bar').removeClass('search-bar-active')
            });
    
    
            /*-----login-sign-up-form-----*/
            $(document).on('click','.user,.already-account',function(){
                $('.form').addClass('login-active').removeClass('sign-up-active')
            });
    
            $(document).on('click','.sign-up-btn',function(){
                $('.form').addClass('sign-up-active').removeClass('login-active')
            });
    
            $(document).on('click','.form-cancel',function(){
                $('.form').removeClass('login-active').removeClass('sign-up-active')
            });
    
            /*-----full-slider-script-----*/
    
            $(document).ready(function() {
            $('#adaptive').lightSlider({
            adaptiveHeight:true,
            auto:true,
            item:1,
            slideMargin:0,
            loop:true
            });
            });
    
             /*--For-Product-SLider----------------*/
            $(document).ready(function() {
            $('#autoWidth').lightSlider({
            autoWidth:true,
            loop:true,
            onSliderLoad: function() {
                $('#autoWidth').removeClass('cS-hidden');
            } 
            });  
            });
    
             /*--For-make-Menu-responsive------------*/
            $(document).ready(function(){
            $('.toggle').click(function(){
                $('.toggle').toggleClass('active')
                $('.navigation').toggleClass('active')
            })
        });
    
          
            </script>
        </body>
    
    </html>
