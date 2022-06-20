<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        // Set these parameters
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
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

        a {
            text-decoration: none;
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
            background-color: cornsilk;
        }

        #gender {
            margin: 10px;
        }

        #music {
            border-radius: 10px;
            background-color: cornsilk;
            border: none;
            margin: 10px;
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

        #end input {
            padding: 10px 35px;
            margin: 20px;
            border-radius: 5px;
            border: none;
            background-color: rgb(73, 233, 233);
            transition-property: all;
            transition-duration: 0.6s;
        }

        #end :hover {
            color: cornsilk;
            opacity: 0.8;
            background-color: rgb(247, 23, 79);
            border-color: rgb(13, 126, 126);
            cursor: pointer;
            padding: 13px 38px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <img src="https://clipartcraft.com/images/rolls-royce-logo-high-resolution-1.png" alt="Error">
    <h2 class="head1">Music Store</h2>
    <br>
    <div>
        <header>
            <nav class="navbar">
                <ul>
                    <li><a href="http://127.0.0.1:5500/index.html">Home</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/Music_store">About</a></li>
                    <li><a href="#">services</a></li>
                    <li><a href="http://127.0.0.1:5500/contact.html">Contact us</a></li>
                    <div class="search">
                        <input type="text" name="search" placeholder="   search this website">
                    </div>
                </ul>
            </nav>
        </header>
    </div>
    <br>

    <div id="registration">
        <form action="register.php" class="form" method="post">
            <h2 class="head2">Registration For New User</h2>
            <label for="name"></label>
            <div class="style">
                First Name: <input type="text" name="my name" id="name" required>
            </div>
            <br>
            <div class="style">
                Last Name: <input type="text" name="my name" id="name" required>
            </div>
            <br>
            <div class="style">
                Email Verification: <input type="email" name="username" required>
            </div>
            <br>
            <div class="style">
                Password: <input type="password" name="password" required>
            </div>
            <br>
            <div class="style">
                Confirm Password: <input type="password" name="confirm_password" required>
            </div>
            <br>
            <div class="style">
                Phone Number : <input type="number" name="Phone number" required>
            </div>
            <br>
            <div class="style">
                <input type="checkbox" name="my elligibility" required> Do you agree with terms and conditions
            </div>
            <br>
            <div class="style" id="gender">
                Gender:Male<input type="radio" name="my gender" required> Female<input type="radio" name="my gender">
            </div><br>
            <div>
                <label for="car" required>Music Choice</label>
                <select name="my music" id="music">
                    <option value="Classical">Classical</option>
                    <option value="Romantic">Romantic</option>
                    <option value="Intstrumental">Intstrumental</option>
                    <option value="Hip Hop">Hip Hop</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                </select>
            </div><br>
            <div id="end">
                <input type="submit" value="Submit Here ">
                <input type="reset" value="Reset Now">
            </div>
            <br>
        </form>
        <br><br><br><br><br><br><br><br><br><br>
        <div id="quote">
            <span>“One good thing about music, when it hits you, you feel no pain.”</span>
        </div>
</body>

</html>