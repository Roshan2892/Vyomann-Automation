@extends('layouts.master')

@section('css') @endsection
@section('content')
    <!--2nd banner starts-->
    <img src="{{ asset('images/applications 1920x360.png') }}" alt="Vyomann" style="width:100%;">
      <!--2nd banner ends-->
    <!--gallery starts-->
    <div class="gallery cf">
        <div>
            <img src="{{ asset('images/fst.jpg') }}" />
        </div>
        <div>
            <img src="{{ asset('images/fst.jpg') }}" />
        </div>
        <div>
            <img src="{{ asset('images/fst.jpg') }}" />
        </div>
        <div>
            <img src="{{ asset('images/fst.jpg') }}" />
        </div>
        <div>
            <img src="{{ asset('images/fst.jpg') }}" />
        </div>
        <div>
            <img src="{{ asset('images/fst.jpg') }}" />
        </div>
        <div>
            <img src="{{ asset('images/fst.jpg') }}" /> 
        </div>
        <div>
            <img src="{{ asset('images/fst.jpg') }}" />
        </div>
    </div>
    <!--gallery ends-->
@endsection

@section('js') @endsection