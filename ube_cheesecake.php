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
			<img src="assets/img/ubecheesecake.jpg" style="width: 200px; height: 200px;">
		</div>
		<br>
		<div class="row description">
			<h3>Description</h3>
			<p>
			
			Ube cheesecake bars combine two of your favourite ube desserts — brownies and cheesecake. Creamy and tangy cream cheese swirls on top of chewy and fudgy brownies. So good! Plus, they’re very easy to make and freeze well so you can make them when you have time and enjoy them any time you’re craving for a delicious ube treat.
			</p>
		</div>
		<br>
		<br>
		<div class="row">
			<h4>Ingredients</h4>
			
			
		</div>
		
		<div class="row">
			<h3>For cheese cake layer</h3>
		</div>
		<div class="row">
			<ul>
				<li>Cream Cheese</li>
				<li>Large Egg</li>
				<li>Granulated Sugar</li>
				<li>Vanilla Sugar</li>
				
			</ul>
		</div>
		<div class="row">
			<h3>For ube layer</h3>
		</div>
		<div class="row">
			<ul>
				<li>Unsalted butter</li>
				<li>Brown sugar</li>
				<li>Large Egg</li>
				<li>Ube halaya or Ube Jam</li>
				<li>Ube Extract</li>
				<li>All-purpose flour</li>
				<li>Baking powder</li>
				<li>Salt</li>
			</ul>
		</div>
		<div class="row howtomake">
			<h3>Steps on how to make</h3>
			<br>
		</div>
		<div class="row">
			<ol>
				<li>1 PREP. Preheat oven to 350F. Grease a 9×13 inch baking pan then line with parchment paper with a slight overhang on each side. Set aside.</li>
				<li>2 BEAT. In a large bowl using a handheld electric mixer or using a stand mixer fitted with the paddle attachment, beat cream cheese and granulated sugar until smooth and creamy.</li>
				<li>3 EGG AND VANILLA. Add egg and vanilla extract and continue beating until incorporated. Set aside.</li>
				<li>4 BUTTER AND SUGAR. In a large bowl, combine melted butter, granulated sugar and brown sugar until smooth and incorporated.</li>
				<li>5 UBE. Add the egg, ube jam and ube extract and stir until combined.</li>
				<li>6 FLOUR. Sift all purpose flour, baking powder and salt into your ube mixture and gently stir until no significant streaks of flour remain (do not over mix). The batter will be thick.</li>
				<li>7 UBE BATTER. Transfer the ube batter into your prepared pan and spread around evenly with a spatula.</li>
				<li>8 CREAM CHEESE MIXTURE. Top with your cream cheese mixture and try to spread evenly.</li>
				<li>9 SWIRLS. Run a thin knife through the batter to create swirls and help further even out the cream cheese throughout the pan.</li>
				<li>10 BAKE. Bake the ube cheesecake bars for 30-40 minutes or until a toothpick inserted in the middle comes out with minimal dry crumbs.</li>
				<li>11 COOL. Remove from oven, allow to cool completely in the pan on the counter, then chill in the fridge for 2-3 hours or overnight until set. </li>
				<li>12 SERVE. Remove from pan then cut into bars and serve. You can serve ube cream cheese bars slightly chilled or at room temperature. </li>
			</ol>
		</div>

	</div>
	
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</html>