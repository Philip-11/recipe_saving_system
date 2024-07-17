<?php 

include "connect.php";

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM recipes";
$query = mysqli_query($con, $sql);





?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">

</head>
<body style="background-color: #684551; color: #d5b0ac;">
	<div class="container" >
		<div class="row">
            <div class="col">
                <nav class="navbar navbar-light navbar-expand-md" style="background-color:#684551;color:#d5b0ac;">
                    <div class="container-fluid"><a class="navbar-brand" href="#"></a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse"
                            id="navcol-1" style="font-size:25px;">
                            <ul class="nav navbar-nav">
                                <li class="nav-item" role="presentation"><a class="nav-link" href="home.php" style="color:#d5b0ac;">Home</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="account.php" style="color:#d5b0ac;">Account</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php" style="color:#d5b0ac;">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

		<div class="row">
			<div class="col">
				<h1>How to make this recipe?</h1>
			</div>
		</div>

		<div class="row">
			<img src="assets/img/ubepic.jpg" style="width: 200px; height: 200px;">
		</div>
		<br>
		<div class="row description">
			<h3>Description</h3>
			<p>
			
			Technically, ube brownies should be called ube blondies because the recipe doesn’t contain cocoa. But a brownie has a certain ring to it, doesn’t it? So brownies it is. 

			Just imagine your favourite fudgy brownie recipe but ube flavoured. That’s what these ube brownies are. They’re delicious.
			</p>
		</div>
		<br>
		<br>
		<div class="row">
			<h3>Steps on how to make</h3>
		</div>
		<div class="row">
			<h4>Ingredients</h4>
		</div>
		<div class="row">
			<ul>
				<li>Unsalted butter</li>
				<li>Granulated Sugar</li>
				<li>Brown Sugar</li>
				<li>Egg</li>
				<li>Ube jam or Ube halaya</li>
				<li>Ube extract</li>
				<li>All-purpose flour</li>
				<li>Baking Powder</li>
				<li>Salt</li>
				<li>White Chocolate Chips</li>
			</ul>
		</div>
		<div class="row">
			<h3>Step by step</h3>
		</div>
		<div class="row howtomake">
			
			<ol>
				<li>PREHEAT. Preheat oven to 350F. Grease a 9×13 inch baking pan then line with parchment paper with a slight overhang on each side. Set aside.</li>
				<li>BUTTER AND SUGAR. In a large bowl, combine melted butter, granulated sugar and brown sugar until smooth and incorporated.</li>
				<li>UBE JAM AND EGG. Add the egg, ube jam and ube extract and stir until combined.</li>
				<li>DRY INGREDIENTS. Sift flour, baking powder and salt into your ube mixture and gently stir until no significant streaks of flour remain (do not over mix). The batter will be thick.</li>
				<li>WHITE CHOCOLATE. Gently fold in white chocolate chips until evenly distributed.</li>
				<li>TRANSFER. Transfer into prepared pan and spread around evenly with a spatula. Optional: press more white chocolate chips on top of the batter to make your brownies prettier!</li>
				<li>BAKE. Bake for 30-40 minutes or until a toothpick inserted in the middle comes out with minimal dry crumbs.</li>
				<li> COOL. Cool in the pan for 20 minutes, remove from pan to cool completely, then cut into bars.</li>
				
			</ol>

		</div>

	</div>
	
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</html>