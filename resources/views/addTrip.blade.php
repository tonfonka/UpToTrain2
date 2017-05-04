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
    <link href="css/addtrip.css" rel="stylesheet">
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
    <div class="container">
        <div class="row">
            <section>
                <div class="wizard">
                    <div class="wizard-inner">
                        <div class="connecting-line"></div>
                        <ul class="nav nav-tabs" role="tablist">

                            <li role="presentation" class="active">
                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                    <span class="round-tab">
                                <i class="glyphicon glyphicon-folder-open"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                    <span class="round-tab">
                                <i class="glyphicon glyphicon-pencil"></i>
                            </span>
                                </a>
                            </li>

                            <li role="presentation" class="disabled">
                                <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                    <span class="round-tab">
                                <i class="glyphicon glyphicon-ok"></i>
                            </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <form role="form">
                        <div class="tab-content">
                            <div class="tab-pane active" role="tabpanel" id="step1">
                                <div class="step1">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1">Trip Name</label>
                                            <input type="text" class="form-control" id="tripName" placeholder="Trip Name">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="exampleInputEmail1">Day(s)</label>
                                            <input type="text" class="form-control" id="tripDay" placeholder="Day(s)">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="exampleInputEmail1">Night(s)</label>
                                            <input type="text" class="form-control" id="tripNight" placeholder="Night(s)">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="exampleInputEmail1">Meal(s)</label>
                                            <input type="text" class="form-control" id="tripMeal" placeholder="Meal(s)">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <label for="exampleInputEmail1">Description</label>
                                            <input type="textarea" class="form-control" id="tripDes" placeholder="Description">
                                        </div>
                                        <div class="col-md-2">
                                            <label for="exampleInputEmail1">Province</label>
                                            <input type="text" class="form-control" id="tripPro" placeholder="Province">
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="step2">
                                <div class="step2">
                                    <div class="step_21">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>start_day</label>
                                                <input class="form-control start_day" type="date" value='' required data-validation-required-message="Please enter your ROUND TRIP">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Departure_Date :</label>
                                                <input class="form-control Departure_Date" type="date" value='' required data-validation-required-message="Please enter your ROUND TRIP">
                                                <br>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Price_Children : </label>
                                                <input type="number" class="form-control" name="Price_Children">
                                            </div>
                                            <div class="col-md-3">
                                                <label>Price_ADUIT : </label>
                                                <input type="number" class="form-control" name="Price_ADUIT" required data-validation-required-message="Please enter Price_ADUIT ">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="col-md-6">
                                                    <label>รายละเอียดทัวร์ : </label>
                                                    <br>
                                                    <label>DAY <input type="number"> :</label>
                                                </div>
                                                <div class="control-group form-group con" id='controls'>
                                                    <!--for Add Activity-->
                                                </div>
                                                <div class="control-group form-group con" id='controlss'>
                                                    <!--for Add Activity-->
                                                </div>
                                                <script type="text/javascript">
                                                    let i = 0;
                                                    let components = [];
                                                    const button =
                                                        `<label><button type="button" class="btn btn-primary" id='btn' >ADD Activity</button></label>`;
                                                    const componentTemplate = (id1) =>
                                                        `<div class="controls" id='${id1}'>
                                                            <table class="table">
                                                                <tr>
                                                                    <td>TIME</td>
                                                                    <td>LOCATION</td>
                                                                    <td>DETAILS</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="time"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="time"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                </tr>
                                                            </table>
                                                        </div>`;

                                                    const bindComponent = (components) => {
                                                        document.getElementById('controls').innerHTML = ''
                                                        components.map(component => {
                                                            document.getElementById('controls').innerHTML +=
                                                                component;
                                                        });
                                                        document.getElementById('controls').innerHTML += button;
                                                        document.getElementById('btn').addEventListener('click',
                                                            onClickHandler);
                                                    }

                                                    const onClickHandler = (e) => {
                                                        let latestComponent = document.getElementById(i - 1);
                                                        components[i - 1] =
                                                            `<div class="controls" id1='${i-1}'>
        		                                                ${latestComponent.innerHTML}
        		                                            </div>`;
                                                        const newComponent = componentTemplate(i);
                                                        components.push(newComponent);
                                                        i++;
                                                        bindComponent(components);
                                                    }

                                                    let component = componentTemplate(i);
                                                    i++;
                                                    components.push(component);
                                                    bindComponent(components);
                                                </script>
                                                <script type="text/javascript">
                                                    let i = 0;
                                                    let components = [];
                                                    const button =
                                                        `<label><button type="button" class="btn btn-primary" id='btn' >ADD Day</button></label>`;
                                                    const componentTemplate = (id2) =>
                                                        `<div class="controlss" id='${id2}'>
                                                            <div class="col-md-6">
                                                                <label>รายละเอียดทัวร์ : </label>
                                                                <br>
                                                                <label>DAY <input type="number"> :</label>
                                                            </div>
                                                            <table class="table">
                                                                <tr>
                                                                    <td>TIME</td>
                                                                    <td>LOCATION</td>
                                                                    <td>DETAILS</td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="time"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td><input class="form-control" type="time"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                    <td><input class="form-control" type="text"></td>
                                                                </tr>
                                                            </table>
                                                        </div>`;

                                                    const bindComponent = (components) => {
                                                        document.getElementById('controls').innerHTML = ''
                                                        components.map(component => {
                                                            document.getElementById('controls').innerHTML +=
                                                                component;
                                                        });
                                                        document.getElementById('controls').innerHTML += button;
                                                        document.getElementById('btn').addEventListener('click',
                                                            onClickHandler);
                                                    }

                                                    const onClickHandler = (e) => {
                                                        let latestComponent = document.getElementById(i - 1);
                                                        components[i - 1] =
                                                            `<div class="controls" id1='${i-1}'>
        		                                                ${latestComponent.innerHTML}
        		                                            </div>`;
                                                        const newComponent = componentTemplate(i);
                                                        components.push(newComponent);
                                                        i++;
                                                        bindComponent(components);
                                                    }

                                                    let component = componentTemplate(i);
                                                    i++;
                                                    components.push(component);
                                                    bindComponent(components);
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <ul class="list-inline pull-right">
                                    <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                    <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                                </ul>
                            </div>
                            <div class="tab-pane" role="tabpanel" id="complete">
                                <div class="step44">
                                    <h1>Completed!!!!</h1>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!-- Footer 
    <footer>
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright &copy; Your Website 2014</p>
            </div>
        </div>
    </footer>

    </div>
    /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/addtripform.js"></script>
    <!-- Script to Activate the Carousel -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //changes the speed
        })
    </script>

</body>

</html>