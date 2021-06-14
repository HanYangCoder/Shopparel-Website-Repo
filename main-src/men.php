<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Men - Shopparel</title>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <!--light-slider-css-->
   
    <!--jQuery-->
     <script src="js/jQuery.js"></script>
   

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
        <!---sale------------------------------------>
     <section class="sale">
        <!--sale-box-1-------------------->
        <div class="sale-box sale-1">
            <img src="images/men-1.png">
            
            <a href="#">
            <div class="sale-text">
              <strong>Get TRENDY with Men's <br> oversized-shirts</strong>
              <br>
              <span>Shop Now!</span>
            </div></a>
        
        </div>
           <!--sale-box-2-------------------->
        <div class="sale-box sale-1">
          <img src="images/men-2.png">
          
          <a href="#"><div class="sale-text">
            <strong>Feel the  Heat <br> and put your shades on</strong>
            <br>
            <span>Shop Now</span>
          </div></a>
      
        </div>
         <!--sale-box-3-------------------->
         <div class="sale-box sale-1">
          <img src="images/men-3.png">
          
          <a href="#">
          <div class="sale-text">
            <strong>Be <br> Presentable in this <br> Black Suits </strong>
            <br>
            <span>Shop Now</span>
          </div></a>
      
        </div>
     
    </section>


        <!--new-arrival-->
       <section class="new-arrival">
        <!--heading-->

        <div class="arrival-heading">
            <strong>Men's Section</strong>
            <p>Fashion Clothes for Men's Desire</p>
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
             <img src="images/m-1.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Solid Black Cotton Sleeve</a>
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
             <img src="images/m-2.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Skull and Chain Pattern Polo</a>
                 <span class="p-price">₱449.00</span>
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
             <img src="images/m-3.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Plant & Stripped Print Polo</a>
                 <span class="p-price">₱499.00</span>
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
             <img src="images/m-4.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Patchwork Kangaroo Jacket</a>
                 <span class="p-price">₱699.00</span>
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
             <img src="images/m-5.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Multi-color Block Jacket</a>
                 <span class="p-price">₱599.00</span>
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
             <img src="images/m-6.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Bandana Pattern Pajama</a>
                 <span class="p-price">₱499.00</span>
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
             <img src="images/m-7.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name"> Graffiti Chest Polo </a>
                 <span class="p-price">₱349.00</span>
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
             <img src="images/m-8.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Letter-Tropical terno</a>
                 <span class="p-price">₱699.00</span>
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
             <img src="images/m-9.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Graphic Rose Relaxed...</a>
                 <span class="p-price">₱599.00</span>
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
             <img src="images/m-10.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Stripped Half Sleeve</a>
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
             <img src="images/m-11.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Cotton Landscape Shirt</a>
                 <span class="p-price">₱349.00</span>
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
             <img src="images/m-12.png" />
             </div>

             <!--details-->
             <div class="product-details">
                 <a href="#" class="p-name">Corduroy Design Terno</a>
                 <span class="p-price">₱799.00</span>
             </div>
         </div>

         <!--product-box-13-->
         <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-13.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Ethnic FLoral Casualt</a>
                <span class="p-price">₱399.00</span>
            </div>
        </div>

        <!--product-box-14-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-14.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Chinese style Abstract...</a>
                <span class="p-price">₱499.00</span>
            </div>
        </div>

        <!--product-box-15-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-15.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Slogan Cartoon Hoodie</a>
                <span class="p-price">₱599.00</span>
            </div>
        </div>

        <!--product-box-16-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-16.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Cartoon Planet Solid...</a>
                <span class="p-price">₱239.00</span>
            </div>
        </div>

        <!--product-box-17-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-17.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Allover Spoot Contrast Coll...</a>
                <span class="p-price">₱499.00</span>
            </div>
        </div>

        <!--product-box-18-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-18.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Chinese Style-Casual</a>
                <span class="p-price">₱349.00</span>
            </div>
        </div>

        <!--product-box-19-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-19.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Summer Breathable Short</a>
                <span class="p-price">₱469.00</span>
            </div>
        </div>

        <!--product-box-20-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-20.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Skinny Jean - Destructed</a>
                <span class="p-price">₱899.00</span>
            </div>
        </div>

        <!--product-box-21-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-21.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Stylish Blue Polo</a>
                <span class="p-price">₱399.00</span>
            </div>
        </div>

        <!--product-box-22-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-22.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Oversized Blue and White</a>
                <span class="p-price">₱499.00</span>
            </div>
        </div>

        <!--product-box-23-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-23.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Dark GreeMen Cargo Pant</a>
                <span class="p-price">₱699.00</span>
            </div>
        </div>

        <!--product-box-24-->
        <div class="product-box">

            <!--img-->
            <div class="product-img">
                 <!--add-cart-->
            <a href="#" class="add-cart">
                <i class="fas fa-shopping-cart"></i>
            </a>
            <img src="images/m-24.png" />
            </div>

            <!--details-->
            <div class="product-details">
                <a href="#" class="p-name">Stripe Long Sleeve</a>
                <span class="p-price">₱599.00</span>
            </div>
        </div>

        </div>
    </section>

     
    <!--banner-->
    <div class="banner-box-2 f-slide-3">
        
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
