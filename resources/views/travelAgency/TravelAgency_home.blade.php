<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>UP TO TRAIN</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

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
                <a class="navbar-brand" href="index.html">UP TO TRAIN</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">

                  <li>
                        <a href="TravelAgency_home.html">H0ME</a>
                    </li>
                    <li>
                        <a href="trip_travelAgency.html">TRIP</a>
                    </li>
                    <li>
                        <a href="comment_TRIP.html">COMMENT</a>
                    </li>
                    <li>
                        <a href="#">  LOG OUT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Features Section -->
    <div class="container">
        <div class="col-lg-12">
            <h2 class="page-header">HELLO {{$trips[0]->agency_name_en}} !!!!</h2>
        </div>
        <div class="col-md-6">

           
          {{$trips[0]->agency_description}}
        </div>

    </div>
    <!-- /.row -->

    <!--TRIP STATUS-->


    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    TRIP
                </h1>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-plus"></i>ADD TRIP </h4>
                    </div>
                    <div class="panel-body">

                        <a href="/addtrip">
                            <img class="img-responsive img-portfolio img-hover " src="pic/ADD1.png" alt="">
                        </a>




                    </div>
                </div>
            </div>
             <div class="container">

 @foreach ($trips as $trip)
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i>{{$trip->trips_name}}</h4>
                    </div>

                    <div class="panel-body">

                        <a href="portfolio-item.html">
                            <img class="img-responsive img-portfolio img-hover" src="{{ asset( $trip->trip_pic ) }}" >
                        </a>
                        <div class="progress">
                            <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span> 40% BOOKING
                        </div>

                    </div>
                    <!-- Table -->
                    <table class="table">
                        <tr>
                            <td>{{$trip->start_date}} - {{$trip->departure_date}}</td>
                            
                        </tr>
                        <tr>
                            <td>NUMBER OF ADULT</td>
                            <td>100</td>
                        </tr>
                        <tr>
                            <td>TOTAL</td>
                            <td>100</td>

                        </tr>
                    </table>


                </div>
            </div>
           
        </div>
         @endforeach
</div>


        <!-- Marketing Icons Section -->








    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    COMMENTION
                </h1>
            </div>


            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-pencil"></i>TRIP </h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            <div class="alert alert-success" role="alert">
                                Well done! You have n new COMMENTION .
                            </div>
                        </p>
                        <a href="comment_TRIP.html" class="btn btn-default">SHOW NOW</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="glyphicon glyphicon-pencil"></i>COMPANY </h4>
                    </div>
                    <div class="panel-body">
                        <p>
                            <div class="alert alert-success" role="alert">
                                Well done! You have n new COMMENTION .
                            </div>
                        </p>
                        <a href="comment_TRIP.html" class="btn btn-default">SHOW NOW</a>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->





        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
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