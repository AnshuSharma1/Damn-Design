@extends('layouts.layout')

@section('Style')
  #jumbo {
    background: url("{{ asset('images/work5.jpeg') }}") no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    opacity:0.84;
    height: 100%;
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
      background: #1b1c1c;
      color: white; 
      padding: 100px 0;
      font-family: 'Nunito';
      letter-spacing: 1px;
      font-size: larger;
    }
@endsection

@section('content')
<div id="jumbo" style="padding: 130px 60px 200px 60px;color: white;  font-family: 'Dosis', sans-serif; font-size: larger;" class="text-center">
        <div class="row">
          <div class="col-md-3 text-left">
            <h3 style="font-size: 35px; font-family: 'Raleway', sans-serif; font-weight: bold; letter-spacing: 2px;">Lorem Ipsum Dolor</h3>
            <div style="margin-top: 30px; color: #ffe5f3; letter-spacing: 1px;">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
              <br><br>
               Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
          </div>
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
@endsection