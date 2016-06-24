<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>Paws-Care</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">
      <link href="css/mystyle.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Paws-Care</a>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="adopt.html">Adopt</a>
                    </li>
                    <li>
                        <a href="survey.html">Survey</a>
                    </li>
                    <li>
                        <a href="lostandfound.html">Lost & Found</a>
                    </li>
                    
                    <li>
                        <a href="blog.html">Blog</a>
                        
                    </li>

                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <button><a class="navbar-brand" href="index.html">Donate Us</a></button>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
            <li data-target="#myCarousel" data-slide-to="4"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            
            <div class="item active">
                <div class="fill">
                    <img src="images/01.jpg">
                </div>
                <div class="carousel-caption">
                    <h2>Street Dogs of Kathmandu</h2>
                </div>
            </div>

            <div class="item">
                <div class="fill">
                    <img src="images/02.jpg">
                </div>
                <div class="carousel-caption">
                    <h2>Wandering cattles Kathmandu's streets</h2>
                </div>
            </div>

            <div class="item">
                <div class="fill">
                    <img src="images/03.jpg">
                </div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>

            <div class="item">
                <div class="fill">
                    <img src="images/04.jpg">
                </div>
                <div class="carousel-caption">
                    <h2>Caption 4</h2>
                </div>
            </div>

            <div class="item">
                <div class="fill">
                    <img src="images/05.jpg">
                </div>
                <div class="carousel-caption">
                    <h2>Caption 5</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Emergency Form -->
    <div class="row reportform">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    </div>
                    <div class="panel-body">
                        <div class="jumbotron">
                            <h2>REPORT EMERGENCY</h2>
                            <form role="form" method="POST" action="demo_form.asp">
                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Name</label>
                                    <input type="text" class="form-control" id="postTitle" aria-describedby="helpBlock2" name="title">
                                </div>

                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Phone Number</label>
                                    <input type="text" class="form-control" id="postTitle" aria-describedby="helpBlock2" name="title">
                                </div>

                                <div class="form-group ">
                                    <label class="control-label" for="inputSuccess1">Description of the case</label>
                                    <textarea class="form-control" rows="5" id="postBody" name="postbody"></textarea> 
                                </div>

                                <div class="form-group ">
                                    <input type="file" name="pic" accept="image/*">
                                </div>
                            </form>

                            <p><a class="btn btn-primary btn-lg" href="#" role="button">Send</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio Section -->
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Animals For Adoption</h2>

            </div>
            <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/adopt1.jpg" alt="">
                        <div class="caption">
                            <p>Anyone willing to adopt this puppy?</p>
                            <a class="btn btn-primary" href="adoptform.html">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/adopt2.jpg" alt="">
                        <div class="caption">
                            <p>2 month old kale is looking for a loving home.</p>
                            <a class="btn btn-primary" href="adoptform.html">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="thumbnail">
                        <img class="img-responsive" src="images/adopt3.jpg" alt="">
                        <div class="caption">
                            <p>Looking for a home for this little one.</p>
                            <a class="btn btn-primary" href="adoptform.html">ADOPT</a>
                        </div>
                    </div>
                </div>
                <div class="adoptbutton">
                <a class="btn btn-primary" href="adopt.html">View more</a>
                 </div>

        </div>
        </div>
        <!-- /.row -->

<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Footer -->
        <footer>
            <!-- <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div> -->
            <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
            <div class="main">
        
            <div class="footer-grids">
                <div class="footer one">
                    <h3>More About Company</h3>
                    <p> Nemo enim ipsam voluptatem quia
                    voluptas sit aspernatur aut odit aut fugit, 
                    sed quia consequuntur magni dolores eos qui 
                    ratione voluptatem sequi nesciunt.</p>
                    <p class="adam">- Patrick Victoria, CEO</p>
                    <div class="clear"></div>
                </div>
                <div class="footer two">
                    <h3>Keep Connected</h3>
                    <ul>
                        <li><a class="fb" href="#"><i></i>Like us on Facebook</a></li>
                        <li><a class="fb1" href="#"><i></i>Follow us on Twitter</a></li>
                        <li><a class="fb2" href="#"><i></i>Add us on Google Plus</a></li>
                    </ul>
                </div>
                <div class="footer three">
                    <h3>Contact Information</h3>
                    <ul>
                        <li>The company name <span>Lorem ipsum dolor,</span>Glasglow Dr 40 Fe 72.  </li>
                        <li>1234567890  </li>
                        <li><a href="mailto:info@example.com">contact@example.com</a> </li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
            <div class="copy-right-grids">
                <div class="copy-left">
                        <p class="footer-gd">© 2016 Paws-Care. All Rights Reserved </p>
                </div>
                
                <div class="clear"></div>
            </div>
    
    </div>      
</body>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>

</body>

</html>
