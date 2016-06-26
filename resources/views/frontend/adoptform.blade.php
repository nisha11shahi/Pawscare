@extends('includes.header')


@section('content')
<div class="row ">
  <div class="col-lg-12">
    <h2 class="page-header">Adoption Form</h2>
  </div>
  <hr>

  <div class="col-md-10 col-md-offset-1">

    <div class="panel panel-default">

      <div class="panel-body">


        <form role="form" id="arooly_cform" method="POST" action="{{url('/submitadoptform')}}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="form-group">
            <label for="inputName">Name*</label>
            <div class="input-group Name">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-user"></i>
              </span>
              <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter Name">
            </div>
          </div>

          <div class="form-group">
            <label for="inputPhone">Phone Number*</label>
            <div class="input-group phone">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-earphone"></i>
              </span>
              <input type="phone" class="form-control" id="inputPhone" name="phone" placeholder="Enter Phone">
            </div>
          </div>

          <div class="form-group">
            <label for="inputEmail">Email address</label>
            <div class="input-group email">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-envelope"></i>
              </span>
              <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputddress">Address</label>
            <div class="input-group address">
              <span class="input-group-addon">
                <i class="glyphicon glyphicon-home"></i>
              </span>
              <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Enter Address">
            </div>
          </div>
          <div class="form-group ">
            <label class="control-label" for="inputSuccess1">Why do you want to adopt?</label>
            <textarea class="form-control" rows="5" id="inputwhy" name="whyadopt"></textarea> 
          </div>


        </div>


        <button type="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>
  </div>
</div>

@extends('includes.footer')