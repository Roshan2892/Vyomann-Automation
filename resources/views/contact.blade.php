@extends('layouts.master')

@section('css') @endsection
@section('content')
    <!--2nd banner starts-->
    <img src="{{ asset('images/contact 1920x360.jpg') }}" alt="Vyomann" style="width:100%;">
    <!--2nd banner ends-->
    
    <div class="container-fluid contact_div">
        <div class="row">
            <div class="col-md-6">
                <form class="contact_form" id="contact_form">
                    <p class="name">
                        <input name="name" type="text" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input" placeholder=       "Name" id="name" />
                    </p>
                    <p class="tel">
                        <input type="tel" name="telephone" id="telephone" placeholder="Mobile" tabindex="4" class="validate[required,custom[onlyLetter],length[0,100]] feedback-input">
                    </p>
                    <p class="email">
                        <input name="email" type="text" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email" />
                    </p>
                    <p class="description">
                        <textarea name="description" rows="6" class="validate[required,custom[description]] feedback-input" id="description" placeholder="Description"></textarea>
                    </p>
                    <p class="description">
                        <input type="submit" value="DONE" id="button-blue"/>
                        <div class="ease"></div>
                    </p>
                </form>
            </div>
            <div class="col-md-6">
                <div class="details">
                    <ul class="list-unstyled">
                        <li>+91 88289 66266</li>
                        <li><a href="mailto:vyomannautomation@gmail.com">vyomannautomation@gmail.com</a></li>
                        <li><a href="{{ route('home') }}">www.vyomannautomation.com</a></li>
                        <li>B/41, Shukla Compound, <br> Shiv Vallabh Cross Road,<br>
                        Rawal Pada, Dahisar(E), <br>Mumbai - 400068</li>
                    </ul>
                </div>
            </div>
        </div>
</div>

    </div><!--container3 ends-->
@endsection

@section('js') @endsection