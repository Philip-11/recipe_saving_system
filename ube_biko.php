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
			<img src="assets/img/Ube-Biko.jpg" style="width: 200px; height: 200px;">
		</div>
		<br>
		<div class="row description">
			<h3>Description</h3>
			<p>
			
			Ube biko is another delicious variation of Filipino sticky rice cakes. Unlike other ube biko recipes, however, this one uses ube condensed milk and doesn’t need to be baked.

			It’s also topped with homemade latik for that extra special touch. 
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
			<img src="assets/img/Ube-Biko-Ingredients.jpg" style="width: 500px; height: 500px;">
		</div>
		<div class="row">
			<h3>Step by step</h3>
		</div>
		<div class="row howtomake">
			
			<ol>
				<li>First, cook glutinous rice in water. I use a rice cooker but you can also use a regular pot.</li>
				<li>In the meantime, make the latik by heating the coconut cream in a pan on low-medium heat.</li>
				<li>Cook until golden brown. Constantly stir to prevent the mixture from burning.</li>
				<li>Strain the mixture to separate the latik from the oil. Set aside.</li>
				<li>In a large pan or wok, combine coconut milk, ube condensed milk and ube extract.</li>
				<li>Stir to incorporate.</li>
				<li>Add brown sugar and salt. Stir until sugar is dissolved.</li>
				<li>Bring the mixture to a boil.</li>
				<li>Add the cooked rice and mix until well blended</li>
				<li>Lower heat and continue stirring until the mixture thickens and the rice absorbs the liquid.</li>
				<li>Transfer the biko to your preferred baking pan greased with coconut oil (optional: line with banana leaves then grease with oil). Spread evenly.</li>
				<li>Top with latik, allow to set to firm up some more, serve.</li>
				
			</ol>

		</div>

	</div>
	
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
</html>