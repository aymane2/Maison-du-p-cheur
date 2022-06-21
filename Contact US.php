<?php
$host="localhost";
$user="root";
$password="";
$db="product";



$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}   
session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/Home page.css">

    <title>Contact US</title>
</head>
<body>
   

    <div class="navbar navbar-expand-md bg-Light navbar-Light"> 
        <div class="container ">
            <a href="Index.php" class="navbar-brand text-Primary"><b>Maison du Pêcheur</b></a>
           
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">

              <span class="navbar-toggler-icon bg-Light"></span>

            </button>
             <ul class="nav justify-content-center">
                <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Index.php"><b>Home</b></a> </li>
                <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Products.php"><b>Shop</b></a> </li>
                <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Contact US.php"><b>Contact Us</b></a> </li>
                <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Login admin .php"><b>Connexion</b></a> </li>
                <li class="nav-item"> <a class="nav-link"  href="cart.php">Panier <span><?=array_sum($_SESSION['panier'])?></span></a> </li>

              </ul>
            </div>
       

    </div>
    <br></br>
    <h2><b>Contact </b> US.</h2>
    
    <br></br>

    <div class="container">
		<div class="row vert-margin">
			<div class="col-sm-9"><div class="title-wrap"><h3 class="h1-style">Get In Touch With Us</h3>

</div>
<form  action = "testcontact.php"  methode ="POST"data-toggle="validator" class="contact-form" id="contactForm">

	<div class="form-group">
		<div class="row vert-margin-middle">
			<div class="col-lg">
				<input type="text" name="nom" id="nom" class="form-control form-control--sm" placeholder="Nom" required>
			</div>
            <br></br>
			<div class="col-lg">
				<input type="text" name="prenom" id="prenom" class="form-control form-control--sm" placeholder="Prénom" required>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="row vert-margin-middle">
			<div class="col-lg">
				<input type="email" name="email" id="email" class="form-control form-control--sm" placeholder="Email" required>
			</div>
            <br></br>
			<div class="col-lg">
				<input type="text" name="phone" id="phone" class="form-control form-control--sm" placeholder="Phone" required>
			</div>
		</div>
	</div>
	<div class="form-group">
		<textarea class="form-control form-control--sm textarea--height-200" name="messagee" id="messagee" placeholder="Message" required></textarea>
	</div>
    <br></br>
    <button class="btn btn-lg btn-warning" type="submit" >Send Message</button>
</form></div>

		</div>
	</div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
          <p class="col-md-4 mb-0 text-muted">&copy; Copyright © 2022. All rights reserved.</p>
      
      
      
          <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="Index.php" class="nav-link px-2 text-muted">Home</a></li>
            <li class="nav-item"><a href="Products.php" class="nav-link px-2 text-muted">Shop</a></li>
            <li class="nav-item"><a href="Contact US.php" class="nav-link px-2 text-muted">Contact Us</a></li>
            <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Login admin .php"><b>Connexion</b></a> </li>
          </ul>
        </footer>
      </div>



 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>