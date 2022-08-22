<!-- <!doctype html>--->
<html lang="en">
  <head>
    <title>Client-Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="{{asset('assets/Cust_login/style.css')}}">

    </head>
    <body>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <!-- <h2 class="heading-section">Login </h2> -->
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="img" style="background-image: url({{asset('assets/Cust_login/digit_market.jpg')}}">
                  </div>
                        <div class="login-wrap p-4 p-md-5">
                    <div class="d-flex">
                        <div class="w-100">
                            <h3 class="mb-4">Sign In</h3>
                        </div>
                                <!-- <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
                                        <a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
                                    </p>
                                </div> -->
                    </div>
                            <form action="{{url('/Client-Login')}}" method="post" class="signin-form">
                                @csrf
                        <div class="form-group mb-3">
                            <label class="label" for="email">Email ID</label>
                            <input type="email" name="userid" class="form-control" placeholder="User Email Id" autocomplete="off" required>
                        </div>
                    <div class="form-group mb-3">
                        <label class="label" for="password">Password</label>
                      <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                    </div>
                    <div class="form-group d-md-flex w-100">                         
                        <div class="social-auth-links text-center mb-3 w-100">
                           @if(session()->has('alert-danger'))
                              <div class="alert alert-warning col-12">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ session()->get('alert-danger') }}
                              </div>
                            @endif
                            @if(session()->has('alert-success'))
                              <div class="alert alert-warning col-12">
                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                  </button>
                                  {{ session()->get('alert-success') }}
                              </div>
                            @endif
                        </div>                     
                    </div>
                  </form>
                  <!--<p class="text-center"><a href="#">Forgot Password</a></p>-->
                </div>
              </div>
                </div>
            </div>
        </div>
    </section>

  <script src="{{asset('assets/Cust_login/jquery.min.js')}}"></script>
  <!-- <script src="{ {asset('assets/Cust_login/popper.js')} }"></script> -->
  <script src="{{asset('assets/Cust_login/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/Cust_login/main.js')}}"></script>

    </body>
</html>

 