@extends('includes.header')


@section('content')

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="font-size: 30px">Lost and Found Animals</h1>
            </div>
        </div>
        
        @foreach($lostandfounds as $key=>$lostandfound)
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="{{asset('/assets/uploads/'.$lostandfound->image)}}" alt="image1" class="img-thumbnail">
                <div class="caption">
                    <p>{{$lostandfound->description}}</p>
                    <a class="btn btn-primary" href="{{url('/contact')}}">Enquiry</a>

                </div>
            </div>  
       
    </div>
     @endforeach 
</div>

@extends('includes.footer')