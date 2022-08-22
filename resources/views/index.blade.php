<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Log in</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- font Awesome -->
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Theme style -->
        <link href="{{asset('assets/css/AdminLTE.css')}}" rel="stylesheet" type="text/css" />        
 
    </head>
    <body class="bg-black">

        <div class="form-box" id="login-box">
            <div class="header">Sign In</div>
            <form action="{{url('/Submit-Login')}}" method="post">
                @csrf
                <div class="body bg-gray">
                    <div class="form-group">
                        <input type="email" name="userid" class="form-control" placeholder="User Email Id" required="" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required="" />
                    </div>          
                    <!-- <div class="form-group">
                        <input type="checkbox" name="remember_me"/> Remember me
                    </div> -->
                    <br><br>
                </div>
                <div class="footer">                                                               
                    <button type="submit" class="btn bg-olive btn-block">Sign me in</button>  
                    
                    <p>
                        <div class="social-auth-links text-center mb-3">
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
                    </p>
            </form>

            <div class="margin text-center">
                <span>Sign in using social networks</span>
                <br/>
                <!--<button class="btn bg-light-blue btn-circle"><i class="fa fa-facebook"></i></button>-->
                <!--<button class="btn bg-aqua btn-circle"><i class="fa fa-twitter"></i></button>-->
                <!--<button class="btn bg-red btn-circle"><i class="fa fa-google-plus"></i></button>-->

            </div>
        </div>


        <!-- jQuery 2.0.2 -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>        

    </body>
</html>