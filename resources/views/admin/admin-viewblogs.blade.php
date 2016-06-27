@extends('includes.adminlayout')

@section('content')

<div id="page-wrapper" class="reportform">
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="mydata">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title </th>
                    <th>Body</th>
                    <th>Image</th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>

                @foreach($blogs as $key=>$blog)
                <tr> 
                    <td>{{$blog->id}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->body}}</td>
                    <td><img src= "{{asset('/assets/uploads/'.$blog->image)}}" height=164px;></td>
                    <td>

                        <a href="{{URL::route('blogs.delete',$blog->id)}}"
                                            class="btn btn-danger"> Delete </a>

                        </td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection