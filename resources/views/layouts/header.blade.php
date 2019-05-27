<section>
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <div class="logo">
                    <a href="{{ route('home') }}">
                    <img src="{{ asset('storage/'. setting('site.logo')) }}" alt="Vyomann logo">
                    </a>
                </div>
            </div>
            <div class="social-list pl-0 mb-0">
                <a href="#" target="_blank">
                    <span class="px-2 socicon-facebook socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="#" target="_blank">
                    <span class="px-2 socicon-instagram socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="#" target="_blank">
                    <span class="px-2 socicon-linkedin socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
                <a href="#" target="_blank">
                    <span class="px-2 socicon-youtube socicon mbr-iconfont mbr-iconfont-social"></span>
                </a>
            </div>
        </div>
    </nav>
</section>
<section class="menu cid-ril3yc4pgM" once="menu" id="menu1-7">
    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <!-- <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="index.html">
                VA</a></span>
            </div>
        </div> -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                <li class="nav-item @if(Route::currentRouteName() == 'home') active @endif">
                    <a class="nav-link link text-white display-4" href="{{ route('home') }}">HOME</a>
                </li>
                <li class="nav-item @if(Route::currentRouteName() == 'application') active @endif">
                    <a class="nav-link link text-white display-4" href="{{ route('application') }}">APPLICATIONS</a>
                </li>
                <!-- <li class="nav-item @if(Route::currentRouteName() == 'product-detail') active @endif">
                    <a class="nav-link link text-white display-4" href="{{ route('product-detail') }}">PRODUCT</a>
                </li> -->
                <li class="nav-item @if(Route::currentRouteName() == 'products') active @endif">
                    <a class="nav-link link text-white display-4" href="{{ route('products') }}">PRODUCTS</a>
                </li>
                <!-- <li class="nav-item @if(Route::currentRouteName() == 'consultancy') active @endif">
                    <a class="nav-link link text-white display-4" href="{{ route('consultancy') }}">CONSULTANCY</a>
                </li> -->
                <li class="nav-item @if(Route::currentRouteName() == 'contact') active @endif">
                    <a class="nav-link link text-white display-4" href="{{ route('contact') }}">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>
</section>