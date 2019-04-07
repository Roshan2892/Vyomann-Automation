@extends('voyager::master')
@section('content')
    <div class="page-content edit-add container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="panel panel-bordered">
                    <!-- form start -->
                    <form role="form"
                            class="form-edit-add"
                            action="{{ route('voyager.reply-contact') }}"
                            method="POST" ">
                        <!-- CSRF TOKEN -->
                        {{ csrf_field() }}

                        <div class="panel-body">

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group  col-md-12">
                                <label for="site_contact_email">Email From</label>
                                <input type="text" class="form-control" readonly name="email_from" placeholder="Email From" value="{{ setting('site.contact-email') }}">
                            </div>

                            <div class="form-group  col-md-12">
                                <label for="name">Email To</label>
                                <input type="text" class="form-control" name="email_to" placeholder="Email To" value="{{ $contact->email }}">
                            </div>

                            <div class="form-group  col-md-12">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message">
                                </textarea>
                            </div>
                        </div><!-- panel-body -->

                        <div class="panel-footer">
                            <input type="submit" class="btn btn-primary save" value="{{ __('Reply') }}">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop