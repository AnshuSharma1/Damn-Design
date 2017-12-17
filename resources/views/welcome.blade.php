@extends('layouts.layout')

@section('Style')
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
@endsection