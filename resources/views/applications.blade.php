@extends('layouts.master')

@section('css') @endsection
@section('content')
    <!--2nd banner starts-->
    <img src="{{ asset('images/applications 1920x360.png') }}" alt="Vyomann" style="width:100%;">
      <!--2nd banner ends-->
    <!--gallery starts-->
    <!-- <div class="gallery cf">
        <img src="{{ asset('images/fst.jpg') }}" width="300px"/>
        <img src="{{ asset('images/fst.jpg') }}" width="300px" />
        <img src="{{ asset('images/fst.jpg') }}" width="300px" />
        <img src="{{ asset('images/fst.jpg') }}" width="300px" />
        <img src="{{ asset('images/fst.jpg') }}" width="300px" />
        <img src="{{ asset('images/fst.jpg') }}" width="300px" />
        <img src="{{ asset('images/fst.jpg') }}" width="300px" /> 
        <img src="{{ asset('images/fst.jpg') }}" width="300px" />
    </div> -->

    <div class="gallery cf">
  <div>
    <img src="images/main1.png" class="responsive"/>
  </div>
  <div>
    <img src="images/Tea.png" class="responsive"/>
  </div>
   <div>
    <img src="images/kitchen.png" class="responsive"/>
  </div>
  <div>
    <img src="images/card.png" class="responsive"/>
  </div>
  <div>
    <img src="images/nerolac.png" class="responsive"/>
  </div>
  <div>
    <img src="images/bottle.png" class="responsive"/>
  </div>
  <div>
    <img src="images/stationery.png" class="responsive"/>
  </div>
  <div>
    <img src="images/pipe.png" class="responsive"/>
  </div>
   
</div>
    <!--gallery ends-->
@endsection

@section('js') @endsection