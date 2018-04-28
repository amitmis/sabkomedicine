
<!DOCTYPE html>
<html>
<head>
    <title>Sabko Medicine</title>
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="
" />
    <script type="application/x-javascript"> addEventListener("load",
                function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')  }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- js -->
    <script src="js/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/evil-icons/1.7.8/evil-icons.min.css">

    <!-- Custom CSS -->





    <link href="ab/css/bootstrap.min.css" rel="stylesheet">
    <!-- //js -->
    
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-118346599-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-118346599-1');
</script>

    
</head>

<body>
<!-- header -->



<div class="header">
    <div class="container">
        <nav class="navbar navbar-default">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                <nav class="stroke">

                    <ul class="nav navbar-nav">

                        <li class="active"><a href="/" class="hvr-bounce-to-bottom">Home</a></li>
                        <li ><a href="/about" class="hvr-bounce-to-bottom">About Us</a></li>
                        <li><a href="/gallery" class="hvr-bounce-to-bottom">Gallery</a></li>
                        <li><a href="/contact_us" class="hvr-bounce-to-bottom">Contact</a></li>
                        <li><a href="/faq" class="hvr-bounce-to-bottom">F.A.Q.</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="active"><a href="{{ url('/login') }}" >Login</a></li>
                            <li><a href="{{ url('/register') }}" class="hvr-bounce-to-bottom">Register</a></li>
                        @else

                            <li class="dropdown " style="color: #00AFF0">
                                <a href="#" class="dropdown-toggle" style="color: #20222a" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu" >
                                    <li><a href="{{ url('/home') }}"><i class="fa fa-btn "></i>Dashboard</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>


                </nav>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>
</div>
<!-- //header -->
<!-- banner -->
<div class="banner">
    <div class="container">
        <div class="banner-info">
            <h1>" It's not how much we give but how much love we put into giving "</h1>
            <hr>
            <p>BE A LIFE SAVER - DONATE MEDICINES</p>




            @if (Auth::guest())
                    <a href='/login' class='btn btn-primary btn-xl outline'  >DONATE</a>
            @else
                 <a href='/home' class='btn btn-primary btn-xl outline'  >DONATE</a>
            @endif


            </div>
        </div>
    </div>
</div>
<style>
    .btn-primary {
        color: #ffffff;
        background-color: #f05f40;
        border-color: #f05f40;
        -webkit-transition: all 0.35s;
        -moz-transition: all 0.35s;
        transition: all 0.35s;
    }


    .btn-xl {
        padding: 15px 30px;
    }
    .banner .container .banner-info h1 {
        font-weight: 700;
        text-transform: uppercase;
        margin-top: 0;
        margin-bottom: 0;
    }
    .banner .container .banner-info hr {
        margin: 30px auto;
    }
    .banner .container .banner-info p {
        font-weight: 300;
        color: #008080;
        font-size: 16px;
        margin-bottom: 50px;
    }

    @media (min-width: 768px) {
        header {
            min-height: 100%;
        }


        .banner .container .banner-info {
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }
        .banner .container .banner-info p {
            font-size: 18px;
            max-width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    }





</style>
<!-- //banner -->
<!-- about -->

<!-- //about-bottom -->
<!-- footer -->
<div class="footer">
    <div class="container">

        <div class="footer-contact">
            <form>
                <input type="text"
                       placeholder="Enter your email to Subscribe" required=" ">
                <input type="submit"
                       value="Subscribe">
            </form>
        </div>
        <div class="footer-grids">
            <div class="col-md-4 footer-grid">
               <p style="font-size: large" >SUPPORT</p>
                <br>
                <a href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to=sabkomedicine@gmail.com&su=SUBJECT&body=BODY&&tf=1" style="text-decoration: none;" target="_blank"><p><i class="fa fa-paper-plane-o"></i>  sabkomedicine@gmail.com</p></a>
                <p>+91-7417818742</p>
            </div>
            <div class="col-md-2 footer-grid">
                <ul>
                    <li><a
                                href="/contact_us">Contact</a></li>
                    <li><a
                                href="/about">About</a></li>
                    <li><a
                                href="/terms">Terms</a></li>
                    <li><a
                                href="/faq">FAQ</a></li>
                </ul>
            </div>


            <div class="clearfix"> </div>
        </div>

    </div>
</div>


<!-- //footer -->
<!-- for bootstrap working -->
<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
