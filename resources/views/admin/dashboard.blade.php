@extends('includes.adminlayout')

@section('content')

        <div id="page-wrapper" class="reportform">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                    <div>Emergency Report</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{url('/viewemergencymessage')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                
            
        
            </div>
               
            </div>
            <!-- /#wrapper -->

            <!-- jQuery -->
            <script src="{{asset('/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src="{{asset('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src="{{asset('/assets/bower_components/metisMenu/dist/metisMenu.min.js')}}"></script>

            <!-- Morris Charts JavaScript -->
            <script src="{{asset('/assets/bower_components/raphael/raphael-min.js')}}"></script>
            <script src="{{asset('/assets/bower_components/morrisjs/morris.min.js')}}"></script>
            <script src="{{asset('/assets/js/morris-data.js')}}"></script>

            <!-- Custom Theme JavaScript -->
            <script src="{{asset('/assets/dist/js/sb-admin-2.js')}}"></script>

</body>

</html>
@endsection