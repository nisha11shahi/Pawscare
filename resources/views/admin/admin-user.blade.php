@extends('includes.adminlayout')

@section('content')

<div id="page-wrapper" class="reportform">

<div class="panel-body">
	<div class="table-responsive">
		<table class="table table-striped table-bordered" id="mydata">
			<thead>
				<tr>
					<th>id </th>
					<th>User </th>
					<th>Email </th>
					<th>Action </th>
				</tr>
			</thead>
			<tbody>

				@foreach($users as $key=>$user)
				<tr> 
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}} </td>
					<td>

						<a href="{{URL::route('users.view',$user->id)}}"
							class="btn btn-success"> View </a>

						</td>
					</tr>

					@endforeach
					
				</tbody>
			</table>
		</div>
</div>
	</div>

@endsection