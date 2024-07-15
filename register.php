<?php 

include "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    if (mysqli_query($con, $sql)) {
        echo "<script language='javascript' type='text/javascript'> alert('Registered Successfully'); </script>";
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ubeproject</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:#684551;color:#d5b0ac;margin:0px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md" style="background-color:#684551;color:#d5b0ac;">
                    <div class="container-fluid"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse"
                            id="navcol-1" style="font-size:25px;">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php" style="color:#d5b0ac;">Home</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="account.php" style="color:#d5b0ac;">Account</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="savedrecipes.php" style="color:#d5b0ac;">Saved Recipes</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <form method="post" action="">
            <div class="d-flex justify-content-center"><img src="assets/img/ubelogo-removebg-preview.png"></div>
            <div class="form-group">
                <h1 class="text-center">Register Here</h1>
            </div>
            <div class="form-group d-flex justify-content-center flex-wrap">
            <input class="form-control d-flex justify-content-between align-items-center" type="text" required="" placeholder="Username" name="username" id="username" minlength="3" autofocus="" autocomplete="off" style="width:328px;margin:10px;">
            <input class="form-control d-flex flex-wrap"
                    type="email" required="" placeholder="Email" name="email" id="username" minlength="8" autocomplete="off" inputmode="email" style="width:328px;margin:10px;">
            </div>
            <div class="form-group d-flex justify-content-center flex-wrap">
            <input class="form-control d-flex justify-content-between align-items-center" type="password" required="" placeholder="Password" name="password" id="password" minlength="6" autocomplete="off" style="width:328px;margin:10px;">
            <input class="form-control d-flex justify-content-between align-items-center"
                    type="password" required="" placeholder="Retype Password" minlength="6" autocomplete="off" style="width:328px;margin:10px;">
            </div>
            <div class="form-group d-flex justify-content-center align-items-center"><button class="btn btn-primary" type="submit" style="width:122px;">Submit</button>
            </div>
        </form>
        <div class="row">
            <div class="col">
                <div class="card" style="margin:50px;">
                    <div class="card-body" style="background-color:#d5b0ac;color:rgb(0,0,0);">
                        <h2 class="card-title">Credits</h2>
                        <h3 class="card-subtitle mb-2">Programmer and Designer</h3>
                        <p class="card-text">John Philip Magsaysay - IT-1A and Johnyela Mayo<br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>