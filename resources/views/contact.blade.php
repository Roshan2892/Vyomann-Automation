@extends('layouts.master')

@section('css') @endsection
@section('title') Contact Us - @endsection
@section('content')
    <section class="mbr-section content5 cid-rilmKbDRjr mbr-parallax-background  mb-2" id="content5-1c">
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">CONTACT US<br></h2>
            </div>
        </div>
    </div>
    </section>

    <section class="mbr-section form4 cid-rilnhsBBBL" id="form4-1e">
        <div class="container">
            <div class="row">
                <div class="col-md-6 contact-div">
                    <div data-form-type="formoid">
                        <form class="block mbr-form" action="{{ route('contact-us') }}" method="post" data-form-title="Contact Form">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 multi-horizontal" data-for="name">
                                    <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="Your Name" required="" id="name-form4-1e">
                                </div>
                                <div class="col-md-6 multi-horizontal" data-for="phone">
                                    <input type="text" class="form-control input" name="phone" data-form-field="Phone" placeholder="Phone" required="" id="phone-form4-1e">
                                </div>
                                <div class="col-md-12" data-for="email">
                                    <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-1e">
                                </div>
                                <div class="col-md-12" data-for="message">
                                    <textarea class="form-control input" name="message" rows="3" data-form-field="Message" placeholder="Message" style="resize:none" id="message-form4-1e"></textarea>
                                </div>
                                <div class="input-group-btn col-md-12" style="margin-top: 10px;"><button href="" type="submit" class="btn btn-form btn-primary display-4">SEND MESSAGE</button></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">             
                    <div class="pt-5">
                    <div class="icon-contacts pt-3">
                        <p class="mbr-text align-left mbr-fonts-style display-6">
                            <i class="fas fa-mobile-alt"></i> {{ setting('site.contact-number') }}
                        </p>
                        <p class="mbr-text align-left mbr-fonts-style display-6">
                            <i class="fas fa-envelope"></i> {{ setting('site.contact-email') }}
                        </p>
                        <p class="mbr-text align-center mbr-fonts-style display-6">
                            <i class="fas fa-home"></i> B/41, Shukla Compound, Shiv Vallabh Cross Road, <br> Rawal Pada, Dahisar (E), Mumbai - 400068.
                        </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $(document).ready(function(){
            $('#phone-form4-1e').inputmask({"mask": "(999) 999-9999", "onincomplete": function(){ $(this).val('') } }); //specifying options
        });
    </script>
@endsection