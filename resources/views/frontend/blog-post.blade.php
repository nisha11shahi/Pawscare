@extends('includes.header')


@section('content')

<div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Blog Post</h1> 
        </div>
    </div>
    <!-- /.row -->

    <!-- Content Row -->
    <div class="row">

        <!-- Blog Post Content Column -->
        <div class="col-lg-8">

            <!-- Date/Time -->
            <p><i class="fa fa-clock-o"></i> Posted on August 24, 2013 at 9:00 PM</p>

            <hr>

            <!-- Preview Image -->
            <img class="img-responsive" src="{{asset('/assets/images/blog.jpg')}}" alt="">

            <hr>

            <!-- Post Content -->
            <p class="lead">In a victory for activists, Nepalese temple authorities have announced they will end a centuries-old Hindu tradition of mass animal slaughter that attracts hundreds of thousands of worshippers.

The festival, held once every five years, sees hordes of devotees from Nepal and India flock to a temple in the Himalayan nation’s southern plains to sacrifice thousands of animals in the hope of appeasing the Hindu goddess of power, Gadhimai.

“We have decided to completely stop the practice of animal sacrifice,” said Motilal Prasad, secretary of the Gadhimai Temple Trust, which organises the celebrations.

“I realised that animals are so much like us – they have the same organs as us … and feel the same pain we do,” Prasad told AFP.

The practice of ritual sacrifice has a long history in Nepal, with devotees offering goats and buffaloes to gods during major festivals in the hope of finding health and happiness.</p>
            
        </div>

        

    </div>

</div>
<!-- /.row -->

<hr>
@extends('includes.footer')