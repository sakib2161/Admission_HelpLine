 <!doctype html>
<html lang="en">
  <head>
    <title>LuxuryHotel a Hotel Template</title>
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
          <a class="navbar-brand" href="index.html">LuxuryHotel</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link active" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/hotel-list')}}">Hotel</a>
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
    </header><br><br><br><br>
    <!-- END header -->
    <section class="booking" style="margin-left: 300px">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="media d-block room mb-0">
              <figure>
                <img src="{{ asset($hotel_room->image) }}" alt="Generic placeholder image" class="img-fluid">
              </figure>
              <div class="media-body">
                <div class="row">
                  <div class="col-md-5">
                    <h3 class="mt-0"><a href="">Hotel Name :{{$hotel_room->hotel_name}}</a></h3>
                    <h3 class="mt-0"><a href="">Room Name :{{$hotel_room->name}}</a></h3>
                  </div>
                  <div class="col-md-5">
                    <h3 class="mt-0"><a href="">Number of room : {{$hotel_room->number_of_room}}</a></h3>
                    <h3 class="mt-0"><a href=""> Price : {{$hotel_room->price}}</a></h3>
                  </div>
                
                </div>
                <p>{{$hotel_room->details}} </p>
              </div>
              <h3 class="text-center text-success">{{Session::get('message')}}</h3>
              <form class="form-horizontal" method="POST" action="{{ url('/room/booking') }}" enctype="multipart/form-data">
                @csrf

                <div class="alert alert-success">
                    <h2 style="margin-left: 200px">Booking Form</h2>
                </div>
                <div class="alert alert-success">
                    <h2 style="margin-left: 100px">Please send {{$hotel_room->price}} BDT  through Bkash</h2>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="email"> Name:</label>
                    <div class="col-sm-9">
                      <input type="hidden" name="room_id" value="{{$hotel_room->id}}">
                        <input type="text" class="form-control" name="name" id="email" placeholder="Name" required>
                        <span class="text-danger">  {{$errors->has('customerName')?$errors->first('customerName'):""}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd">Email:</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" id="pwd" name="email" placeholder="email" required>
                        <span class="text-danger">  {{$errors->has('customerPhoneNo')?$errors->first('customerPhoneNo'):""}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd"> Address:</label>
                    <div class="col-sm-9">
                        <textarea name="address" rows="4" cols="57"></textarea>
                        <span class="text-danger">  {{$errors->has('subscription_fee')?$errors->first('subscription_fee'):""}}</span>
                    </div>
                </div>

                
                <div class="form-group">
                    <label class="control-label col-sm-3" for="pwd"> Transaction Id:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="pwd" name="tx_id" placeholder="Transaction Id" required>
                        <span class="text-danger">  {{$errors->has('customerPhoneNo')?$errors->first('customerPhoneNo'):""}}</span>
                    </div>
                </div><br>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-10">
                     <button type="submit" class="btn btn-success" style="background-color: #b99365">Submit</button>
                    </div>
                </div>
            </form>

            </div>
          </div>
        </div>
      </div>
    </section>
   
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