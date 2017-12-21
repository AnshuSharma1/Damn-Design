<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Damn Design</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Bungee|Pacifico|Nunito|Exo|Cookie|Dosis|Titillium+Web" rel="stylesheet">


        <!--Styles -->
        <style type="text/css">
            .nava{
                color: black;
            }

            .navbar{
                padding: 10px 60px 10px 50px; 
                margin-bottom: 0;
                border-radius: 0;
            }
            .navbar-brand{
                font-family: 'bungee', 'cursive';
                letter-spacing: 2px;
                font-size: 25px;
                color: black;
                padding: 14px 0px;
            }
            .navbar-nav li a{
               text-transform: uppercase;
               font-size: 14px;
               letter-spacing: 1px; 
               font-weight: bolder;
            }
            .navbar-nav li a:hover{
               background-color: transparent;
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
            

            .footer-distributed{
                background-color: #292c2f;
                box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
                box-sizing: border-box;
                width: 100%;
                text-align: left;
                font: 16px sans-serif;
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
                letter-spacing: 0.5px;
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

            .footer-center{
                color: white;
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

            @yield('Style')
        </style>
    </head>
    <body class="container-fluid">
        @include('layouts.nav')
        @yield('content')

        @include('layouts.footer')

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>