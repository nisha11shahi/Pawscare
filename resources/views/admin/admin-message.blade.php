@extends('includes.adminlayout')

@section('content')

<div id="page-wrapper" class="reportform">
<div class="panel-body">
    <div class="table-responsive">
        <table class="table table-striped table-bordered" id="mydata">
            <thead>
                <tr>
                    <th>ID </th>
                    <th>Name </th>
                    <th>Number </th>
                    <th>Email </th>
                    <th>Message </th>

                </tr>
            </thead>
            <tbody>

                @foreach($contacts as $key=>$contact)
                <tr> 
                    <td>{{$contact->id}}</td>
          			<td>{{$contact->name}}</td>
          			<td>{{$contact->number}}</td>
          			<td>{{$contact->email}}</td>
          			<td>{{$contact->messagebody}}</td>
                    </tr>

                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection