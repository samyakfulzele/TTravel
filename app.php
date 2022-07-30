<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "ttravel";

$conn = mysqli_connect($servername,$username,$password,$database);

function register(){
    global $conn;
    if(isset($_POST["register_submit"])){
        $f_name = $_POST["firstName"];
        $l_name = $_POST["lastName"];
        $email = $_POST["email"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $cpassword = $_POST["confPassword"];
        $sql_query_1 = "SELECT * FROM user_details WHERE `status` = 'A'";
        $sql_run = mysqli_query($conn,$sql_query_1);
        if($conn->query($sql_query_1) == TRUE){
            $data = mysqli_fetch_assoc($sql_run);
            print $data['email'];
            if($email != $data['email']){
                if($password == $cpassword){
                    $sql_query = "INSERT INTO `ttravel`.`user_details` (`first_name`, `last_name`, `email`, `username`, `password`,`register_time`,`status`) VALUES ('$f_name', '$l_name', '$email', '$username', '$password',NOW(),'A')";
                    if($conn->query($sql_query) == TRUE){
                        $_SESSION['register_status'] = "<script> alert('Registration Successful!') </script>";
                        header("Location: index.php");
                    }
                    else{
                        $_SESSION['register_status'] = "<script> alert('Registration Failed!') </script>";
                        header("Location: index.php");
                    }
                }
                else{
                    $_SESSION['register_status'] = "<script> alert('Password and Confirm Password is not similar!') </script>";
                    header("Location: index.php");
                }
            }
            else{
                $_SESSION['register_status'] = "<script> alert('Email is already used!') </script>";
                header("Location: index.php");
            }
        }
    }
}
register();

function login(){
    global $conn;
    global $user_password;
    if(isset($_POST["login_submit"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql_query = "SELECT * FROM `user_details` WHERE `username` = '$username' AND `password` = '$password' AND `status` = 'A';";
        $login = mysqli_query($conn,$sql_query);
        if(mysqli_num_rows($login) == 1){
            $_SESSION['username'] = $username;
            $_SESSION['loggedin'] = true;
            $_SESSION['login_status'] = "<script> alert('Login Successful!') </script>";
            header("Location: user.php");
        }
        else{
            $_SESSION['login_status'] = "<script> alert('Invalid Credentials!') </script>";
            header("Location: index.php");
        }
    }
}
login();

function contact(){
    global $conn;
    if(isset($_POST["contact_submit"])){
        $f_name = $_POST["firstName"];
        $l_name = $_POST["lastName"];
        $email = $_POST["email"];
        $subject = $_POST["subject"];
        $message = $_POST["message"];
        $sql_query = "INSERT INTO `ttravel`.`contact_details` (`first_name`, `last_name`, `email`, `subject`, `message`) VALUES ('$f_name','$l_name','$email','$subject','$message')";
        if($conn->query($sql_query) == TRUE){
            $_SESSION['contact_status'] = "<script> alert('Thanks for contacting us!') </script>";
            header("Location: index.php");
        }
        else{
            $_SESSION['contact_status'] = "<script> alert('Something went wrong.Try again!') </script>";
            header("Location: index.php");
        }
    }
}
contact();

function edit_profile(){
    global $conn;
    if(isset($_POST["edit_details_submit"])){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $sql_query = "UPDATE user_details SET first_name = '$first_name', last_name = '$last_name', email = '$email' WHERE username = '$_SESSION[username]'";
        if($conn->query($sql_query) == TRUE){
            $_SESSION['edit_profile'] = "<script> alert('Details Updated Successfully!') </script>";
            header("Location: profile.php");
        }
        else{
            $_SESSION['edit_profile'] = "<script> alert('Something went Wrong!') </script>";
            header("Location: profile.php");
        }
    }
}
edit_profile();

function change_password(){
    global $conn;
    if(isset($_POST["change_password_submit"])){
        $current_password = $_POST["current_password"];
        $new_password = $_POST["new_password"];
        $conf_new_password = $_POST["conf_new_password"];
        $sql_query_1 = "SELECT * FROM `user_details` WHERE `username` = '{$_SESSION['username']}'";
        $sql_run = mysqli_query($conn,$sql_query_1);
        if(mysqli_num_rows($sql_run) > 0){
            $data = mysqli_fetch_assoc($sql_run);
            if($current_password == $data['password']){
                if($new_password == $conf_new_password){
                    $sql_query = "UPDATE user_details SET `password` = '$new_password' WHERE username = '$_SESSION[username]'";
                    if($conn->query($sql_query) == TRUE){
                        $_SESSION['change_password'] = "<script> alert('Password Changed!') </script>";
                        header("Location: profile.php");
                    }
                    else{
                        $_SESSION['change_password'] = "<script> alert('Something went wrong!') </script>";
                        header("Location: profile.php");
                    }
                }
                else{
                    $_SESSION['change_password'] = "<script> alert('New Password and Confirm New Password Does not Match!') </script>";
                    header("Location: profile.php");
                }
            }
            else{
                $_SESSION['change_password'] = "<script> alert('Password and Current Password Does not Match!') </script>";
                header("Location: profile.php");
            }
        }
    }
}
change_password();

function delete_account(){
    global $conn;
    if(isset($_POST["delete_account_submit"])){
        $sql_query = "UPDATE user_details SET `status`= 'I' WHERE `username`='$_SESSION[username]'";
        if($conn->query($sql_query) == TRUE){
            $_SESSION['delete_account'] = "<script> alert('Account Deleted Successfully!') </script>";
            header("Location: index.php");
        }
        else{
            $_SESSION['delete_account'] = "<script> alert('Something went wrong!') </script>";
            header("Location: profile.php");
        }
    }
}
delete_account();

function user_contact(){
    global $conn;
    if(isset($_POST["message_submit"])){
        $sql_query_1 = "SELECT * FROM `user_details` WHERE `username` = '{$_SESSION['username']}'";
        $sql_run = mysqli_query($conn,$sql_query_1);
        if(mysqli_num_rows($sql_run) > 0){
            $data = mysqli_fetch_assoc($sql_run);
            $f_name = $data["first_name"];
            $l_name = $data["last_name"];
            $email = $data["email"];
            $subject = $_POST["sub"];
            $message = $_POST["message"];
            $sql_query = "INSERT INTO `ttravel`.`contact_details` (`first_name`, `last_name`, `email`, `subject`, `message`) VALUES ('$f_name','$l_name','$email','$subject','$message')";
            if($conn->query($sql_query) == TRUE){
                $_SESSION['user_contact_status'] = "<script> alert('Thanks for contacting us!') </script>";
                header("Location: user.php");
            }
            else{
                $_SESSION['user_contact_status'] = "<script> alert('Something went wrong.Try again!') </script>";
                header("Location: user.php");
            }
        }
    }
}
user_contact();

?>