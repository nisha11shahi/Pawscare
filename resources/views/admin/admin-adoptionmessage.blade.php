@extends('includes.adminlayout')

@section('content')
<div id="page-wrapper" class="reportform">
<div class="panel-body">
    <h2>ADOPTION MESSAGES REQUEST LIST</h2><hr>
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="mydata">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Name </th>
                    <th>Phone </th>
                    <th>Email </th>
                    <th>Address </th>
                    <th>Why do you want to adopt? </th>

                </tr>
            </thead>
            <tbody>

                @foreach($requestadopts as $key=>$requestadopt)
                <tr> 
                    <td>{{$requestadopt->id}}</td>
          			<td>{{$requestadopt->name}}</td>
          			<td>{{$requestadopt->phone}}</td>
          			<td>{{$requestadopt->email}}</td>
                    <td>{{$requestadopt->address}}</td>
          			<td>{{$requestadopt->whyadopt}}</td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection