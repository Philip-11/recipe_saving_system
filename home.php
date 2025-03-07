<?php 

include "connect.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}


$user_id = $_SESSION["user_id"];


$sql = "SELECT * FROM recipes";
$query = mysqli_query($con, $sql);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $recipe_id = $_POST['submit'];
    $user = $_SESSION['user'];

    $sql = "INSERT INTO saved_recipes (recipe_id, user_name) VALUES ('$recipe_id', '$user')";

    if (mysqli_query($con, $sql)){
        echo "<script language='javascript' type='text/javascript'> alert('Added Successfully'); </script>";
    } else {
        echo "<script language='javascript' type='text/javascript'> alert('Something went wrong'); </script>";
    }
}

mysqli_close($con);
                    

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
                                <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php" style="color:#d5b0ac;">Logout</a></li>                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col d-flex justify-content-center" style="width:300px;">
                <img src="assets/img/ubelogo-removebg-preview.png" style="width:375px;height:320px;">
            </div>
            <div class="col text-start">
                <h1>What is Ube</h1>
                <h3>Ube is a purple yam that originated in the Philippines. Ube has a brown, bark-like exterior and vibrant purple flesh. Ube has a sweet, nutty flavor and aroma and is commonly used in desserts.</h3>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <h3 style="padding:0px;margin:0px 0px 20px 20px;">Recipes</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card-deck">
                    <?php 
                        while ($row = mysqli_fetch_assoc($query)) {
                            
                            
                    ?>
                    <div class="card"><img class="card-img-top w-100 d-block" src=<?php echo $row["img"];?>>
                        <div class="card-body" style="background-color:#d5b0ac;color:#000000;">
                            <h4 class="card-title"><?php echo $row["name"]?></h4>
                            <p class="card-text"><?php echo $row["desciption"]?></p>
                            <a class="btn btn-primary" role="button" href="<?=$row['path']?>">View</a>
                            <form action="" method="POST" id="recipeForm">
                                <div class="form-group d-flex justify-content-end" style="padding:25px;"><button class="btn btn-primary" type="submit" name="submit" value="<?=$row['recipe_id']?>" form="recipeForm">Save this recipe!&nbsp; &nbsp;<i class="fa fa-arrow-right"></i></button></div>
                            </form>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>