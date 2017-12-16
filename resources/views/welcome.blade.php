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
        <link href="https://fonts.googleapis.com/css?family=Bungee|Pacifico|Nunito|Exo|Cookie" rel="stylesheet">


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
            .container-fluid,.col-md-8,.col-md-4,.col-md-6,.col-md-3,.col-md-5{
                padding: 0;
            }
            .row{
                margin: 0;
            }
            .chevron{
                 position:absolute;
                  top:50%;
                  z-index:5;
            }
            .carousel-caption{
                color: black;
                text-shadow: none;
            }
            .home1{
                background-color: white;
                padding: 80px 0 110px 0;
            }

            #head1{
                color: #db2e48;
                font-family: 'Exo', sans-serif;
                margin-bottom: 20px;
                font-size: 23px;
                letter-spacing: 1px;
                font-weight: 800;
            }

            .home1 div div{
                 margin: 10px 0 40px 0;
                 font-weight: 500;
                 font-size: 16px;
                 line-height: 34px;
            }

            .abtn{
                border: 1px #555555 solid;
                padding: 10px 30px;
                color: black;
                text-decoration: none;
                font-size:14px;
                text-transform: uppercase;
            }

            #head2{
                font-family: Impact ; 
                color: #555555;
                font-size: 36px;
                letter-spacing: 4px; 
            }

            #myCarousel2{
                background-color: #2B2A2A;
                color: white; 
                padding: 100px 0;
                font-family: 'Nunito';
                letter-spacing: 1px;
                font-size: larger;
            }

            .footer-distributed{
                background-color: #292c2f;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
                box-sizing: border-box;
                width: 100%;
                text-align: left;
                font: bold 16px sans-serif;
                padding: 55px 50px;
            }

            .footer-distributed .footer-left,
            .footer-distributed .footer-center,
            .footer-distributed .footer-right{
                display: inline-block;
                vertical-align: top;
            }

            /* Footer left */

            .footer-distributed .footer-left{
                width: 40%;
            }

            /* The company logo */

            .footer-distributed h3{
                color:  #ffffff;
                font: normal 36px 'Cookie', cursive;
                margin: 0;
            }

            .footer-distributed h3 span{
                color:  #5383d3;
            }

            /* Footer links */

            .footer-distributed .footer-links{
                color:  #ffffff;
                margin: 20px 0 12px;
                padding: 0;
            }

            .footer-distributed .footer-links a{
                display:inline-block;
                line-height: 1.8;
                text-decoration: none;
                color:  inherit;
            }

            .footer-distributed .footer-company-name{
                color:  #8f9296;
                font-size: 14px;
                font-weight: normal;
                margin: 0;
            }

            /* Footer Center */

            .footer-distributed .footer-center{
                width: 35%;
            }

            .footer-distributed .footer-center i{
                background-color:  #33383b;
                color: #ffffff;
                font-size: 25px;
                width: 38px;
                height: 38px;
                border-radius: 50%;
                text-align: center;
                line-height: 42px;
                margin: 10px 15px;
                vertical-align: middle;
            }

            .footer-distributed .footer-center i.fa-envelope{
                font-size: 17px;
                line-height: 38px;
            }

            .footer-distributed .footer-center p{
                display: inline-block;
                color: #ffffff;
                vertical-align: middle;
                margin:0;
            }

            .footer-distributed .footer-center p span{
                display:block;
                font-weight: normal;
                font-size:14px;
                line-height:2;
            }

            .footer-distributed .footer-center p a{
                color:  #5383d3;
                text-decoration: none;;
            }


            /* Footer Right */

            .footer-distributed .footer-right{
                width: 20%;
            }

            .footer-distributed .footer-company-about{
                line-height: 20px;
                color:  #92999f;
                font-size: 13px;
                font-weight: normal;
                margin: 0;
            }

            .footer-distributed .footer-company-about span{
                display: block;
                color:  #ffffff;
                font-size: 14px;
                font-weight: bold;
                margin-bottom: 20px;
            }

            .footer-distributed .footer-icons{
                margin-top: 25px;
            }

            .footer-distributed .footer-icons a{
                display: inline-block;
                width: 35px;
                height: 35px;
                cursor: pointer;
                background-color:  #33383b;
                border-radius: 2px;

                font-size: 20px;
                color: #ffffff;
                text-align: center;
                line-height: 35px;

                margin-right: 3px;
                margin-bottom: 5px;
            }


            @media (max-width: 880px) {

                .footer-distributed{
                    font: bold 14px sans-serif;
                }

                .footer-distributed .footer-left,
                .footer-distributed .footer-center,
                .footer-distributed .footer-right{
                    display: block;
                    width: 100%;
                    margin-bottom: 40px;
                    text-align: center;
                }

                .footer-distributed .footer-center i{
                    margin-left: 0;
                }

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
                  <div class="carousel-caption">
                    <h3>Lorem Ipsum</h3>
                    <p>lorem ipsum dolor amet!</p>
                  </div>
                </div>

                <div class="item">
                  <img src="{{ asset('images/work2.jpeg') }}" alt="Chicago" width="100%" height="100%">
                  <div class="carousel-caption">
                    <h3>Lorem Ipsum</h3>
                    <p>lorem ipsum dolor amet!</p>
                  </div>
                </div>

                <div class="item">
                  <img src="{{ asset('images/work3.jpeg') }}" alt="New York" width="100%" height="100%">
                  <div class="carousel-caption">
                    <h3>Lorem Ipsum</h3>
                    <p>lorem ipsum dolor amet!</p>
                  </div>
                </div>
              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span  class="caro">
                <i class="fa fa-chevron-left chevron" aria-hidden="true"></i>
                <span class="sr-only" >Previous</span>
                </span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="caro">
                <i class="fa fa-chevron-right chevron" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
                </span>
              </a>
            </div>
            <div class="col-md-4">
                    <img src="{{ asset('images/home1.jpeg') }}" alt="#" width="100%" height="100%">
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('images/home2.jpeg') }}" alt="#" width="100%" height="100%">
            </div>
        </div>

        <div class="text-center home1 row">
            <h3 id="head1">Lorem ipsum dolor sit amet</h3>
            <div class="col-md-6 col-md-offset-3">
                <div>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore .</div>
                <a href="#" class="abtn">Click Here</a>
            </div>
        </div>

        <div class="row" style="background-color: #ede6e6;">
            <div class="col-md-6">
                <img src="{{ asset('images/r3.jpeg') }}" alt="Chicago" width="100%" height="100%">
            </div>
            <div class="col-md-6 " style="padding: 50px 60px;">
                <h3 id="head2">LOREM&nbsp IPSUM</h3>
                <p style="font-family: Nunito; margin-top: 50px; font-size: 16px; padding-right: 90px;">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                    <br><br>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam. 
                    <br><br>
                    Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('images/work6.jpeg') }}" alt="Chicago" width="100%" height="100%">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/pot2.jpeg') }}" alt="Chicago" width="100%" height="100%">
            </div>
            <div class="col-md-3">
                <img src="{{ asset('images/r8.png') }}" alt="Chicago" width="100%" height="100%">
            </div>
            <div class="col-md-6" style="height: 339px;width:50%; background-color: white; padding: 30px 60px;" >
                <h3 id="head2">LOREM&nbsp IPSUM</h3>
                <p style="font-family: Nunito; margin-top: 30px; font-size: 16px; padding-right: 70px;">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                </p>
            </div>
        </div>        
        <div >
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel2" data-slide-to="1"></li>
                <li data-target="#myCarousel2" data-slide-to="2"></li>
              </ol>

              <!-- Wrapper for slides -->
              <div class="carousel-inner row text-center" >
                <div class="item active">
                  <div class="col-md-8 col-md-offset-2 text-left" style="padding: 0 20px;">
                      “I have been extremely pleased with the service that Oyster provides. I was impressed by their ability to manage complex processes within limited time, without compromising the quality of the deliverable.”
                      <div style="margin-top: 30px;color: #D8EDF3">Soria Bendoumia, Marketing Communications Manager, GE</div>
                      <hr style="width: 57%;" class="pull-left">
                  </div>
                </div>

                <div class="item ">
                  <div class="col-md-8 col-md-offset-2 text-left" style="padding: 0 20px;">
                      “I have been extremely pleased with the service that Oyster provides. I was impressed by their ability to manage complex processes within limited time, without compromising the quality of the deliverable.”
                      <div style="margin-top: 30px;color: #D8EDF3">Soria Bendoumia, Marketing Communications Manager, GE</div>
                      <hr style="width: 57%;" class="pull-left">
                  </div>
                </div>

                <div class="item">
                  <div class="col-md-8 col-md-offset-2 text-left" style="padding: 0 20px;">
                      “I have been extremely pleased with the service that Oyster provides. I was impressed by their ability to manage complex processes within limited time, without compromising the quality of the deliverable.”
                      <div style="margin-top: 30px;color: #D8EDF3">Soria Bendoumia, Marketing Communications Manager, GE</div>
                      <hr style="width: 57%;" class="pull-left">
                  </div>
                </div>

              </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel2" data-slide="prev">
                <span  class="caro">
                <i class="fa fa-chevron-left chevron" aria-hidden="true"></i>
                <span class="sr-only" >Previous</span>
                </span>
              </a>
              <a class="right carousel-control" href="#myCarousel2" data-slide="next">
                <span class="caro">
                <i class="fa fa-chevron-right chevron" aria-hidden="true"></i>
                <span class="sr-only">Next</span>
                </span>
              </a>
            </div>
        </div>
        <footer class="footer-distributed" style="font-family: 'Nunito';">
            <div class="footer-left">
                <h3>Damn<span>Design</span></h3>
                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">Contact</a>
                    ·
                    <a href="#">About</a>
                    ·
                    <a href="#">Brands</a>
                    ·
                    <a href="#">Services</a>
                </p>
                <p class="footer-company-name">Damn Design pvt ltd &copy; 2017</p>
            </div>
            <div class="footer-center">
                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>21 Revolution Street</span> Paris, France</p>
                </div>
                <div>
                    <i class="fa fa-phone"></i>
                    <p>+1 555 123456</p>
                </div>
                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">support@company.com</a></p>
                </div>
            </div>
            <div class="footer-right" >
                <p class="footer-company-about">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
                <div class="footer-icons">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-github"></i></a>
                </div>
            </div>
        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" >
        </script>
    </body>
</html>

<!-- <div class="row" style="font-size: 25px;">
    <div class="col-md-2" style="padding-left: 0;">
        <i class="fa fa-facebook-official" aria-hidden="true"></i>
    </div>
    <div class="col-md-2" style="padding-left: 0;">
        <i class="fa fa-twitter-square" aria-hidden="true"></i>
    </div>
    <div class="col-md-2" style="padding-left: 0;">
        <i class="fa fa-linkedin-square" aria-hidden="true"></i>
    </div>
</div> -->