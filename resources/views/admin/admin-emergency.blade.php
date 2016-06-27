@extends('includes.adminlayout')

@section('content')

<div id="page-wrapper" class="reportform">
<div class="panel-body">
	<h2>EMERGENCY MESSAGE LIST</h2><hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="mydata">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Name </th>
                    <th>Contact </th>
                    <th>Description </th>
                    <th>Image </th>
                    <th>Email </th>
                   
                </tr>
            </thead>
            <tbody>

                @foreach($emergencies as $key=>$emergency)
                <tr> 
                    <td>{{$emergency->id}}</td>
                    <td>{{$emergency->name}}</td>
                    <td>{{$emergency->contact}}</td>
                    <td>{{$emergency->description}}</td>
                    <td><img src= "{{asset('/assets/uploads/'.$emergency->image)}}" height=164px;></td>
                 <td>{{$emergency->email}}</td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection