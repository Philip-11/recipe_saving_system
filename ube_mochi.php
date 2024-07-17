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
			<img src="assets/img/ubemochi.jpg" style="width: 200px; height: 200px;">
		</div>
		<br>
		<div class="row description">
			<h3>Description</h3>
			<p>
			
			The word “mochi” refers to two different treats — the Hawaiian snack we have here, and Japanese mochi, which is shaped like a bun and filled with red bean paste, matcha, chocolate and more.

			<br> 

			Both are made of Mochiko, a Japanese sweet rice flour made from cooked mochigome, a glutinous variety of short-grain rice. 

			<br> 

			In addition to mochiko, ube butter mochi is also made with coconut milk for a perfectly tropical treat.

			<br> 

			It’s then baked until deliciously tender and chewy. There’s nothing quite like it!
			</p>
		</div>
		<br>
		<br>

		<div class="row howtomake">
			<h3>Steps on how to make</h3>
			
		</div>
		<div class="row">
			<h4>Ingredients</h4>
		</div>
		<div class="row">
			<br>
			
			<img src="assets/img/Ube-Mochi-Ingredients.jpg" style="width: 500px; height: 500px;">
			<br>
		</div>
		<div class="row">
			<h3>Step by step</h3>
		</div>
		<div class="row">
			<ol>
				<li>Place melted butter and sugar in a large bowl.</li>
				<li>Mix until combined.</li>
				<li>Add eggs one at a time.</li>
				<li>Ensure each addition is incorperated well</li>
				<li>Add ube extract.</li>
				<li>Stir evenly until blended.</li>
				<li>Add mochiko and baking poweder.</li>
				<li>Stir until 80-90% combined.</li>
				<li>Add evaporated milk and coconut milk.</li>
				<li>Stir until fully incorporated. Ensure your batter is perfectly smooth and has no lumps</li>
				<li>Transfer the batter to your prepared pan.</li>
				<li>Bake for 45 minutes or until a tester inserted in the center comes out with minimal dry crumbs.</li>
			</ol>

			<br>
			<br>
			<p>Remove from oven and allow to cool completely in the pan before slicing into bars</p>
		</div>
	</div>
	
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</html>