@extends('includes.header')


@section('content')

<div class="container">

            <!-- Page Heading/Breadcrumbs -->


            <!-- Team Members -->
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header">Animals for Adoption</h2>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt1.jpg')}}" alt="">
                        <div class="caption">
                            <h3>KALU<br> 
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt2.jpg')}}" alt="">
                        <div class="caption">
                            <h3>Bruno<br>  
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt3.jpg')}}" alt="">
                        <div class="caption">
                            <h3>Khaire<br>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt4.jpg')}}" alt="">
                        <div class="caption">
                            <h3>John Smith<br>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt5.jpg')}}" alt="">
                        <div class="caption">
                            <h3>John Smith<br>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt6.jpg')}}" alt="">
                        <div class="caption">
                            <h3>KHAIRE<br>
                            </h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
            </div>

    </div>
@extends('includes.footer')