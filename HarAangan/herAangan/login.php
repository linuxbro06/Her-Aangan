<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: home.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style-login.css">
</head>
<body>
    <a href="doctor.php"><button class="btn btn-danger" onclick>Doctor Login</button></a>
    <div class="container"  style="background-color: rgb(230, 158, 214); max-height:600px;border-radius:50px;border:2px solid red:">
       
        <div class="form-fill" style="margin-top:200px;padding:20px;">           
             <h4 style="color:rgb(222, 28, 57);font-fmily:'Poppins', sans-serif ;margin:10px;">Her Aangan - Step in your safe & comfortable zone!</h1>

            <form action="login.php" method="post" >
                <div class="form-group" style="padding:5px;">
                    <input type="text" placeholder="Enter Username:" name="email" class="form-control">
                </div>
                <div class="form-group" style="padding:5px;">
                    <input type="password" placeholder="Enter Password:" name="password" class="form-control">
                </div>
                <div class="form-btn" width="200px"24 style="padding:5px;">
                    <input type="submit" value="Login" name="login" class="btn btn-primary" width="200px" >
                </div>
            </form>
                <div><p>Not registered yet <a href="registration.php">Register Here</a></p></div>
    <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location:home.html");
                    die();
                }else{
                    echo "<div class='alert alert-danger'>Password does not match</div>";
                }
            }else{
                echo "<div class='alert alert-danger'>Username does not match</div>";
            }
        }
        ?>
    </div>
    <div class="imggirl" style="margin-bottom:100px;margin-bottom: 1000px;">
        <img src="logo1.png" style="border-radius:40px;border:2px solid red" width="310px"><img>
    </div>
    </div>
</body>
</html>