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


    <div class="container">
        <form action="/show" method="POST">

        <div class="row">
            <div class="col-md-8">
                <h3>ADD TRIP </h3>
                <hr>
                <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="control-group form-group">
                        {{ csrf_field() }}
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label> ROUND TRIP  </label>

                    

                        </div>
                        <p class="help-block"></p>
                    </div>
            </div>
            <hr>
            <div class="container">
                <div class="control-group form-group con" id='controls'>
                    <!--for text input-->
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>อัตราค่าบริการ  </label>
                        <label>Price_Children : </label>
                        <input type="text" class="form-control" name="price_child">
                        <label>Price_ADUIT : </label>
                        <input type="text" class="form-control" name="price_adult" required data-validation-required-message="Please enter Price_ADUIT ">
<label>amount_seats : </label>
                        <input type="text" class="form-control" name="amount_seats" required data-validation-required-message="Please enter Price_ADUIT ">

                    </div>
                </div>
            </div>
            <hr>
            <div class="container">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>รายละเอียดทัวร์ : </label>
                        <br>
                        วันแรก
                        <input class="form-control" name='schedule_day'  type="text"  >
                        <table class="table">
                            <tr>
                                <td>TIME</td>
                                <td>LOCATION</td>
                                <td>DETAILS</td>
                            </tr>
                            <tr>
                                <td><input class="form-control" name='schedule_time'  type="time" ></td>
                                <td><input class="form-control" name='schedule_place' type="text"></td>
                                <td><input class="form-control" name='schedule_description' type="text"></td>
                            </tr>
                            <tr>
                               
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="control-group form-group">
                <div class="controls">
                    <label>description : </label>
                    <textarea rows="10" cols="100" class="form-control" id="description" required data-validation-required-message="Please enter your description"
                        maxlength="999" style="resize:none"></textarea>
                </div>
            </div>
            <div id="success"></div>
            <input type="hidden" name="trip_id" value="{{ $tripId }}">
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary">SUBMIT</button>
            
        </div>
    </div>
    <!-- /.row -->
    </form>


 <script type="text/javascript">
    	let i =0;
        let components = [];
        const button = `<label><button type="button" class="btn btn-primary" id='btn' >ADD ROUND DAY</button></label>`;

    	const componentTemplate = (id) => `<div class="controls" id='${id}'>
                        <label>start_day</label>
                        <input class="form-control start_day" name="start_date" type="date" value='' required data-validation-required-message="Please enter your ROUND TRIP">
                        <label>Departure_Date :</label>
                        <input class="form-control Departure_Date" name="departure_date" type="date" value='' required data-validation-required-message="Please enter your ROUND TRIP">
                        <br>
                    </div>`;

        const bindComponent = (components) => {
        	document.getElementById('controls').innerHTML = ''
        	components.map(component => {
        		document.getElementById('controls').innerHTML += component;
        	});
        	document.getElementById('controls').innerHTML += button;
        	document.getElementById('btn').addEventListener('click', onClickHandler);
        }

        const onClickHandler = (e) => {
        	let latestComponent = document.getElementById(i-1);
        	components[i-1] = `
        		<div class="controls" id='${i-1}'>
        		${latestComponent.innerHTML}
        		</div>
        	`;
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