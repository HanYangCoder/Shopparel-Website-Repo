<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Shopparel</title>
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
                <!--user-->
                <a href="#" class="user">
                    <i class="fas fa-user"></i>
                </a>
                <!--cart-icon-->
                <a href="cart.php">
                    <i class="fas fa-shopping-cart">
                    <!--number-of-product-in-cart-->
                    <span class="num-cart-product">3</span>
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
            <!--inputs-->
            <form>
                <input type="email" name="email"  placeholder="Example@gmail.com"  required/>
                <input type="password" name="password" placeholder="Password" required/>
                <!--submit-btn-->
                <input type="submit" value="Log In"/>
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
            <form>
                <input type="text" name="fullname" placeholder="Full Name" required/>
                <input type="email" name="email" placeholder="Example@gmail.com" required/>
                <input type="password" name="password" placeholder="Password" required/>
                <!--submit-btn-->
                <input type="submit" value="Sign Up"/>
            </form>
           <!--forget-and-sign-up-btn-->
           <div class="form-btns">
           <a href="#" class="already-account">Already Have Account?</a>
           </div>
        </div>
       

        </div>

        <!--Full-slider-->
        <ul id="adaptive" class="cs-hidden">
        
            <!--box-1-->
            <li class="item-a">
                <!--box1-->

                <div>
        
                <div class="full-slider-box f-slide-1">
                 <!--slider-text-container-->
                <div class="slider-text-container">
                <span></span>
                </div>
                </div>

                </div>
            </li>

            <li class="item-a">
                <!--box2-->
                
                <div>
        
                <div class="full-slider-box f-slide-2">
                 <!--slider-text-container-->
                <div class="slider-text-container">
                <span></span>
                </div>
                </div>

                </div>
            </li>

            <li class="item-a">
                <!--box3-->
                
                <div>
        
                <div class="full-slider-box f-slide-3">
                 <!--slider-text-container-->
                <div class="slider-text-container">
                <span></span>
                </div>
                </div>

                </div>
            </li>
        </ul>

        <!--Featured-Categories-->

        <div class="feature-heading">
            <h2>Featured Categories</h2>
        </div>

        <ul id="autoWidth" class="cs-hidden">
            <!--box-1--------------------->
            <li class="item">

        <!--feature-box-->
        <div class="feature-box">
            <a href="feature-dresses.php">
                <img src="images/feature-1.png" />
            </a>
        </div>

        <!--text-->
        <span>Dresses</span>
            </li>

              <!--box-2--------------------->
            <li class="item">

        <!--feature-box-->
        <div class="feature-box">
            <a href="feature-shirts.php">
                <img src="images/feature-2.png" />
            </a>
        </div>
        
        <!--text-->
        <span>Shirts</span>
            </li>

             <!--box-3--------------------->
            <li class="item">

        <!--feature-box-->
        <div class="feature-box">
            <a href="feature-jackets.php">
                <img src="images/feature-3.png" />
            </a>
        </div>
        
        <!--text-->
        <span>Jackets</span>
            </li>
        
             <!--box-4--------------------->
             <li class="item">

        <!--feature-box-->
        <div class="feature-box">
            <a href="#">
                <img src="images/feature-4.png" />
            </a>
        </div>
                
        <!--text-->
        <span>Pants</span>
        </li>
       </ul>

       <!--new-arrival-->
       <section class="new-arrival">
           <!--heading-->

           <div class="arrival-heading">
               <strong>New Arrival</strong>
               <p>We Provide you New Design Fashion Clothes</p>
           </div>


        <!--product-container-->
        <div class="product-container">

            <!--product-box-1-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-1.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Topman Oversized 
                        t-shirt</a>
                    <span class="p-price">₱299.00</span>
                </div>
            </div>


            <!--product-box-2-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-2.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Basic Tee for Kids</a>
                    <span class="p-price">₱189.00</span>
                </div>
            </div>


            <!--product-box-3-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-3.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Baby Plum Tee</a>
                    <span class="p-price">₱220.00</span>
                </div>
            </div>


            <!--product-box-4-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-4.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Hooded Bomber Jacket</a>
                    <span class="p-price">₱899.00</span>
                </div>
            </div>


            <!--product-box-5-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-5.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Hourglass flare Jeans</a>
                    <span class="p-price">₱799.00</span>
                </div>
            </div>


            <!--product-box-6-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-6.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Floral Sleeve Shirt</a>
                    <span class="p-price">₱399.00</span>
                </div>
            </div>


            <!--product-box-7-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-7.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Flippy Mini Dress</a>
                    <span class="p-price">₱499.00</span>
                </div>
            </div>

            <!--product-box-8-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-8.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Cargo track Pants</a>
                    <span class="p-price">₱999.00</span>
                </div>
            </div>


            <!--product-box-9-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-9.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Swing Dress</a>
                    <span class="p-price">₱289.00</span>
                </div>
            </div>


            <!--product-box-10-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-10.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Basic Jogger</a>
                    <span class="p-price">₱399.00</span>
                </div>
            </div>


            <!--product-box-11-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-11.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Metallic Swoosh Hoodie</a>
                    <span class="p-price">₱599.00</span>
                </div>
            </div>


            <!--product-box-12-->
            <div class="product-box">

                <!--img-->
                <div class="product-img">
                     <!--add-cart-->
                <a href="#" class="add-cart">
                    <i class="fas fa-shopping-cart"></i>
                </a>
                <img src="images/p-12.png" />
                </div>

                <!--details-->
                <div class="product-details">
                    <a href="#" class="p-name">Nike Navy Jersy Short</a>
                    <span class="p-price">₱299.00</span>
                </div>
            </div>
        </div>
       </section>

        <!---sale------------------------------------>
        <section class="sale">
            <!--sale-box-1-------------------->
            <div class="sale-box sale-1">
                <img src="images/promo-1.png">
                
                <a href="#">
                <div class="sale-text">
                  <strong>Travel with your </br> desire OOTD</strong>
                  <span>Sale off 25%</span>
                </div></a>
            
            </div>
               <!--sale-box-2-------------------->
            <div class="sale-box sale-1">
              <img src="images/promo-2.png">
              
              <a href="#"><div class="sale-text">
                <strong>Hello Summer Outfit</strong>
                <span>Sale off 15%</span>
              </div></a>
          
            </div>
             <!--sale-box-3-------------------->
             <div class="sale-box sale-1">
              <img src="images/promo-3.png">
              
              <a href="#">
              <div class="sale-text">
                <strong>Denim Shade </br> From Head To Toe</strong>
                <span>Sale off 10%</span>
              </div></a>
          
            </div>
         
        </section>


          <!--feature-items-->
       <section class="new-arrival">
        <!--heading-->

        <div class="arrival-heading">
            <strong>Popular</strong>
            
        </div>


     <!--product-container-->
     <div class="product-container">

         <!--product-box-1-->
         <div class="product-box">

             <!--img-->
             <div class="product-img">
                  <!--add-cart-->
             <a href="#" class="add-cart">
                 <i class="fas fa-shopping-cart"></i>
             </a>
             <img src="images/feature-a.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Oversized Cat Shirt</a>
                 <span class="p-price">₱399.00</span>
             </div>
         </div>


         <!--product-box-2-->
         <div class="product-box">

             <!--img-->
             <div class="product-img">
                  <!--add-cart-->
             <a href="#" class="add-cart">
                 <i class="fas fa-shopping-cart"></i>
             </a>
             <img src="images/feature-b.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">High Slit Maxi Dress</a>
                 <span class="p-price">₱799.00</span>
             </div>
         </div>


         <!--product-box-3-->
         <div class="product-box">

             <!--img-->
             <div class="product-img">
                  <!--add-cart-->
             <a href="#" class="add-cart">
                 <i class="fas fa-shopping-cart"></i>
             </a>
             <img src="images/feature-c.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Kids Jacket</a>
                 <span class="p-price">₱599.00</span>
             </div>
         </div>

        
         <!--product-box-4-->
         <div class="product-box">

             <!--img-->
             <div class="product-img">
                  <!--add-cart-->
             <a href="#" class="add-cart">
                 <i class="fas fa-shopping-cart"></i>
             </a>
             <img src="images/p-4.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Hooded Bomber Jacket</a>
                 <span class="p-price">₱899.00</span>
             </div>
         </div>
     </div>
     </section>


      <!--services------------------------->
    <section class="services">
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Fast Delivery</span>
            <p>Receive your Order within 5-7 days  </p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Support 24/7</span>
            <p>We support 24h a day</p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>100% Money Back</span>
            <p>You have 30 days to Return</p>
        </div>
        
    </section>

    <!--banner-->
    <div class="banner-box">
        
        <div class="banner-text-container">
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