@extends('layouts.master')

@section('css') @endsection
@section('title') - Product detail @endsection
@section('content')
    @if(isset($product))
    <section class="features11 cid-rileZKUTg3" id="features11-t">
        <div class="container-fluid">   
            <div class="col-md-12">
                <div class="media-container-row">
                    <div class="mbr-figure m-auto" style="width: 65%;">
                        <img src="{{ asset('storage/'.$product->product_gif) }}" class="img-responsive" alt="" title="">
                    </div>
                    <div class=" align-left aside-content">
                        
                        <div class="mbr-section-text">
                            
                        </div>

                        <div class="block-content">
                            <div class="card p-3 pr-3">
                                <div class="media">
                                    <div class="media-body">
                                        <h3>{{ $product->title }}</h3>
                                    </div>
                                </div>                

                                <div class="card-box">
                                    <p class="block-text mbr-fonts-style display-7">{{ $product->description }}</p>
                                </div>
                            </div>

                            
                        </div>
                    </div>
                </div>
            </div> 
        </div>          
    </section>
    <div id="myGroup" class="container2">
        <div class="accordion-group">
            @if(count(json_decode($product->gallery_images)) > 0)
            @php $gallery_images = json_decode($product->gallery_images); @endphp
            <section class="mbr-gallery mbr-slider-carousel cid-rilkO0Zx18 container collapse" id="gallery">
                <h2 class="align-center">Gallery</h2>
                <hr>
                <div class="mbr-gallery-row">
                    <div class="mbr-gallery-layout-default">
                        <div class="row">
                            @foreach($gallery_images as $gi)
                            <div class="col-md-4 col-sm-6 col-xs-12 mbr-gallery-item mbr-gallery-item--p4">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                    data-image="{{ asset('storage/'. $gi) }}"
                                    data-target="#image-gallery">
                                        <img class="img-thumbnail" src="{{ asset('storage/'.$gi) }}" height="350" width="500" alt="Another alt text">
                                </a>
                            </div>
                            @endforeach
                            <!-- <div class="col-md-4 col-sm-6 col-xs-12 mbr-gallery-item mbr-gallery-item--p4">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                    data-image="https://placeimg.com/500/375/tech/sepia"
                                    data-target="#image-gallery">
                                        <img class="img-thumbnail" src="https://placeimg.com/500/375/tech/sepia" alt="Another alt text">
                                </a>
                            </div>
                            <div class="col-md-4 col-sm-6 col-xs-12 mbr-gallery-item mbr-gallery-item--p4">
                                <a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""
                                    data-image="https://placeimg.com/500/375/tech/sepia"
                                    data-target="#image-gallery">
                                        <img class="img-thumbnail" src="https://placeimg.com/500/375/tech/sepia" alt="Another alt text">
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </section>
            @endif

            @if(isset($product->video_url))
            <section class="cid-riljl5WpMT container collapse" id="video">
                <figure class="mbr-figure align-center ">
                <h2 class="align-center">Video</h2><hr>
                <div class="video-block">
                    <div><!-- <iframe class="mbr-embedded-video" src="{{ $product->video_url }}" width="450" height="300" frameborder="0" allowfullscreen></iframe> -->
                        {!! $product->video_url !!}
                    </div>
                </div>
                </figure>
            </section>
            @endif

            @if(count(json_decode($product->attachment_images)) > 0)
            @php $attachment_images = json_decode($product->attachment_images); @endphp
            <section class="carousel slide cid-ripCC9sqDe container collapse" data-interval="false" id="attachments">
                <h2 class="align-center">Attachments</h2><hr>
                <div class="full-screen">
                    <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000">
                        <ol class="carousel-indicators">
                            @foreach($attachment_images as $key => $ai)
                                <li data-app-prevent-settings="" data-target="#attachments" class=" active" data-slide-to="{{ $key }}"></li>
                            @endforeach
                        </ol>
                        <div class="carousel-inner product-attachment" role="listbox">
                            @foreach($attachment_images as $key => $ai)
                                <div class="carousel-item slider-fullscreen-image @if($key == 0) active @endif" data-bg-video-slide="true" 
                                style="background-image: url('{{ '../storage/'. $ai }}');">
                                </div>
                            @endforeach
                        </div>
                        <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#attachments">
                            <span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span>
                        </a>
                        <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#attachments">
                            <span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </section>
            @endif
            @if(isset($product->left_specification))
            <section class="mbr-section article content3 cid-rillRmnV28 container collapse" id="specifications">
                <h2 class="align-center">Specifications</h2><hr>
                <!-- <div class="container"> -->
                    <div class="media-container-row">
                        <div class="row col-12 col-md-12">
                            <div class="section-text col-12 mbr-fonts-style align-right col-md-6 display-5">
                            <!-- <p>Machine dimension<br>
                                Machine weight<br>
                                Printing area<br>
                                Printing temperature<br>
                                Printing speed<br>
                                </p> -->
                                <p>{!! $product->left_specification !!}</p>
                            </div>
                            <div class="col-12 section-text mbr-fonts-style align-left display-5 col-md-6">
                            <!-- <p>Printing pressure<br>
                                Printing output<br>
                                Electricity requirement <br>
                                Electricity consumption<br>
                            </p> -->
                            <p>{!! $product->right_specification !!}</p>
                            </div>
                            
                        </div>
                    </div>
                <!-- </div> -->
            </section>
            @endif
        </div>
        <section class="container-fluid product-links">
            <div class="row">
                @if(count(json_decode($product->gallery_images)) > 0)
                <div class="col-lg-3 col-sm-3 col-md-3 item">
                    <a href="#gallery" id="gallery-link" data-toggle="collapse" data-target="#gallery">
                    <div class="icons">
                        <img src="{{ asset('images/gallery.png') }}">
                        <span class="text">Gallery</span>
                    </div>
                    </a>
                </div>
                @endif
                @if(isset($product->video_url))
                <div class="col-lg-3 col-md-3 item">
                    <a href="#video"  id="video-link" data-toggle="collapse" data-target="#video">
                    <div class="icons">
                        <img src="{{ asset('images/video.png') }}">
                        <span class="text">Video</span>
                    </div>
                    </a>
                </div>
                @endif
                @if(count(json_decode($product->attachment_images)) > 0)
                <div class="col-lg-3 col-md-3 item">
                    <a href="#attachments"  id="attachment-link" data-toggle="collapse">
                    <div class="icons">
                        <img src="{{ asset('images/attachment.png') }}">
                        <span class="text">Attachment</span>
                    </div>
                    </a>
                </div>
                @endif
                @if(isset($product->left_specification))
                <div class="col-lg-3 col-md-3 item">
                    <a href="#specifications"  id="specification-link" data-toggle="collapse" data-target="#specifications">
                    <div class="icons">
                        <img src="{{ asset('images/specification.png') }}">
                        <span class="text">Specification</span>
                    </div>
                    </a>
                </div>
                @endif
            </div>
        </section>
    </div>
    <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="mbr-slider modal fade carousel slide"  tabindex="-1" data-keyboard="true" data-interval="false">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img id="image-gallery-image" class="img-responsive col-md-12 carousel-item active" src="">

                    <!-- <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#prev"  id="show-previous-image"><span class="mbri-left mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
                    <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#next" id="show-next-image"><span class="mbri-right mbr-iconfont" aria-hidden="true"></span><span class="sr-only">Next</span></a> -->

                    <a data-app-prevent-settings="" class="carousel-control carousel-control-prev prev-button" role="button" data-slide="prev" href="#prev" id="show-previous-image">
                        <span aria-hidden="true" class="mbri-left mbr-iconfont"></span><span class="sr-only">Previous</span>
                    </a>
                    <a data-app-prevent-settings="" class="carousel-control carousel-control-next next-button" role="button" data-slide="next" href="#next" id="show-next-image">
                        <span aria-hidden="true" class="mbri-right mbr-iconfont"></span><span class="sr-only">Next</span>
                    </a>

                    
                </div>
            </div>
        </div>
    </div>
    @endif
