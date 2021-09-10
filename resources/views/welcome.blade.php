<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JKConnect</title>

        <!--Fonts -->
        <link href ="https://fonts.googleapis.com/css?family=Montserrat|Roboto;300,400,700" rel="strylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <!--styles-->
        <link rel="stylesheet" href="{{('css/app.css')}}">
        <link rel="stylesheet" href="{{('css/responsive.css')}}">

    </head>
    <body>
      <header>
          <div class ="top_nav container">
              <div class="logo">JKConnect</div>
                <ul>
                   
                       <a href="#">Shop</a>
                       <a href="#">About</a>
                       <a href="#">Sign In</a>
                       <a href="#">cart</a>
                 </ul>
            </div> <!-- end top nav -->
         <div class="hero container">
                <div class="hero-copy">
                    <h1>JKConnect</h1>
                    <p>In need of a product from Jua Kali and Services <br>We got you covered</p>
                    <div class="hero-buttons">
                        <a href="#" class="button button-white">SignIn</a>
                        <a href="#" class="button button-white">Book Services</a>
                    </div> 
                </div><!--end hero-copy-->

                <div class="hero-image">
                    <img src="img/img4.svg" alt="here image"><!--insert an image here-->
                </div>
            </div><!--end hero-->
      </header>

      <div class="featured-section">
         <div class="container">
             <h1 class="text-center">
                 JKConnect
             </h1>
             <P class=section-description>
                 We help connect Jua Kali products to customers at the comforts of their stay.In need of any product reach out to us.
                 <br>Do you need a plumber,carpenter worry no more.At JKConnect we got you covered 
             </P>
             <div class="text-center button-container">
                 <a href="#" class="button">Featured</a>
                 <a href="#" class="button">On sale</a>
             </div>
       

             <div class="products text-center">
                   <div class="product">
                        <a href="#"><img src="img/img5.svg" alt="product"></a>
                        <a href="#"><span class="product-name">Bed</span></a>
                     <div class="product-price">$2400</div>
                  </div>
                    <div class="product">
                        <a href="#"><img src="img/img13.svg" alt="product"></a>
                        <a href="#"><span class="product-name">Dresses</span></a>
                        <div class="product-price">$2400</div>
                 </div>
                    <div class="product">
                        <a href="#"><img src="img/img8.svg" alt="product"></a>
                        <a href="#"><span class="product-name">Desktop</span></a>
                        <div class="product-price">$2400</div>
                 </div>
                    <div class="product">
                        <a href="#"><img src="img/img10.svg" alt="product"></a>
                        <a href="#"><span class="product-name">Travel Bags</span></a>
                        <div class="product-price">$2400</div>
                 </div>
                 <div class="product">
                        <a href="#"><img src="img/img11.svg" alt="product"></a>
                        <a href="#"><span class="product-name">chair</span></a>
                        <div class="product-price">$2400</div>
                 </div>
                 <div class="product">
                        <a href="#"><img src="img/img9.svg" alt="product"></a>
                        <a href="#"><span class="product-name">Laptop</span></a>
                        <div class="product-price">$2400</div>
                 </div>
                 <div class="product">
                        <a href="#"><img src="img/img12.svg" alt="product"></a>
                        <a href="#"><span class="product-name">Bed</span></a>
                        <div class="product-price">$2400</div>
                 </div>
                 <div class="product">
                        <a href="#"><img src="img/img14.svg" alt="product"></a>
                        <a href="#"><span class="product-name">Dresses</span></a>
                     <div class="product-price">$2400</div>
                 </div>
            
             </div><!--end products-->

              <div class="text-center button-container">
                
                    <a href="#" class="button">View more products</a>
              </div>
          </div><!--end container -->
      </div><!--end featured section -->

      <div class="blog-section">
          <div class="container">
              <h1 class="text-center">Our Services</h1>
              <p class="section-description">In need of any of our services .You can book us at any time. We got you covered both at home or in the office .You don't have to stress when in need of services.You just call us and we will deliver. </p>
              <div class="blog-posts">
                  <div class="blog-post" id="blog1">
                      <a href="#"><img src="img/imgserv3.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">Plumber</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>
                  <div class="blog-post" id="blog2">
                      <a href="#"><img src="img/imgserv1.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">Carpentry</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>
                  <div class="blog-post" id="blog3">
                      <a href="#"><img src="img/imgserv2.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">Masonary</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>
                  <div class="blog-post" id="blog3">
                      <a href="#"><img src="img/imgserv4.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">Mechanic</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>
                  <div class="blog-post" id="blog3">
                      <a href="#"><img src="img/imgserv5.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">Welder</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>
                  <div class="blog-post" id="blog3">
                      <a href="#"><img src="img/imgserv7.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">Hairstylist</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>
                  <div class="blog-post" id="blog3">
                      <a href="#"><img src="img/imgserv6.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">WareHouse Worker</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>
                  <div class="blog-post" id="blog3">
                      <a href="#"><img src="img/imgserv.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">Cleaners</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>
                  <div class="blog-post" id="blog3">
                      <a href="#"><img src="img/imgserv8.jpg" alt="blog image"></a>
                      <a href="#"><h2 class="blog-title">Electrician</h2></a>
                      <div class="blog-description">The following part is the area for the following for other things that are there in the code that we have</div>
                  </div>

                  
              </div><!--end blog posts-->

              <div class="hero-buttons">
                        <a href="#" class="button button-white">Join Us</a>
                        <a href="#" class="button button-white">Book Services</a>
                    </div> 

          </div><!--end container-->
      </div><!--end blog section-->

      <footer>
          <div class="footer-content container">
          
              <div class="made-with">created by Cynthia Midigo</i></div>
              <ul>
                  Follow Us
                 <a href="#"><i class="fa fa-globe"></i></a>
                 <a href="#"><i class="fa fa-youtube"></i></a>
                  <a href="#"><i class="fa fa-github"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
              </ul>
          </div><!-- end footer content-->
      </footer>
    </body>
</html>
