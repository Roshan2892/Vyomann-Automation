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
                  <img src="{{ asset('images/banner1.gif') }}" alt="Vyomann" style="width:100%;max-height:470px" height="100%">
               </div>
               <div class="item">
                  <img src="{{ asset('images/banner3.jpg') }}" alt="Vyomann" style="width:100%;">
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
         Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.<br>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </div>
      <!--content starts-->
@endsection

@section('js') @endsection