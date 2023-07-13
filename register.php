<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Register - Kalaw Guide</title>
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
        <div class="box">
            <hr>
            <h2 class="intro-text text-center">Register
                <strong>form</strong>
            </h2>
            <hr>
            <p id="error"></p>
            <form role="form">
                <div class="row col-sm-offset-4 col-lg-4">
                    <div class="form-group ">
                        <label>Name</label>
                        <input type="text" id="name" required placeholder="Enter Name" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label>Email Address</label>
                        <input type="email" id="email" required placeholder="Enter Email Address" class="form-control">
                    </div>
                    <div class="form-group ">
                        <label>Password</label>
                        <input type="password" id="password" required placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="form-group ">
                        <button type="submit" id="register" class="btn btn-default btn-info">Register</button>
                        <a href="login.php">Do you have account? Please LogIn</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script src="js/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#register").click(function() {
            $name = $("#name").val();
            $email = $("#email").val();
            $password = $("#password").val();
            $.ajax({
                type: "Post",
                url: "authentication.php",
                data: "source=" + "reg" + "&name=" + $name + "&email=" + $email + "&password=" + $password,
                success: function(result) {
                    if (result == true) {
                        $("#error").html('<div class="alert alert-success">\
                        <strong>Successful Registration</strong>\ \
                        </div>');
                        window.location.href = "login.php";
                    }else{
                        $("#error").html('<div class="alert alert-danger">\
                        <strong>Failed Registration</strong>\ \
                        </div>');
                        window.location.href = "login.php";
                    }
                }
            });
        });
    });
</script>