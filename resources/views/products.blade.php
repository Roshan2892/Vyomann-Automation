@extends('layouts.master')

@section('css') @endsection
@section('title') - Products @endsection
@section('content')
    <section class="mbr-section content5 cid-rilcHRASZE mbr-parallax-background" id="content5-m">
        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                        PRODUCTS
                    </h2>
                </div>
            </div>
        </div>
    </section>

    <section class="features3 cid-rild8axaz1" id="features3-p">
        <div class="container">
            <div class="media-container-row">
            @if(count($products) > 0)
                @foreach($products as $product)
                
                @php $id = $product->id; @endphp
                <a href="{{ route('product-detail', ['id' => $id]) }}">
                    <div class="card p-3 col-12 col-md-6 col-lg-4">
                        <div class="card-wrapper">
                            <div class="card-img">
                                <img src="{{ asset('storage/'.$product->product_gif) }}" alt="" class="img-responsive">
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-fonts-style display-7">
                                    {{ $product->title }}
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7">
                                    {{ $product->description }}
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </a>
                @endforeach
            @endif
                <!-- <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="assets/images/background2.jpg" alt="">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                Mobile Friendly
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card p-3 col-12 col-md-6 col-lg-4">
                    <div class="card-wrapper">
                        <div class="card-img">
                            <img src="assets/images/background3.jpg" alt="">
                        </div>
                        <div class="card-box">
                            <h4 class="card-title mbr-fonts-style display-7">
                                Unique Styles
                            </h4>
                            <p class="mbr-text mbr-fonts-style display-7">
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
@endsection

@section('js')

@endsection