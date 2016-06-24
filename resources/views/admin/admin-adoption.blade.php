@extends('includes.adminlayout')

@section('content')
<div id="page-wrapper" class="reportform">

<h2 style="padding-top: 30px">Add Animals for adoption</h2>
<a href="{{url('/viewalladopt')}}"><button type="submit" class="btn btn-primary">View All</button></a>
    <br/>
    <hr>
    <form role="form" method="POST" action="{{url('/submitadoptionform')}}" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input type="hidden" name="author_id" value="{{Auth::user()->id}}">
      <div class="form-group">
          <label class="control-label" for="inputSuccess1">Name of the animal</label>
          <input type="text" class="form-control" rows="5" id="name" name="name" value="{{old('image') }}">  
      </div>
      <div class="form-group">
          <label class="control-label" for="inputSuccess1">Image</label>
          <input type="file" class="form-control" rows="5" id="image" name="image" value="{{old('image') }}">  
      </div>
      <div class="form-group">
        <label class="control-label" for="inputSuccess1">Post Description</label>
        <textarea class="form-control" rows="5" id="postdesc" name="postdesc" value="{{old('postdesc') }}"></textarea> 
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
</div>
@endsection