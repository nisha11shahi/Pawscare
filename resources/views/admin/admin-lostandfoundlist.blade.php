@extends('includes.adminlayout')

@section('content')

<div id="page-wrapper" class="reportform">
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="mydata">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Image </th>
                    <th>Description </th>
                    <th>Action </th>
                </tr>
            </thead>
            <tbody>

                @foreach($lostandfounds as $key=>$lostandfound)
                <tr> 
                    <td>{{$lostandfound->id}}</td>
                    <td><img src= "{{asset('/assets/uploads/'.$lostandfound->image)}}" height=164px;></td>
                    <td>{{$lostandfound->description}}</td>
                    <td>

                        <a href="{{URL::route('lostandfounds.delete',$lostandfound->id)}}"
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