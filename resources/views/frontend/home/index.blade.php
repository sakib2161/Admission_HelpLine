<!doctype html>
<html lang="en">
  <head>
    <title>NSTU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/animate.css">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{asset('public/frontend/')}}/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="{{asset('public/frontend/')}}/css/style.css">
  </head>
  <body>
    
    <header role="banner" style="background-color: black">
     
      <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
          <h4><a class="navbar-brand" href="index.html"><b>N S T U</b></a></h4>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/hotel-list')}}">Hotel & Hall</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(public/frontend/images/nstu.png);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
            </div>
             <!--
             <h1>Welcome To Our Luxury Rooms</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            -->
          </div>
        </div>
      </div>
    </section>

    <!-- Start The Welcome Note -->
    <div class="container-fluid">
    
      <div class="container" style="margin-top: 50px; font-family: initial; font-size: 17px; ">
              
                <div class="col-sm-6 " style="margin-right: 145px;">
        <p id="welcome-p" class="" style="ont-family: initial; font-size: 15px; letter-spacing: .5px;" >
                    <h2 id="welcome-h2" class="">Welcome</h2>
                    
        Noakhali Science and Technology University (popularly known as NSTU) is a newly established public university in the coastal terrain Noakhali of Bangladesh. It is the 27th public university (out of 32) and fifth science and technology university in Bangladesh when it established, while in 2013, it places as 10th public university (out of 38) and 2nd science and technology university in national ranking. Its foundation stone was laid on 11 October 2003 and academic activities started on 22 June 2006
                Founding a science and technology university in a coastal terrain like Noakhali is significant. A newly accrued coastal system may render this university a versatile field station to study the pattern of changes in the seashore and to harness its opportunities.<br>
                For more details click here to the official Website of <a href="www.nstude.com"><strong>Nstu</strong></a> 
            </p>
    
        </div>

                <div class="col-sm-6" id="bio" style="margin-top: -380px; float: right; font-family: initial; font-size: 17px;">
                <p><span>Name           : </span> Naokhali Science & Technology University</p>
                <p><span>Establishment  : </span> 2005</p>
                <p><span>Chancellor     : </span> President Abdul Hamid</p>
                <p><span>Vice-Chancellor: </span> M Wahiduzzaman</p>
                <p><span>Faculty        : </span> 7</p>
                <p><span>Institute      : </span> 2 </p>
                <p><span>Depertment     : </span> 25</p>
                <p><span>Approximate Exam Date: </span>
                </p>
                </div>
        </div><!--end the container--> 
        <br><hr>
    </div><!--end the contzainer fluid-->
   


    <!-- End the Welcome Note -->

    <!-- END section -->
    
    <!--
    <section class="site-section">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-4">
            <div class="heading-wrap">
              <h4 class="sub-heading" style="color: black">Stay with our luxury rooms</h4>
              <h2 class="heading">Stay and Enjoy</h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus illo similique natus, a recusandae? Dolorum, unde a quibusdam est? Corporis deleniti obcaecati quibusdam inventore fuga eveniet! Qui delectus tempore amet!</p>
              <p><a href="#" class="btn btn-primary btn-sm">More About Us</a></p>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-7">
            <img src="{{ asset('public/frontend/images/f_img_1.png') }}" alt="Image placeholder" class="img-md-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <!--
    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Luxury Rooms</h4>
              <h2 class="heading">Featured Rooms</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-7">
            <div class="media d-block room mb-0">
              <figure>
                <img src="{{ asset('public/frontend/images/img_1.jpg') }}" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Featured Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Presidential Room</a></h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                  <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                </ul>
                <p>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate fringilla. </p>
                <p><a href="#" class="btn btn-primary btn-sm">Book Now From $20</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-5 room-thumbnail-absolute">
            <a href="#" class="media d-block room bg first-room" style="background-image: url(public/frontend/images/img_2.jpg); ">
              <!-- <figure> -->

              <!--
                <div class="overlap-text">
                  <span>
                    Hotel Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                  <span class="pricing-from">
                    from $22
                  </span>
                </div>
              
            </a>

            <a href="#" class="media d-block room bg second-room" style="background-image: url(public/frontend/images/img_4.jpg); ">
              <!-- 
                <div class="overlap-text">
                  <span>
                    Hotel Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                  <span class="pricing-from">
                    from $22
                  </span>
                </div>
              <!-- 
            </a>
            
          </div>
        </div>
      </div>
    </section>

   
    
    <section class="section-cover" data-stellar-background-ratio="0.5" style="background-image: url(public/frontend/images/img_5.jpg);">
      <div class="container">
        <div class="row justify-content-center align-items-center intro">
          <div class="col-md-9 text-center element-">
            <h2>Relax and Enjoy your Holiday</h2>
            <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto quidem tempore expedita facere facilis, dolores!</p>
            <div class="btn-play-wrap"><a href="https://vimeo.com/channels/staffpicks/93951774" class="btn-play popup-vimeo "><span class="ion-ios-play"></span></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <!--
    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Blog</h4>
              <h2 class="heading">Our Recent Blog</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-4">
            <div class="post-entry">
              <img src="{{ asset('public/frontend/images/img_3.jpg') }}" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">Rooms</div>
                <h3 class="mb-3"><a href="#">New Rooms</a></h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <img src="{{ asset('public/frontend/images/img_6.jpg') }}" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">News</div>
                <h3 class="mb-3"><a href="#">New Staff Added</a></h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <img src="{{ asset('public/frontend/images/img_5.jpg') }}" alt="Image placeholder" class="img-fluid">
              <div class="body-text">
                <div class="category">New Rooms</div>
                <h3 class="mb-3"><a href="#">Big Rooms for All</a></h3>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum deserunt illo quis similique dolore voluptatem culpa voluptas rerum, dolor totam.</p>
                <p><a href="#" class="btn btn-primary btn-outline-primary btn-sm">Read More</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    --->
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Support</h3>
            <p>Noakhali Science and Technology University, Sonapur, University Rd, 3814</p>
            <p>24/7 Call us now.</p>
            <p class="lead"><a href="tel://">+88032172720</a></p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p>We are socialized. Follow us</p>
            <p>
              <a href="#" class="pl-0 p-3"><span class="fa fa-facebook"></span></a>
              <a href="#" class="p-3"><span class="fa fa-twitter"></span></a>
              <a href="#" class="p-3"><span class="fa fa-instagram"></span></a>
              <a href="#" class="p-3"><span class="fa fa-vimeo"></span></a>
              <a href="#" class="p-3"><span class="fa fa-youtube-play"></span></a>
            </p>
          </div>
          <div class="col-md-4">
            <h3>Connect With Us</h3>
            <p><b><a>info@nstu.edu.bd</a><b></p>
            <form action="#" class="subscribe">
              <!--
              <div class="form-group">
                <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              -->
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            &copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made by <a href="https://colorlib.com" target="_blank">Md. Sakib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <!-- <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div> -->

    <script src="{{asset('public/frontend/')}}/{{asset('public/frontend/')}}/js/jquery-3.2.1.min.js"></script>
    <script src="{{asset('public/frontend/')}}/js/jquery-migrate-3.0.0.js"></script>
    <script src="{{asset('public/frontend/')}}/js/popper.min.js"></script>
    <script src="{{asset('public/frontend/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('public/frontend/')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('public/frontend/')}}/js/jquery.waypoints.min.js"></script>
    <script src="{{asset('public/frontend/')}}/js/jquery.stellar.min.js"></script>

    <script src="{{asset('public/frontend/')}}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('public/frontend/')}}/js/magnific-popup-options.js"></script>

    <script src="{{asset('public/frontend/')}}/js/main.js"></script>
  </body>
</html>