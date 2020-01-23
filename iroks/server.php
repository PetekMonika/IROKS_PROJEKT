<?php

session_start();

$username = "";
$email = "";
$errors = array();
$leto = "";
$naslov = "";
$title = "";

// CONNECT TO THE SQLiteDatabase

$db = mysqli_connect('localhost', 'root', '', 'iroks');

// IF THE REGISTER BUTTON IS CLICKED

if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


    // ENSURE THAT FORM FIELDS ARE FILLED PROPERLY

    if (empty($username)) {
        array_push($errors, "Username is requiered");
    }
    if (empty($email)) {
        array_push($errors, "Email is requiered");
    }
    if (empty($username)) {
        array_push($errors, "Password is requiered");
    }

    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // IF THERE IS NO ERRORS, SAVE USER TO SQLiteDatabase

    if (count($errors) == 0) {
        $password = md5($password_1); // encrypted password before storing it in database
        $sql = "INSERT INTO uporabnik (username, email, password)
                        VALUES ('$username', '$email', '$password')";

        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php'); // redirect to home page
    }

}

// log user in from login ldap_control_paged_result

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);


    // ENSURE THAT FORM FIELDS ARE FILLED PROPERLY

    if (empty($username)) {
        array_push($errors, "Username is requiered");
    }
    if (empty($password)) {
        array_push($errors, "Password is requiered");
    }

    if (count($errors) == 0) {
        $password = md5($password); // encrypted password before storing in database
        $query = "SELECT * FROM uporabnik WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php'); // redirect to home page
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}


//logout
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

//arhiv
if(isset($_POST['arhiv'])){
    $username = mysqli_real_escape_string($db, $_POST['leto']);
    $query = "SELECT * FROM film WHERE leto='$leto'";
    $result = mysqli_query($db, $query);

    if (mysqli_num_rows($result) > 0) {
        $_SESSION['leto'] = $leto;

        if($leto == 2019){
            $_SESSION['naslov'] = $naslov;
            $_SESSION['title'] = $title;
            header('location: a19.php'); // redirect to home page
        }

    } else {
        "Ni filmov";
    }
}


if(isset($_POST['prijava'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $dogodek = mysqli_real_escape_string($db, $_POST['dogodek']);

    $sql = "INSERT INTO prijava (username, dogodek)
                        VALUES ('$username', '$dogodek')";

    mysqli_query($db, $sql);

}
?>