@endsection

@section('js')
    <script type="text/javascript">
        $(function(){
            var $myGroup = $('#myGroup');
            $myGroup.on('show.bs.collapse','.collapse', function(element) {
                var target = element.target.id;
                switch(target){
                    case 'gallery':
                    $myGroup.find('#video').collapse('hide');
                    $myGroup.find('#specifications').collapse('hide');
                    $myGroup.find('#attachments').collapse('hide');
                    break;
                    case 'video':
                    $myGroup.find('#gallery').collapse('hide');
                    $myGroup.find('#specifications').collapse('hide');
                    $myGroup.find('#attachments').collapse('hide');
                    break;
                    case 'specifications':
                    $myGroup.find('#video').collapse('hide');
                    $myGroup.find('#gallery').collapse('hide');
                    $myGroup.find('#attachments').collapse('hide');
                    break;
                    case 'attachments':
                    $myGroup.find('#video').collapse('hide');
                    $myGroup.find('#specifications').collapse('hide');
                    $myGroup.find('#gallery').collapse('hide');
                    break;
                    default:
                    $myGroup.find('#gallery').collapse('hide');
                    $myGroup.find('#video').collapse('hide');
                    $myGroup.find('#specifications').collapse('hide');
                    $myGroup.find('#gallery').collapse('hide');
                    break;
                }
            });

            loadGallery(true, 'a.thumbnail');
        });

        $(document).keydown(function (e) {
            switch (e.which) {
                case 37: // left
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-previous-image').is(":visible")) {
                    $('#show-previous-image')
                        .click();
                    }
                    break;

                case 39: // right
                    if ((modalId.data('bs.modal') || {})._isShown && $('#show-next-image').is(":visible")) {
                    $('#show-next-image')
                        .click();
                    }
                    break;

                default:
                    return; // exit this handler for other keys
            }
            e.preventDefault(); // prevent the default action (scroll / move caret)
        });

        //This function disables buttons when needed
        function disableButtons(counter_max, counter_current) {
            $('#show-previous-image, #show-next-image')
                .show();
            if (counter_max === counter_current) {
                $('#show-next-image')
                .hide();
            } else if (counter_current === 1) {
                $('#show-previous-image')
                .hide();
            }
        }

        /**
        *
        * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
        * @param setClickAttr  Sets the attribute for the click handler.
        */

        function loadGallery(setIDs, setClickAttr) {
            let current_image,
                selector,
                counter = 0;

            $('#show-next-image, #show-previous-image')
                .click(function () {
                if ($(this)
                    .attr('id') === 'show-previous-image') {
                    current_image--;
                } else {
                    current_image++;
                }

                selector = $('[data-image-id="' + current_image + '"]');
                updateGallery(selector);
                });

            function updateGallery(selector) {
                let $sel = selector;
                current_image = $sel.data('image-id');
                $('#image-gallery-title')
                .text($sel.data('title'));
                $('#image-gallery-image')
                .attr('src', $sel.data('image'));
                disableButtons(counter, $sel.data('image-id'));
            }

            if (setIDs == true) {
                $('[data-image-id]')
                .each(function () {
                    counter++;
                    $(this)
                    .attr('data-image-id', counter);
                });
            }
            $(setClickAttr)
                .on('click', function () {
                updateGallery($(this));
            });
        }
  </script>
@endsection