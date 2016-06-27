@extends('includes.header')


@section('content')

<div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><h2>Animals For adoption
                    <small></small>
                </h1>
            </div>
        </div>
        
        @foreach($adopts as $key=>$adopt)
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="{{asset('/assets/uploads/'.$adopt->image)}}" alt="image1" class="img-thumbnail">
                <div class="caption">
                    <h3>{{$adopt->name}}<br> </h3>
                    <p>{{$adopt->description}}</p>
                    <a class="btn btn-primary" href="{{url('/adoptform')}}">ADOPT</a>

                </div>
            </div>  
       
    </div>
     @endforeach 
</div>
@extends('includes.footer')