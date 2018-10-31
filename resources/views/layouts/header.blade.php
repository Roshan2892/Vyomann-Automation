<header class="header">
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="logo">
                    <img src="{{ asset('images/Logo 200x75.png') }}" alt="Vyomann logo">
                </div>
            </div>
            <ul class="social-links navbar-right">
                <li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube youtube"></i></a></li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> 
                </button>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li @if(Route::currentRouteName() == "home") class="active" @endif><a href="{{ route('home') }}" >HOME</a></li>
                    <li @if(Route::currentRouteName() == "application") class="active" @endif><a href="{{ route('application') }}">APPLICATIONS</a></li>
                    <li @if(Route::currentRouteName() == "products") class="active" @endif><a href="{{ route('products') }}">PRODUCTS</a></li>
                    <li @if(Route::currentRouteName() == "consultancy") class="active" @endif><a href="{{ route('consultancy') }}">CONSULTANCY</a></li>
                    <li @if(Route::currentRouteName() == "contact") class="active" @endif><a href="{{ route('contact') }}">CONTACT US</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--responsive nav ends-->
</header>
<!--header ends--> 