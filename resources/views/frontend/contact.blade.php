@extends('includes.header')


@section('content')
<div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="font-size: 30px">Contact
                    <small></small>
                </h1>

            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Map Column -->
            <div class="col-md-8">
                <!-- Embedded Google Map -->
                
                <div style="width:100% ;overflow:hidden; height:400px; max-width:100%;">
                    <div id="my-map-display" style="height:100%; width:100%;max-width:100%;">
                        <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Kathmandu,+Central+Region,+Nepal&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU">
                        </iframe>
                    </div>
                    <a class="embedded-map-html" href="https://www.interserver-coupons.com" id="make-map-information">here</a><style>#my-map-display .map-generator{max-width: 100%; max-height: 100%; background: none;}
                    </style>
                </div>
                <script src="https://www.interserver-coupons.com/google-maps-authorization.js?id=f26e7c75-5b87-caff-97fd-221357521eb7&c=embedded-map-html&u=1467094313" defer="defer" async="async"></script>
            </div>
            
        </div>
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h2 style="padding-top: 20px;font-size: 30px">Contact Us</h2><hr>
                 @if(Session::has('flash_message'))
                    <div class="alert alert-danger"><em> {!! session('flash_message') !!}</em></div>
                        @endif
                <form name="sentMessage" method="POST" action="{{url('/submitcontactform')}}" id="contactForm" class="contactForm" novalidate>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="number" id="phone" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="messagebody" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>

        </div>
</div>
@extends('includes.footer')