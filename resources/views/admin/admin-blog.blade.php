@extends('includes.adminlayout')

@section('content')

<div id="page-wrapper" class="reportform">
<div class="row">
    <div class="col-md-10 col-md-offset-1">
      <div class="panel panel-default">
      
        <div class="panel-heading">Add new Post in Blog</div>

        <div class="panel-body">
          
          <form role="form" method="POST" action="{{url('/postblog')}}" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="author_id" value="{{Auth::user()->id}}">
            <div class="form-group ">

              <label class="control-label" for="inputSuccess1">Title of the Post</label>
              <input type="text" class="form-control" id="postTitle" aria-describedby="helpBlock2" name="title" value="{{old('title') }}">
              
            </div>

            <div class="form-group ">
              <label class="control-label" for="inputSuccess1">Body of the Post</label>
              <textarea class="form-control" rows="5" id="postBody" name="postBody" value="{{old('postBody') }}"></textarea>
              
              </div

              <div class="form-group ">
                <label class="control-label" for="inputSuccess1">Body of the Post</label>
                <input type="file" class="form-control" rows="5" id="image" name="image" value="{{old('image') }}"></textarea>
                
              </div>
              

              <button type="submit" class="btn btn-success">Submit</button>

            </form>

            
            
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection