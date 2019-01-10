@extends('layouts.master')

@section('css') @endsection
@section('content')
    <!--slider starts-->
    <div class="container-fluid">
         <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
               <div class="item active">
                  <img src="{{ asset('images/Banner-2.jpg') }}" alt="Vyomann" style="width:100%;">
               </div>
               <div class="item">
                  <img src="{{ asset('images/Banner-2.jpg') }}" alt="Vyomann" style="width:100%;">
               </div>
               <div class="item">
                  <img src="{{ asset('images/Banner-2.jpg') }}" alt="Vyomann" style="width:100%;">
               </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </div>
      <!--slider ends-->
      <br>
      <!--2nd banner starts-->
      <img src="{{ asset('images/Welcome 1920x360.jpg') }}" alt="Vyomann" style="width:100%;">
      <!--2nd banner ends-->
      <!--content starts-->
      <div class="content">
         Vyomann Automation is the pioneer in manufacturing and supplying of hot stamping and heat transfer machines. Vyomann Automation provides end to end solution for all your requirement related to heat transfer process with a backing of reseach and development center and well skilled servicing team for post-installation issues. 
         <br>
         Our economical and robust models enable you to perform any task efficiently in a short span of time.

         With head office in Mumbai, we support our customer and educate them in embracing disruptive technologies, In-lining production set up, hand holding, true 24/7/365 support throughout the journey.
      </div>
      <!--content starts-->
@endsection

@section('js') @endsection