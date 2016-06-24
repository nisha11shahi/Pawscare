@extends('includes.header')


@section('content')
 <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Blogs
                    <small></small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-camera fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="{{asset('/assets/images/blog1.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">The City Wanderer</a></h3>
                <br>
                <p>Everymorning I wake up in a fresh mood, makeup myself, and leave home early following my daily schedule. While on my way, I see unnumbered wanderers of our town; I find some lying on dirt, some searching for food, and some eating garbage thrown by us. It is really heart breaking to see them in such a poor condition. You must have made a guess by now, yes; I am talking about the dogs in the street of our city. I am not an animal right activist, and I am aware that while reading this, some of us may think that in a country where humanity is a topic of amusement, who cares about “a dog?”</p>
                <a class="btn btn-primary" href="{{url('/singlepost')}}">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-film fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="{{asset('/assets/images/blog2.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">Sneha's Care</a></h3>
                <br>
                <p>Welcome pet lovers, I am sneha and I love animals. Thank you for dropping by my website. Most of the Dogs and Animals you see in this websites are rescued from the streets and been taken care under my personal guidance. If you have any questions and if you are also pet lover, you can always follow me on my facebook and get updates on what I have been doing in terms of taking care of neglected and rejected pets.<br>Thank you again, Love " Sneha"</p>
                <a class="btn btn-primary" href="{{url('/singlepost')}}">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Blog Post Row -->
        <div class="row">
            <div class="col-md-1 text-center">
                <p><i class="fa fa-file-text fa-4x"></i>
                </p>
                <p>June 17, 2014</p>
            </div>
            <div class="col-md-5">
                <a href="blog-post.html">
                    <img class="img-responsive img-hover" src="{{asset('/assets/images/blog3.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-md-6">
                <h3><a href="blog-post.html">Vaccinations and Booster Shots: Needed or Not?</a></h3>
                <br>
                <p>Do you have a new puppy, and it's time to take him to the vet for his shots? Or do you have an adult dog and it's time for booster shots?The right vaccinations will help protect your dog's health – but unnecessary vaccinations can DAMAGE your dog's health. Let's talk about this.</p>
                <a class="btn btn-primary" href="{{url('/singlepost')}}">Read More <i class="fa fa-angle-right"></i></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Pager -->
        <div class="row">
            <ul class="pager">
                <li class="previous"><a href="#">&larr; Older</a>
                </li>
                <li class="next"><a href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        <!-- /.row -->

       
</div>

@extends('includes.footer')