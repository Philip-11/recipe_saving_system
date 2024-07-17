<?php 

include "connect.php";

$id = (int) $_GET['id'];
$sql = "SELECT * FROM users WHERE id=$id";



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recipepages</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background-color:#684551;color:#d5b0ac;margin:0px;">
    <div class="container">
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md" style="background-color:#684551;color:#d5b0ac;">
                    <div class="container-fluid"><a class="navbar-brand" href="#" style="font-size:25px;"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div
                            class="collapse navbar-collapse" id="navcol-1" style="font-size:25px;">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="admin.php" style="color:#d5b0ac;">Go Back</a></li>
                                <!-- <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:#d5b0ac;">Account</a></li> -->
                            </ul>
                    </div>
            </div>
            </nav>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-center"><strong><em>Edit Account</em></strong></h1>
        </div>
    </div>
    <form method="POST" action="updateadmin.php">
        <div class="form-group d-flex justify-content-center flex-wrap">
            <input type="hidden" name="id" value="<?=$id?>">
            <input class="form-control d-flex justify-content-between align-content-center" type="text" required="" placeholder="Username" minlength="4" autofocus="" style="width:320px;margin:10px;" name="editUsername"><input class="form-control d-flex justify-content-between align-content-center flex-wrap"
                type="email" required="" placeholder="Email" minlength="8" style="width:320px;margin:10px;" name="editEmail">
            <input class="form-control" type="password" required="" placeholder="Password" minlength="8" style="margin:10px;width:328px;" name="editPassword">
            <input class="form-control"
                type="text" required="" placeholder="User Level" style="margin:10px;width:328px;" name="editUserlevel">
        </div>
        <div class="form-group d-flex justify-content-center align-items-center"><button class="btn btn-primary" type="submit">Update</button></div>
    </form>
    <div class="row">
        <div class="col">
            <div class="card" style="margin:50px;">
                <div class="card-body" style="background-color:#d5b0ac;color:rgb(0,0,0);">
                    <h2 class="card-title">Credits</h2>
                    <h3 class="card-subtitle mb-2">Programmer and Designer (Logo)</h3>
                    <p class="card-text">John Philip Magsaysay - IT-1A and Johnyela Mayo<br></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>