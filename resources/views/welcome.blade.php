@extends('layouts.layout')

@section('Style')

    #jumbo {
    background: url("{{ asset('images/5I3A6439.JPG') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    height: 100%;
    padding: 30% 0;
    }

    #first{
    padding: 4% 10% 4% 10%;
    }

    .third{
    background-color: white;
    }

    .collage .col-xs-4{
      padding : 0;
    }

    .cr{
    margin-top: 5%;
    }
   
   .collage .col-xs-12{
     padding: 0;
    }

    .cmid .col-xs-12{
    padding: 0 5%;
  }


  #firstc{
   color: black;
   font-family: 'Nunito'; 
   padding: 0 10%;
   margin-bottom: 20px; 
   font-size: 100%;
    }

    .third{
        padding: 7% 5% 3% 5%;
    }

    #thirdc{
      font-size: 110%; letter-spacing: 0px; line-height: 27px;
    }

    #thirda{
      padding: 3% 6%; color: black; font-size: 15px; font-weight: bold; letter-spacing: 2px; border: 1px black solid; display: inline-block; margin-top: 7%;
    }

    #thirdhr{
    border-color: #555; border-width: 3px; border-radius: 3px; width: 8%; margin: 5% 0;
   }

   .fourth{
      padding: 4% 15%;
    }

    .fourthc{
   margin-top: 30px; font-family: 'Nunito'; font-size: 16px; letter-spacing: 0.5px; padding: 7px 10%;
  }

  @media only screen and (max-width: 800px) {
      #jumbo{
      padding: 45% 0;
    }

    #first{
    padding: 4% 8% 4% 8%;
    }

  }

  .thirdf{
    padding:0 7%;
  }

  .thirds{
    padding: 0 5% 3% 0; color: #555; font-family: 'Nunito';
  }

  @media only screen and (max-width: 680px) {
    
    #first{
    padding: 4% 0;
    }

    .fourthc{
     padding: 7px 2%;
  }

  .fourth{
      padding: 4% 5%;
    }

  }

  @media only screen and (max-width: 560px) {
      #jumbo{
      padding: 55% 0;
    }
  }

  @media only screen and (max-width: 460px) {
      #jumbo{
      padding: 70% 0;
    }
  }

  @media only screen and (max-width: 1150px) {
       #thirda{
        margin-top: 5%;
        }

        .thirdf{
        padding:0 6% 0 4%;
      }
  }

  @media only screen and (max-width: 990px) {
     
     .thirds{
       padding: 0 0 3% 0;
     }

     #thirdc{
     font-size: 100%;
   }

   .third{
        padding: 7% 3% 3% 5%;
    }

  }

    @media only screen and (max-width: 990px) {
     
     .thirds{
       padding: 6% 3% 3% 5%;
     }

    }


@endsection

@section('content')
<div id="jumbo" >  
  <div style="color: white;  font-family: 'Dosis', sans-serif; font-size: larger;" class="text-center">
  </div>
</div>

<div id="first" class="row text-center" >
  <div class="col-md-8 col-md-offset-2">
    <h3 style="font-family: 'Dosis'; color: black; font-size: 35px; padding: 0 20px;">
     Dream. Design. Build.
    </h3>
    <hr style="width: 10%; border-color: #FF5D5F; border-width: 2px; margin: 30px auto;">
    <div id="firstc" >
     At Damn Design, we believe in designing our products with the approach of making them time-proof. With ultimate attention to usability, functionality and aesthetics, our products differentiate themselves from the hurdle.
    </div>
    <br>
    <a href="/about" style="padding: 18px 40px; background-color: #FF5D5F; color: white; border-radius: 50px; font-size: 16px; font-weight: bold; letter-spacing: 2px;">
       About Us
    </a>
  </div>
</div>

<div id="second" style="margin-bottom: 5%; ">
  <div style="padding: 30px 20%;">
    <div class="row collage">
      <div class="col-xs-4">
        <div class="row">
          <div class="col-xs-12">
          <img src="{{ asset('images/5I3A6007.JPG') }}" alt="New York" width="100%">
          </div>
        </div>
        <div class="row cr">
          <div class="col-xs-12">
          <img src="{{ asset('images/1H5A0384-2.jpg') }}" alt="New York" width="100%">
          </div>
        </div>
      </div>

      <div class="col-xs-4 cmid">
        <div class="row">
          <div class="col-xs-12">
          <img src="{{ asset('images/1H5A0391-2.JPG') }}" alt="New York" width="100%">
          </div>
        </div>
        <div class="row cr">
          <div class="col-xs-12">
          <img src="{{ asset('images/5I3A6106.JPG') }}" alt="New York" width="100%">
          </div>
        </div>
      </div>

      <div class="col-xs-4">
        <div class="row">
          <div class="col-xs-12">
          <img src="{{ asset('images/5I3A6353.JPG') }}" alt="New York" width="100%" >
          </div>
        </div>
        <div class="row cr">
          <div class="col-xs-12">
          <img src="{{ asset('images/1H5A0373-2.JPG') }}" alt="New York" width="100%" >
          </div>
        </div>
      </div>
  </div>
  </div>
</div>


<div class="third text-center" >
  <div class="row">
    <div class="col-sm-6 col-xs-12 thirdf">
      <img src="{{ asset('images/5I3A6147.jpeg') }}" alt="New York" width="100%" style="border-radius: 5px; ">
    </div>
    <div class="col-sm-6 col-xs-12 text-left thirds">
      <h2 style="margin-top: 0;">Lorem Ipsum Dolor Amet</h2>
        <hr id="thirdhr">
        <div id="thirdc">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          <div style="margin-top: 4%"> 
            Esse cillum dolore eu fugiat nulla pariatur.
          </div>
        </div>
        <a id="thirda">
        CLICK HERE
        </a>
    </div>
  </div>
</div>


<div class="fourth">
  <div class="text-center" style="font-size: 25px; margin: 0px 0 60px 0; color: #1d2649; letter-spacing: 0.5px; font-family: 'calibri'; font-style: italic;">Consectetur adipiscing elit quo voluptas</div>
  <div class="row" style="color: black;">
    <div class="col-md-4 text-center col-xs-6">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
      <br>
      <div class="fourthc">
        “I have been extremely pleased with the service that the company provides."
      </div>
    </div>

    <div class="col-md-4 text-center col-xs-6">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
      <br>
      <div class="fourthc">
        “I have been extremely pleased with the service that the company provides."
      </div>
    </div>

    <div class="col-md-4 text-center hidden-sm hidden-xs">
      <img src="{{ asset('images/pot2.jpeg') }}" alt="New York" width="50%" style="border-radius: 5px;">
      <br>
      <div class="fourthc">
        “I have been extremely pleased with the service that the company provides."
      </div>
    </div>
  </div>
</div>


@endsection