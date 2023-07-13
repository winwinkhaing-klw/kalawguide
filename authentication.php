<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'kalawguide');
if ($mysqli->connect_error) {
    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$source = mysqli_real_escape_string($mysqli, $_POST['source']);
if ($source == "reg") {
    $username = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);

    if (strlen($username) < 2) {
        echo false;
    } else if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        echo false;
    } else if (strlen($password) < 7) {
        echo false;
    } else {
        $epassword = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));
        $_SESSION['login'] = $username;
        $_SESSION['name'] = $username;
        echo true;
    }
}else{
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $password = mysqli_real_escape_string($mysqli, $_POST['password']);
    echo true;
}

//    $query = "SELECT * FROM members WHERE email='$email'";
// 	$result = mysqli_query($mysqli, $query) or die(mysqli_error());
// 	$num_row = mysqli_num_rows($result);
// 	$row = mysqli_fetch_array($result);
	
// 		if ($num_row < 1) {

// 			$insert_row = $mysqli->query("INSERT INTO members (fname, lname, email, password) VALUES ('$fname', '$lname', '$email', '$spassword')");

// 			if ($insert_row) {

// 				$_SESSION['login'] = $mysqli->insert_id;
// 				$_SESSION['fname'] = $fname;
// 				$_SESSION['lname'] = $lname;

// 				echo 'true';

// 			}

// 		} else {

// 			echo 'false';

// 		}
