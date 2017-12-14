<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Damn Design</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">


        <!--Styles -->
        <style type="text/css">
            .navbar{
                border-radius: 0;
                padding: 10px 60px 10px 50px; 
                margin-bottom: 0;
            }
            .navbar-brand{
                font-family: 'bungee', 'cursive';
                letter-spacing: 2px;
                font-size: 25px;
                color: white;
                padding: 14px 0px;
            }
            .navbar-nav li a{
               text-transform: uppercase;
               font-size: 14px;
               letter-spacing: 1px; 
                font-weight: bolder;
            }
            .navbar-toggle{
                margin-right: 0; 
            }
            .container-fluid,.col-md-8,.col-md-4{
                padding: 0;
            }
            .row{
                margin: 0;
            }

            @media only screen and (max-width: 930px) and (min-width: 767px) {
                .navbar{
                            padding: 10px 0px 10px 50px; 
                        }
                .navbar-nav li a{
                   text-transform: uppercase;
                   font-size: 12px;
                   letter-spacing: 1px; 
                   font-weight: bolder;
                    }
            }

             @media only screen and (max-width: 767px) {
                .navbar{
                            padding: 10px 20px 10px 30px; 
                        }
                .navbar-nav li a{
                   text-transform: uppercase;
                   font-size: 12px;
                   letter-spacing: 1px; 
                   font-weight: bolder;
                    }
                
                }
                
                img{
                    opacity: 0.90;
                }
        </style>
    </head>
    <body class="container-fluid">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header a">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
              <a class="navbar-brand" href="/">Damn Design</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Our Services</a></li> 
                <li><a href="#">Brands</a></li> 
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </nav>
        <div class="row">
            <div id="myCarousel" class="carousel slide col-md-8" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="{{ asset('images/work1.jpg') }}" alt="Los Angeles" width="100%" height="100%">
                </div>

                <div class="item">
                  <img src="{{ asset('images/work2.jpeg') }}" alt="Chicago" width="100%" height="100%">
                </div>

                <div class="item">
                  <img src="{{ asset('images/work3.jpeg') }}" alt="New York" width="100%" height="100%">
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="sr-only" >Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="sr-only">Next</span>
              </a>
            </div>
            <div class="col-md-4">
                    <img src="{{ asset('images/home1.jpeg') }}" alt="#" width="100%" height="100%">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/home2.jpeg') }}" alt="#" width="100%" height="100%">
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" >
        </script>
    </body>
</html>

