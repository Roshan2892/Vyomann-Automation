@extends('layouts.master')

@section('css') @endsection
@section('content')
    <!--2nd banner starts-->
    <img src="{{ asset('images/Products 1920x360.png') }}" alt="Vyomann" style="width:100%;">
    <!--2nd banner ends-->

    <div class="product-container">
      <div class="featured-image-outer">
        <div class="featured-image-inner">
            <img src="images/printer.png" alt="" class="img-responsive">
        </div>
      </div>
      <div class="two-images-outer">
        <div class="two-images-inner">
          <div class="product-desc">
            <h2>Title: Premier P100 Flexible Labelling System</h2>
            <p>Why do we use it?
  It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
          </div>
        </div>
      </div>
    </div><!--container ends-->
      
    <div class="container2">
    Gallery        Video         Attachment         Specifications
    </div><!--container2 ends-->
@endsection

@section('js') @endsection