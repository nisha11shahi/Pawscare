
@extends('includes.header')


@section('content')
<div class="container">

    <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="font-size: 30px">Blogs
                    <small></small>
                </h1>
            </div>
        </div>
        
                <div class="main-wrap">
                    @foreach($blogs as $key=>$blog)
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-4">
                                
                                <img src="{{asset('/assets/uploads/'.$blog->image)}}" alt="image1" class="img-thumbnail">
                            </div>
                            
                            <div class="col-sm-8">
                                <h4>{{$blog->title}}</h4>
                                <p><span class="glyphicon glyphicon-time"></span> Posted on {{$blog->created_at->toDateString()}} at  {{$blog->created_at->toTimeString()}}</p>
                                <p>{{$blog->body}}
                                </p>
                                <a href="{{url('/singleblog')}}" class="btn btn-primary btn-sm">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    <div class="pagination">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item"><a class="page-link" href="#">5</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="sidebar">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4>Blog search</h4>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search for...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">Go!</button>
                                </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                    
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
    


@extends('includes.footer')