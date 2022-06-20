<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: welcome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page
                            header("location: welcome.php");
                            
                        }
                    }

                }

    }
}    


}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="shortcut icon" href="https://png.pngtree.com/element_our/png/20181022/music-and-live-music-logo-with-neon-light-effect-vector-png_199406.jpg" type="image/x-icon">
    <style>
        body {
            background-image: url('https://free4kwallpapers.com/uploads/originals/2021/01/20/music-wallpaper.jpg');
            background-size: 100%;
        }

        .head1 {
            font-family: serif;
            font-size: 60px;
            color: rgb(39, 5, 53);
            text-shadow: 2px 2px 5px rgb(90, 17, 112);
            -webkit-box-reflect: below 0px linear-gradient(to bottom, rgba(0, 0, 0, 0.0), rgba(0, 0, 0, 0.4));
            margin: 2px 588px;
            width: 600px;
        }

        .navbar {
            background-color: aquamarine;
            border-radius: 25px;
            clear: both;
            box-shadow:1px 1px 3px rgb(24, 160, 160);
        }

        .navbar ul {
            overflow: auto;
        }

        .navbar li {
            float: left;
            list-style: none;
            margin: 13px;

        }

        .navbar li a {
            padding: 3px 3px;
            text-decoration: none;
            font-size: 25px;
            font-weight: bold;
            color: rgb(39, 5, 53);
        }

        .navbar li a:hover {
            color: rgb(247, 23, 79);
        }

        .navbar input {
            float: right;
            padding: auto;
            margin: 20px;
            border-radius: 5px;
            border-color: blue;
            width: 250px;
        }

        img {
            width: 100px;
            margin: 1px 1px;
            float: right;
            clear: both;
        }
        #quote {
            width: 35%;
            font-size: 60px;
            margin-left: 35px;
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-shadow: 1px 1px 3px rgb(187, 34, 207);
            color: rgb(71, 9, 71);
            animation-name: rizwan;
            animation-duration: 3s;
        }
        @keyframes rizwan{
            from{
                 font-size: 0px;
            }
            to {
                font-size: 60px;
            }
        }

        .form {
            width: 500px;
            float: right;
            clear: both;
            background-color: rgb(116, 226, 190);
            border-radius: 25px;
            margin-right: 30px;
            text-align: center;
            box-shadow:1px 1px 3px rgb(24, 160, 160);
        }

        .head2 {
            font-family: serif;
            font-size: 40px;
            color: rgb(39, 5, 53);
            text-shadow: 1px 1px 3px rgb(90, 17, 112);
            margin: 40px 0px;
            width: 500px;
            float: right;
        }

        .style {
            margin: 7px;

        }
        .style input {
            border-radius: 5px;
            border: none;
            background-color:white;
            padding: 10px;
            text-align: center;
            width: 60%;
            font-size: 15px;
            transition-property: all;
            transition-duration: 1s ;
        }
        .style input:hover{
            width: 80%;
            padding: 13px;
            border-radius: 6px;
            font-size: 18px;
            border:2px solid aquamarine;
            box-shadow: 1px 1px 2px rgb(24, 160, 160),2px 2px 3px rgb(28, 190, 136);
        }

        .checkbox {
            text-align: left;
            margin-left: 70px;

        }
        #end input {
            color: white;
            padding: 10px 35px;
            margin: 20px;
            border-radius: 5px;
            border: none;
            background-color:rgb(26, 127, 131);
            width: 70%;
        }

        #end :hover {
            color: cornsilk;
            opacity: 0.8;
            background-color: rgb(247, 23, 79);
            border-color: rgb(13, 126, 126);
            cursor: pointer;
        }
  
    </style>
    <!-- <script>
         function validate(){
           var username=document.getElementById("username").Value;
           var password=document.getElementById("password").Value;
           if(username=="admin"&& password=="user"){
               alert("Login Succesfully");
               return false;
           }
           else{
               alert("Login Fail")
           }
         }
    </script> -->
</head>

<body>
    <img src="https://clipartcraft.com/images/rolls-royce-logo-high-resolution-1.png" alt="Error">
    <h2 class="head1">Music Store</h2>
    <div>
        <header>
            <nav class="navbar">
                <ul>
                    <li><a href="http://127.0.0.1:5500/index.html">Home</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Music_store">About</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="http://127.0.0.1:5500/contact.html">Contact us</a></li>
                    <li><a href="register.php">sign up</a></li>
                    <div class="search">
                        <input type="text" name="search" placeholder="   search this website">
                    </div>
                </ul>
            </nav>
        </header>
    </div>
    <br><br><br><br><br><br>
    <div id="registration">
        <form action="login.php" class="form" method="post">
            <h2 class="head2">Login To Your Account</h2>
            <label for="name"></label>
            <div class="style">
                <input type="text" name="username" id="username" placeholder="User Name" required>
            </div><br>
            <div class="style">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <br>
            <div class="checkbox">
                <input type="checkbox" name="my elligibility"> Keep me logged in for 30 Days
            </div><br>
            <div id="end">
                <input type="submit" value="Login " onclick="validate()">
            </div><br>
        </form>
        <div id="quote">
            <span>“Music expresses that which cannot be put into words and that which cannot remain silent”</span>
        </div>
</body>

</html>