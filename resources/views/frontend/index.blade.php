@extends('includes.header')


@section('content')

<!-- Header Carousel -->

<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      <div class="item active">
        <img src="{{asset('/assets/images/slider.jpg')}}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>Fearful eyes!</h3>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('/assets/images/slider2.jpg')}}" alt="Chania" width="460" height="345">
        <div class="carousel-caption">
          <h3>An injured stray dog!</h3>
        </div>
      </div>
    
      <div class="item">
        <img src="{{asset('/assets/images/03.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>A stray dog suffering from Mange</h3>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('/assets/images/slider1.jpg')}}" width="460" height="345">
        <div class="carousel-caption">
          <h3>Stray calves</h3>
        </div>
      </div>

      <div class="item">
        <img src="{{asset('/assets/images/slide2.jpg')}}" alt="Flower" width="460" height="345">
        <div class="carousel-caption">
          <h3></h3>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>




    <!-- Emergency Form -->
    <div class="row reportform">
        <center><h1 style="font-size: 30px">REPORT EMERGENCY!!</h1></center><hr>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    @if(Session::has('flash_message'))
                    <div class="alert alert-danger"><em> {!! session('flash_message') !!}</em></div>
                        @endif

                    <div class="panel-body">
                        <div class="jumbotron">
                            
                            <form role="form" method="POST" action="{{url('/reportemergency')}}" 
                            enctype="multipart/form-data">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Name</label>
                                    <input type="text" class="form-control" id="postTitle" aria-describedby="helpBlock2" name="name">
                                </div>

                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Phone Number</label>
                                    <input type="text" class="form-control" id="postTitle" aria-describedby="helpBlock2" name="contact">
                                </div>

                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Description of the case <p><small style="font-size: 12px">*Mention the location detail</small></p></label>
                                    <textarea class="form-control" rows="5" id="postBody" name="description"></textarea> 
                                </div>

                                <div class="form-group ">
                                    <input type="file" name="image1" id="image1">
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Email</label>
                                    <input type="text" class="form-control" id="postTitle" aria-describedby="helpBlock2" name="email">
                                </div>
                                <p><button type="submit" class="btn btn-primary">Send</button></p>
                            </form>       
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="font-size: 30px">Animals For Adoption</h2> 

            </div>
            <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt1.jpg')}}" alt="">
                        <div class="caption">
                            <p>Anyone willing to adopt this puppy?</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt2.jpg')}}" alt="">
                        <div class="caption">
                            <p>2 month old kale is looking for a loving home.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="{{asset('/assets/images/adopt3.jpg')}}" alt="">
                        <div class="caption">
                            <p>Looking for a home for this little one.</p>
                            
                        </div>
                    </div>
                </div>
                <div class="adoptbutton">
                <a class="btn btn-primary" href="{{url('/adopt')}}">View more</a>
                 </div>

        </div>
        </div>
        <!-- /.row -->

<!-- jQuery -->
    <script src="{{asset('assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

@endsection
       
        <!-- Footer -->
@extends('includes.footer')
        