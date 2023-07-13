<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kalaw Guide</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="brand">Kalaw Guide</div>
    <div class="address-bar">Kalaw City, Shan Sate, Myanmar</div>
    <?php
		
	if (isset($_GET["logout"])) {
		
		if ($_GET["logout"] == "true") { ?>
			
			<div class="alert alert-success">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>You have been logged out of the system.</strong>
			</div>   

	<?php
		}
	}
	?>

   <?php include 'nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="img/slide-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="img/slide-3.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small>Welcome to</small>
                    </h2>
                    <h1 class="brand-name">Kalaw Guide</h1>
                    <hr class="tagline-divider">
                    <h2>
                        <small>By
                            <strong>Winnie</strong>
                        </small>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Create memory
                        <strong>visiting with us</strong>
                    </h2>
                    <hr>
                    <img class="img-responsive img-border img-left" src="img/slide-1.jpg" alt="">
                    <hr class="visible-xs">
                    <p>Travelling is not always about running away from things, <br>
                    sometimes it's about running into what you truly want.
                    </p>
                    <hr>
                    <p>Thinking of taking a break from every day's busy life? Planning to go out of the country with your loved ones to have some fun and quality time in a cost-effecive way?</p>
                    <i>Start now with us, we can guide to you.</i>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <h2 class="intro-text text-left">Tour Expert
                        <strong>to show natures in Kalaw</strong>
                    </h2>
                    <p>Our services includes hiking, glacier walks, mountain climbing and camping.</p>
                    <p>You can feel free nature without permission.</p>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php include 'footer.php'?>

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
