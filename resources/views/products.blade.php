@extends('layouts.master')

@section('css') @endsection
@section('content')
    <!--2nd banner starts-->
    <img src="{{ asset('images/Products 1920x360.png') }}" alt="Vyomann" style="width:100%;">
    <!--2nd banner ends-->
    <div class="container-fluid">
    <div class="row product-container">
      <div class="col-md-5 col-sm-12">
        <div class="featured-image-outer">
          <div class="featured-image-inner">
              <img src="images/printer.png" alt="" class="img-responsive">
          </div>
        </div>
      </div>
      <div class="col-md-7 col-sm-12">
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
      </div>
    </div>
    </div>

    <div id="myGroup" class="container2">
    <div class="accordion-group">
          <div id="gallery" class="collapse indent">
              <!--image gallery starts-->
              <div class="row">
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Snow">
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Forest">
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Mountains">
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Mountains" >
                  </div>
              </div>
              <!--image gallery ends-->
          </div>
  
          <div id="video" class="collapse indent">
              <div class="row">
                  <div class="col-md-12">
                      <video width="600" controls>
                          <source src="https://youtu.be/vjtt-bMonpc" type="video/mp4">
                          Your browser does not support HTML5 video.
                      </video>
                  </div>
              </div>
          </div>
          <div id="attachment" class="collapse indent">
              <!--image gallery starts-->
              <div class="row">
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Snow" >
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Forest">
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Mountains" >
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Mountains" >
                  </div>
              </div>
              <!--image gallery ends-->
          </div>
          <div id="specifications" class="collapse">
              <!--image gallery starts-->
              <div class="row">
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Snow">
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Forest">
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Mountains">
                  </div>
                  <div class="col-md-3">
                      <img src="images/gallery.jpg" class="img-responsive" alt="Mountains">
                  </div>
              </div>
              <!--image gallery ends-->
          </div>
      </div>
      <button data-toggle="collapse" data-target="#gallery" class="btn warning">Gallery</button>
      <button data-toggle="collapse" data-target="#video" class="btn warning">video</button>
      <button data-toggle="collapse" data-target="#attachment" class="btn warning">Attachment</button>
      <button data-toggle="collapse" data-target="#specifications" class="btn warning">Specifications</button>
  </div>
@endsection

@section('js')
  <script type="text/javascript">
      var $myGroup = $('#myGroup');
      $myGroup.on('show.bs.collapse','.collapse', function() {
          $myGroup.find('.collapse.in').collapse('hide');
      });
  </script>
@endsection