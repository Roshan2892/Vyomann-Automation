@extends('layouts.master')

@section('css') @endsection
@section('content')
    <!--2nd banner starts-->
    <img src="{{ asset('images/contact 1920x360.jpg') }}" alt="Vyomann" style="width:100%;">
    <!--2nd banner ends-->
    
    <div class="container-fluid contact_div">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <form class="contact_form" id="contact_form">
                    <div class="form-group">
                        <input name="name" type="text" class="form-control validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder="Name" id="name" />
                    </div>
                    <div class="form-group">
                        <input type="tel" name="telephone" id="telephone" placeholder="Mobile" tabindex="4" class="form-control validate[required,custom[onlyLetter],length[0,100]] feedback-input">
                    </div>
                    <div class="form-group">
                        <input name="email" type="text" class="form-control validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <textarea name="description" rows="6" class="form-control validate[required,custom[description]] feedback-input" id="description" placeholder="Description"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="form-control" value="DONE" id="button-blue"/>
                        <div class="ease"></div>
                    </div>
                </form>
            </div>
            <div class="col-md-6  col-sm-6">
                <div class="details">
                    <ul class="list-unstyled">
                        <li><i class="fas fa-mobile-alt"></i> <span>+91 88289 66266</span></li>
                        <li><i class="fas fa-envelope"></i><a href="mailto:vyomannautomation@gmail.com"> <span>vyomannautomation@gmail.com</span></a></li>
                        <li><i class="fas fa-home"></i> <span>B/41, Shukla Compound,
                        <br>Shiv Vallabh Cross Road,
                        <br>Rawal Pada, Dahisar(E), 
                        <br>Mumbai - 400068.</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js') @endsection