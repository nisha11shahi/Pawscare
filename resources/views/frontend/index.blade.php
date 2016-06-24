@extends('includes.header')


@section('content')

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            
            <div class="item active">
                <div class="fill">
                    <img src="{{asset('/assets/images/first.jpg')}}">
                </div>
                <div class="carousel-caption">
                    <h2>Street Dogs of Kathmandu</h2>
                </div>
            </div>

            <div class="item">
                <div class="fill">
                    <img src="{{asset('/assets/images/02.jpg')}}">
                </div>
                <div class="carousel-caption">
                    <h2>Wandering cattles Kathmandu's streets</h2>
                </div>
            </div>

            <div class="item">
                <div class="fill">
                    <img src="{{asset('/assets/images/03.jpg')}}">
                </div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>

            <div class="item">
                <div class="fill">
                    <img src="{{asset('/assets/images/04.jpg')}}">
                </div>
                <div class="carousel-caption">
                    <h2>Caption 4</h2>
                </div>
            </div>

            <div class="item">
                <div class="fill">
                    <img src="{{asset('/assets/images/05.jpg')}}">
                </div>
                <div class="carousel-caption">
                    <h2>Caption 5</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Emergency Form -->
    <div class="row reportform">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <div class="jumbotron">
                            <h2>REPORT EMERGENCY</h2> <hr>
                            <form role="form" method="POST" action="demo_form.asp">
                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Name</label>
                                    <input type="text" class="form-control" id="postTitle" aria-describedby="helpBlock2" name="title">
                                </div>

                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Phone Number</label>
                                    <input type="text" class="form-control" id="postTitle" aria-describedby="helpBlock2" name="title">
                                </div>

                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Description of the case</label>
                                    <textarea class="form-control" rows="5" id="postBody" name="postbody"></textarea> 
                                </div>

                                <div class="form-group ">
                                    <input type="file" name="pic" accept="image/*">
                                </div>
                            </form>

                            <p><a class="btn btn-primary btn-lg" href="#" role="button">Send</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Animals For Adoption</h2> 

            </div>
            <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt1.jpg')}}" alt="">
                        <div class="caption">
                            <p>Anyone willing to adopt this puppy?</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt2.jpg')}}" alt="">
                        <div class="caption">
                            <p>2 month old kale is looking for a loving home.</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt3.jpg')}}" alt="">
                        <div class="caption">
                            <p>Looking for a home for this little one.</p>
                            <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="adoptbutton">
                <a class="btn btn-primary" href="{{url('/adopt')}}">View more</a>
                 </div>

        </div>
        </div>
        <!-- /.row -->
@endsection
       


        <!-- Footer -->
@extends('includes.footer')
        