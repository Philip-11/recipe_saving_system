<?php 

include "connect.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION["user"];


$sql = "SELECT * FROM saved_recipes WHERE user_name='$user'";
$query = mysqli_query($con, $sql);

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
                                <li class="snav-item" role="presentation"><a class="nav-link" href="savedrecipes.php" style="color:#d5b0ac;">Saved Recipes</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-center"><strong><em>Saved Recipes</em></strong></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-deck">
                    <?php while ($row = mysqli_fetch_assoc($query)){?>
                    <?php 
                    $recipe_id = $row['recipe_id'];
                    $sql1 = "SELECT * FROM recipes WHERE recipe_id='$recipe_id'";
                    $query1 = mysqli_query($con, $sql1);
                    while ($row1 = mysqli_fetch_assoc($query1)){
                        $rows[0] = $row1['recipe_id'];
                        $rows[1] = $row1['name'];
                        $rows[2] = $row1['desciption'];
                        $rows[3] = $row1['img'];
                    }
                    
                    
                    ?>
                    <div class="card">
                        <img class="card-img-top w-100 d-block" src="<?=$rows[3]?>">
                        <div class="card-body" style="background-color:#d5b0ac;color:rgb(4,0,0);">
                            <h4 class="card-title"><?=$rows[1]?></h4>
                            <p class="card-text"><?=$rows[2]?></p><button class="btn btn-primary" type="button">Button</button>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-end" style="padding:25px;"><button class="btn btn-primary" type="button">View All&nbsp; &nbsp;<i class="fa fa-arrow-right"></i></button></div>
        </div>
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