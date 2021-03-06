 <!doctype html>
<html lang="en">
  <head>
    <title>NSTU</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900|Rubik:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

    <!-- <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(public/frontend/images/big_image_1.jpg);">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
            </div>
             <h1>Welcome To Our Luxury Rooms</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
              <p><a href="booknow.html" class="btn btn-primary">Book Now</a></p>
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

    <section class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12 heading-wrap text-center">
            <h4 class="sub-heading">Our Hotel</h4>
              <h2 class="heading">Our Hotel</h2>
          </div>
        </div>
         @php $total=0; @endphp
          @foreach($total_hotel_room as $room)
               @php
               $total +=$room->number_of_room;
               @endphp  
          @endforeach

          @php $hotel_rooms=0; @endphp
          @if(isset($total_booking_room))
          @foreach($total_booking_room as $hotel_rooms )
         @php  $hotel_rooms=  $hotel_rooms->hotel_room; @endphp  
           @endforeach
           @endif

  
        @if( ($total != $hotel_rooms) && ($total > $hotel_rooms) )
         
        @foreach($hotels->chunk(3) as $hotel )
        <div class="row ">
          @foreach($hotel as $value)
           @foreach($hotel_room as $room)
           @if($room->hotel_id==$value->id)
             
                <div class="col-md-4">
                  <div class="post-entry">
                    <img src="{{ asset($room->image) }}" alt="Image placeholder" class="img-fluid">
                    <div class="body-text">
                      <div class="category">{{$value->name}}</div>
                      <h3 class="mb-3"><a href="{{url('/room/list/'.$value->id)}}">{{$value->name}}</a></h3>
                      <p class="mb-4">{{$room->details}}</p>
                      <p><a href="{{url('/room/list/'.$value->id)}}" class="btn btn-primary btn-outline-primary btn-sm">View Details</a></p>
                    </div>
                  </div>
                </div>
              
            @endif
            @endforeach
          @endforeach
        </div>
        @endforeach
        
        

        @elseif($total == $hotel_rooms || $total < $hotel_rooms)


         @php $totals=0; @endphp
          @foreach($total_hostel_room as $room)
               @php
                $totals +=$room->number_of_room;
               @endphp  
          @endforeach

           @php $hostel_rooms=0; @endphp
          @if(isset($count_booking_hostel_room))
          @foreach($count_booking_hostel_room as $hostel_room )
         @php  $hostel_rooms =  $hostel_room->hostel_room; @endphp  
           @endforeach
           @endif
       
       @if($totals != $hostel_rooms || $totals > $hostel_rooms)
        @foreach($uni_hostel->chunk(3) as $hostel )
        <div class="row ">
          @foreach($hostel as $value)

           @foreach($hotel_room as $room)
                <div class="col-md-4">
                  <div class="post-entry">
                    <img src="{{ asset($room->image) }}" alt="Image placeholder" class="img-fluid">
                    <div class="body-text">
                      <div class="category">{{$value->hotel_name}}</div>
                      <h3 class="mb-3"><a href="{{url('/room/list/'.$value->hotel_id)}}">{{$value->hotel_name}}</a></h3>
                      <p class="mb-4">{{$room->details}}</p>
                      <p><a href="{{url('/room/list/'.$value->hotel_id)}}" class="btn btn-primary btn-outline-primary btn-sm">View Details</a></p>
                    </div>
                  </div>
                </div>

            @endforeach
           
          @endforeach
        </div>
        @endforeach

        @else
        <h1 style="margin-left: 460px" class="text-danger">No room available</h1>
        @endif

        
        @endif
     
      </div>
    </section>
    <!-- END section -->
     <!-- END section -->
   
    <footer class="site-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4">
            <h3>Phone Support</h3>
            <p>24/7 Call us now.</p>
            <p class="lead"><a href="tel://">+ 1 332 3093 323</a></p>
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
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime, odio.</p>
            <form action="#" class="subscribe">
              <div class="form-group">
                <button type="submit"><span class="ion-ios-arrow-thin-right"></span></button>
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              
            </form>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            &copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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