<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact - Kalaw Guide</title>
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
    <div class="address-bar">Kalaw Township, Shan State, Myanmar</div>
    <?php include 'nav.php' ?>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Contact
                        <strong>Kalaw Guide</strong>
                    </h2>
                    <hr>
                </div>
                <div class="col-md-8">
                    <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59744.83341078!2d96.52139272548872!3d20.626733566154144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ceb7996093ec95%3A0xf17bab75fc64bbb8!2sKalaw!5e0!3m2!1sen!2smm!4v1689156907139!5m2!1sen!2smm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-4">
                    <p>Phone:
                        <strong>09-252587215</strong>
                    </p>
                    <p>Email:
                        <strong><a href="winwinkhaing.mm25@gmail.com">winwinkhaing.mm25@gmail.com</a></strong>
                    </p>
                    <p>Address:
                        <strong>Kalaw City
                            <br>Shan State, Myanmar</strong>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <form role="form">
                        <hr>
                        <h2 class="intro-text text-center">Contact
                            <strong>form</strong>
                        </h2>
                        <p id="error"></p>
                        <hr>
                        <div class="row col-sm-offset-2 col-lg-8">
                            <p class="form-group ">Please free feel to contact with us.</p>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" id="name" required placeholder="Please enter your name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" id="email" required placeholder="Please enter your email address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="tel" id="phoneno" required placeholder="Please enter your phone number" class="form-control">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" id="message" placeholder="Please enter message" required rows="6"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="contact" class="btn btn-default">Contact Us</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <?php include 'footer.php' ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#contact").click(function() {
                $name = $("#name").val();
                $email = $("#email").val();
                $phoneno = $("#phoneno").val();
                $message = $("#message").val();
                $.ajax({
                    type: "Post",
                    url: "sendmsg.php",
                    data: "name=" + $name + "&email=" + $email + "&phoneno=" + $phoneno + "&message=" + $message,
                    success: function(result) {
                        if (result == true) {
                            $("#error").html('<div class="alert alert-success">\
                        <strong>Successful Registration</strong>\ \
                        </div>');
                            window.location.href = "index.php";
                        } else {
                            $("#error").html('<div class="alert alert-danger">\
                        <strong>Failed Registration</strong>\ \
                        </div>');
                            window.location.href = "index.php";
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>