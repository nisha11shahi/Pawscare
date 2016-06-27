@extends('includes.adminlayout')

@section('content')

<div id="page-wrapper" class="reportform">
<div class="panel-body">
    <h2>ANIMALS FOR ADOPTION</h2><hr>
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

                @foreach($adoptions as $key=>$adoption)
                <tr> 
                    <td>{{$adoption->id}}</td>
                    <td><img src= "{{asset('/assets/uploads/'.$adoption->image)}}" height=164px;></td>
                    <td>{{$adoption->description}}</td>
                    <td>

                        <a href="{{URL::route('adoptions.delete',$adoption->id)}}"
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