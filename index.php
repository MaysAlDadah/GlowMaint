
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GlowMaint | online</title>
    <link rel="icon" href="img/logo.cline.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/all.min.css">
   <link rel="stylesheet" href="css/styel.css">
</head>
<body>

<div class="cart-fav">
    <span><i class="fa-regular fa-heart"></i>Welcome To Our Family!</span>
    <span><i class="fa-regular fa-heart"></i>Your Request Has Been Fulfilled.</span>
    <span><i class="fa-regular fa-heart"></i> Booking & Payment Confirmations.</span>
    
</div>
<div class="cart">
    <div class="top_cart">
      <h3>Cart Items : <span class="Count_item_cart">0</span></h3>
      <span onclick="open_close_cart()" class="close_cart"><i class="fa-regular fa-circle-xmark"></i></span>
    </div>
    <div class="items_in_cart" id="cart_items">


      

     




    </div>
     <div class="bottom_cart">
        <div class="total">
          <p>subtotal</p>
          <p class="price_cart_toral">$0</p>
        </div>

        <div class="button_cart">
          <a href="https://bop.ps/ar/business/electronic-services/payment-gateway" class="btn_cart bt_bg btn">Checkout</a>
          <span onclick="open_close_cart()" class="btn_cart trans_bg btn">Shop More</span>
        </div>
      </div>

  </div>
  <div class="phon">
  <a href="https://wa.me/972592859951"><i class="fa-solid fa-phone"></i></a>
  </div>


<header>


<div class="tob-header">
  <div class="container">

    <a href="#" class="logo" >
      <img src="img/logo.cline.jpg" alt="">
      <ul>
      <li ><h2>Glow</h2></li>
      <li> <h5>Maint</h5></li>
      </ul>
    
    </a>

    <form action="" class="search-box">
      <div class="select-box">
        <select name="category" id="category">
                        <option value="All Categories">All Categories</option> 
                        <option value="All Categories">Move-Out Cleaning</option>
                        <option value="Electronics & Digits">Post-Renovation Cleaning</option>
                        <option value="Phones & Tablet">Same Day Cleaning</option>
                        <option value="Fashion & Clothings">Move-In Cleaning</option>
                        <option value="Television & Monitor">Small Business Cleaning</option>
                        <option value="Jewelry & Watches">Special Cleaning</option>
                        <option value="Washing Machine">Spring Or Fall Cleaning</option>
                        <option value="Toys & Hobbies">Window Cleaning Services</option>


        </select>
      </div>

      <input type="text" name="search" id="search" placeholder="search for products" required>
       
      <button type="submit">
        
     <i class="fa-solid fa-magnifying-glass"></i>
      </button>


    </form>

    <div class="header_icons">
      <div onclick="open_fav()" class="icon">
          
              <i class="fa-regular fa-heart"></i>
              <!--<span class="count count_favorite">0</span>-->
              
          
      </div>

      <div onclick="open_close_cart()" class="icon">
          <i class="fa-solid fa-cart-shopping"></i>
          <span class="count count_item_header">0</span>
      </div>
  </div>
  </div>
</div>


<div class="bottom-header">
  <div class="container">
     <nav class="nav">
        <span onclick="open_menu()" class="open_menu"><i class="fa-solid fa-bars"></i></span>
      <div class="category_nav">
        <div onclick="open_list()" class="category_btn">
              <i class="fa-solid fa-bars"></i>
              <p>Browse Category</p>
              <i class="fa-solid fa-angle-down"></i>

          </div>


          <div  class="category_nav_list">
              <a href="cleaning.php">one-time-cleaning</a>
              <a href="cleaning.php">Housekeeping Services</a>
              <a href="cleaning.php">Holiday Cleaning</a>
              <a href="cleaning.php">Green Cleaning Services</a>
              <a href="cleaning.php">Deep Cleaning</a>
              <a href="cleaning.php">Bathroom Cleaning</a>
              <a href="cleaning.php">Appliance Cleaning</a>
          </div>

      </div>

      <ul class="nav_links">

          <span onclick="open_menu()"  class="close_menu"><i class="fa-regular fa-circle-xmark "></i></span>

          <li><a class="active" href="index.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Accessories</a></li>
          <li><a href="cleaning.php">Blog</a></li>
          <li><a href="https://wa.me/972592859951">Contact</a></li>

      </ul>

  </nav>

  <div class="login-signup buts">

    <a href="add.php" class="btn1">Add service <i class="fa-solid fa-right-to-bracket"></i></a>

    <a href="login.php" class="btn1">Sign In <i class="fa-solid fa-user-plus"></i></a>
  </div>
  </div>
</div>


</header>



 <div class="selder">
    <div class="container">
        <div class="swip-slider">
        <div class="slid ">
            <a href=""><img src="img/m1.jpg" alt="" class="card-img-top"></a>
            <h3 >Book a Clean Online = Anywhere, Anytime</h3>
            <p >Whether you need certain rooms done or the entire house deep cleaned, The Maids has a clean to fit your needs and budget. Find The Maids near you, get a free quote and book your service online 24/7. Pick your package, select your day and preferred time, book your clean.</p>
            <h5></h5>
        </div>

        <div class="slid ">
            <a href=""><img src="img/m2.jpg" alt="" class="card-img-top"></a>
            <h3 >Trained Teams = Faster Cleans</h3>
            <p class="card-text">Flexible team sizes to meet your needs. Our teams can get in and out of your home faster with a more thorough clean. The only maid service backed by Mr. Clean®, our highly trained teams are bonded, insured, and right around the corner.</p>
            <h5></h5>
        </div>

        <div class="slid ">
            <a href=""><img src="img/m3.jpg" alt="" ></a>
            <h3 class="card-title">Your Custom Clean = Affordable Routine</h3>
            <p class="card-text">Our 22-Step Cleaning Process cleans your home top to bottom and guards against germs and allergens. We treat your home like it’s our own. It’s more than a job to us — it’s our calling.</p>
            <h5></h5>
        </div>
        </div>
    </div>
 </div>

 <div class="container">
    <div class="silders2">
        <h1>How It Works</h1>
        <div class="silder2">
            <div class="sold">
                <a href=""><img src="img/How1-Tell-Us-About-You.png.webp"alt=""></a>
                <div class="par">
                    <span>1</span>
                    <div class="pr">
                        <h2>FIND YOUR LOCAL OFFICE</h2>
                        <p>We’ll match you with one of our trusted cleaning teams near you. We have nearly 200 locations in the U.S. and across Canada</p>
                    </div>
                </div>
            </div>
            <div class="sold">
                <a href=""><img src="img/How2-Pick-Your-Plan.png.webp"alt=""></a>
                <div class="par">
                    <span>2</span>
                    <div class="pr">
                        <h2>PICK YOUR PLAN</h2>
                        <p>Having a clean home means less stress and more moments of joy. Choose from our cleaning plan options and get the maid service that best fits your needs.</p>
                    </div>
                </div>
            </div>
            <div class="sold">
                <a href=""><img src="img/How3-Enjoy-Your-Clean.png.webp"alt=""></a>
                <div class="par">
                    <span>3</span>
                    <div class="pr">
                        <h2>ENJOY YOUR CLEAN!</h2>
                        <p>Sit back, relax, and let our team do the work. With The Maids proprietary 22-Step Cleaning Process, you can trust you’ll get the cleanest home possible, every time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </div>

    <div class="container">
    <div class="serves">
    <div class="top-p">
            <h2>Cleaning & Maintenance Services We Offer</h2>
        </div>
    <div class="cont-server" id="con_ser">
        
<!--         
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Airbnb Cleaning Services.png" alt=""></a>
           <a href="cleaning.php"><h4>Airbnb Cleaning</h4></a>
           <button class="add_to" data-id="1">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="Maintenance.php"><img class="server-img" src="img/Apartment Cleaning.png" alt=""></a>
           <a href="Maintenance.php"><h4>Apartment Maintenance</h4></a>
           <button class="add_to" data-id="2">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Appliance Cleaning Services.png" alt=""></a>
           <a href="cleaning.php"><h4>Appliance Cleaning</h4></a>
           <button class="add_to" data-id="3">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Bathroom Cleaning Services.png" alt=""></a>
           <a href="cleaning.php"><h4>Bathroom Cleaning</h4></a>
           <button class="add_to" data-id="4">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Deep Cleanning.png" alt=""></a>
           <a href="cleaning.php"><h4>Deep Cleaning</h4></a>
           <button class="add_to" data-id="5">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Green Cleaning Services.png" alt=""></a>
           <a href="cleaning.php"><h4>Green Cleaning Services</h4></a>
           <button class="add_to" data-id="6">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="Maintenance.php"><img class="server-img" src="img/Holiday Cleaning.png" alt=""></a>
           <a href="Maintenance.php"><h4>Holiday Maintenance</h4></a>
           <button class="add_to" data-id="7">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Housekeeping Services.png" alt=""></a>
           <a href="cleaning.php"><h4>Housekeeping Services</h4></a>
           <button class="add_to" data-id="8">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="Maintenance.php"><img class="server-img" src="img/one-time-cleaning-icon.png.webp" alt=""></a>
           <a href="Maintenance.php"><h4>one-time-Maintenance</h4></a>
           <button class="add_to" data-id="9">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Window Cleaning Services.png" alt=""></a>
           <a href="cleaning.php"><h4>Window Cleaning Services</h4></a>
           <button class="add_to" data-id="10">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Spring Or Faal Cleaing.png" alt=""></a>
           <a href="cleaning.php"><h4>Spring Or Faal Cleaing</h4></a>
           <button class="add_to" data-id="11">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning"><img class="server-img" src="img/Special Cleaning Services.png" alt=""></a>
           <a href="cleaning"><h4>Special Cleaning</h4></a>
           <button class="add_to" data-id="12">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Small Business Cleaning.png" alt=""></a>
           <a href="cleaning.php"><h4>Small Business Cleaning</h4></a>
           <button class="add_to" data-id="13">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Move-In Cleaning.png" alt=""></a>
           <a href="cleaning.php"><h4>Move-In Cleaning</h4></a>
           <button class="add_to" data-id="14">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Same Day Cleaning.png" alt=""></a>
           <a href="cleaning.php"><h4>Same Day Cleaning</h4></a>
           <button class="add_to" data-id="15">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Recurring Cleaning.png" alt=""></a>
           <a href="cleaning.php"><h4>Recurring Cleaning</h4></a>
           <button class="add_to" data-id="16">add to cart</button>
           


        </div>
    
    <div class="server">
           <a href="Maintenance.php"><img class="server-img" src="img/Post-Renovation Cleaning Services.png" alt=""></a>
           <a href="Maintenance.php"><h4>Post-Renovation Maintenance</h4></a>
           <button class="add_to" data-id="17">add to cart</button>
           


        </div>
        <div class="server">
           <a href="cleaning.php"><img class="server-img" src="img/Move-Out Cleaning.png" alt=""></a>
           <a href="cleaning.php"><h4>Move-Out Cleaning</h4></a>
           <button class="add_to" data-id="18">add to cart</button>
           


        </div>
    
        </div> -->

    </div>
 </div></div>



 <section>
  
      <div class="cont2 card">
         <h1>Emergency Services</h1>
      <div class="container2">
       


        <div class="cards">
          <div class="imgs">
            <img src="img/p1.jpg" alt="">
          </div>
          <div class="content2">
           
            <h5>- Home cleaning service: Completed in: 30 minutes</h5>
            <h5>- Company cleaning service: Completed in: 1 hour  
           </h5>
            <h5> - Factory cleaning service: Completed in: 2 hours</h5>
            <h5>To Immediate Cleaning Call Us Now!</h5>
            <h5>+970 10115588</h5>
           
          </div>

        </div>

        <div class="cards">
          <div class="imgs">
            <img src="img/p2.jpg" alt="">
          </div>
          <div class="content2">
           
            <h5>- Home cleaning service: Completed in: 30 minutes</h5>
            <h5>- Company cleaning service: Completed in: 1 hour  
           </h5>
            <h5> - Factory cleaning service: Completed in: 2 hours</h5>
            <h5>To Immediate Cleaning Call Us Now!</h5>
            <h5> +970 11122444</h5>
           
          </div>

        </div>

        <div class="cards">
          <div class="imgs">
            <img src="img/p3.jpg" alt="">
          </div>
          <div class="content2">
           
            <h5>- Home maintenance service: Completed in : 1 hour  </h5>
            <h5>- Air conditioner maintenance service: Completed in: 1 hour </h5>
            <h5> - Company maintenance service: Completed in: 2 hours </h5>
            <!-- <h5>To Immediate Maintenance Call Us Now! +970 00111111</h5>
            -->
          </div>

        </div>

      </div>
    
    
      </div>
    </section>



 <div class="container">
    <div class="we">
        <div class="we-pr">
            <h2>Why Choose Us?</h2>
            <p>
            With a history rooted in continuous improvement and a future driven by technology, ATS focuses on strategic value and measurable growth. Our solutions do more than support your business – they help you evolve and thrive in your industry.</p>
        </div>
    </div>
 </div>


 <section>
    <section class="numbers">
      <div class="container my-5">
          <div class="row align-items-center">
              <div class="col-md-6">
                  <img class="w-90" src="img/Promo-WeMakeItEasy.png.webp" alt="">
              </div>
              <div class="col-md-6 ">
                  <div class="row">
                      <div class="col-6 text-center mb-5">
                          <i class="fas fa-users fa-3x"></i>
                          <h2 class="display-3 my-3"><b><span class="number">500</span>+</b></h2>
                          <i>Students</i>
                      </div>
  
                      <div class="col-6 text-center mb-5">
                          <i class="fas fa-heart fa-3x"></i>
                          <h2 class="display-3 my-3"><b><span class="number">100</span>+</b></h2>
                          <i>Happy Customers</i>
                      </div>
  
                      <div class="col-6 text-center">
                          <i class="fas fa-laptop fa-3x"></i>
                          <h2 class="display-3 my-3"><b><span class="number">120</span>+</b></h2>
                          <i>Courses</i>
                      </div>
  
                      <div class="col-6 text-center">
                          <i class="fas fa-user-tie fa-3x"></i>
                          <h2 class="display-3 my-3"><b><span class="number">50</span>+</b></h2>
                          <i>Teachers</i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>
 
  </section>



 <footer>
      <div class="container">

          <div class="big_row">
              <img class="logo_footer" src="img/logo.cline.jpg" alt="">

              <p>With a history rooted in continuous improvement</p>

              <div class="icons_footer">
                  <a href="9700592859951"><i class="fa-solid fa-phone"></i></a>
                  <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
              </div>
          </div>

          <div class="row">
              <h4>About Us</h4>

              <div class="links">
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i> one-time-cleaning</a>
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i> Housekeeping Services</a>
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i> Holiday Cleaning</a>
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i> Green Cleaning Services</a>
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i> Deep Cleaning</a>
              </div>
          </div>


          <div class="row">
              <h4>Maintenance</h4>

              <div class="links">
                  <a href="Maintenance.php"><i class="fa-solid fa-caret-right"></i> Holiday Maintenance </a>
                  <a href="Maintenance.php"><i class="fa-solid fa-caret-right"></i> Special Maintenance</a>
                  <a href="Maintenance.php"><i class="fa-solid fa-caret-right"></i> Window Maintenance </a>
                  <a href="Maintenance.php"><i class="fa-solid fa-caret-right"></i> Spring Or Fall</a>
                  <a href="Maintenance.php"><i class="fa-solid fa-caret-right"></i> one-time</a>
              </div>
          </div>


          <div class="row">
              <h4>Service us</h4>

              <div class="links">
                  <a href="https://wa.me/972592859951"><i class="fa-solid fa-caret-right"></i> Support Center</a>
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i> Post-Renovation</a>
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i> Recurring Cleaning</a>
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i> Same Day Cleaning</a>
                  <a href="cleaning.php"><i class="fa-solid fa-caret-right"></i>Move-In Cleaning</a>
              </div>
          </div>
      </div>

      <div class="bottom_footer">
          <div class="container">
              <p>&copy; <span>Reda Store.</span> All Rights Reserved.</p>

              <div class="payment_img">
                  <img src="img/payment_method.png" alt="">
              </div>
          </div>
      </div>
  </footer>




        

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="jquery-3.7.1.min.js"></script>
<script src="bootstrap.bundle.min.js"></script>
<script src="owl.carousel.min.js"></script>
<script src="prod.js"></script>
<script src="script.js"></script>
<SCript>
    let cart_fav = document.querySelector(".cart-fav");

function open_fav(){
  cart_fav.classList.toggle("active")

}
</SCript>

</body>
</html>