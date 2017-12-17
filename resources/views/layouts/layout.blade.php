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
            
            @yield('Style')

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
    <body class="container-fluid" style="padding-top: 63px;">
        @include('layouts.nav')

        @yield('content')

        @include('layouts.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>