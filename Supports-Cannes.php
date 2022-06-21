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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Maison du Pêcheur/Products</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome 5 CSS -->
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
    <!-- Products List CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Home page.css">
  </head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <body>
    <section style="background-color: #fafafa;">

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

            <br></br>
            
            
            <h2>Our <b>Products.</b></h2>
            <br></br>
 <main>
<!-- DEMO HTML -->
<div class="container bg-white">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container-fluid p-0"><a class="navbar-brand text-uppercase fw-800" href="Products.php"><span class="border-red pe-2">Available</span>Products</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="fas fa-bars"></span> </button>
            <div class="collapse navbar-collapse" id="myNav">
                <div class="navbar-nav ms-auto"> <a class="nav-link active" aria-current="page" href="Products.php">All</a> <a class="nav-link" href="Cannes.php">Cannes</a> <a class="nav-link" href="Moulinets.php">Moulinets </a> <a class="nav-link" href="Ensembles.php">Ensembles </a> <a class="nav-link" href="Supports-Cannes.php">Supports-Cannes</a> <a class="nav-link" href="Filaments.php">Filaments</a> </div>
            </div>
        </div>
    </nav>
    <?php
       $req = mysqli_query($data, "SELECT * FROM supports_cannes");
        while($row = mysqli_fetch_assoc($req)){
    ?>
    <div class="row">
        <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item my-3">
            <div class="product"> <a href="Supports-Cannes 1.php"><img src="products/<?= $row['image']?>"></a>
                <ul class="d-flex align-items-center justify-content-center list-unstyled icons">
                    <li class="icon"><span class="fas fa-expand-arrows-alt"></span></li>
                    <li class="icon mx-3"><span class="far fa-heart"></span></li>
                    <li class="icon"><span class="fas fa-shopping-bag"></span></li>
                </ul>
            </div>
            <div class="tag bg-red">sale</div>
            <div class="title pt-4 pb-1"><?= $row['nom']?></div>
            <div class="d-flex align-content-center justify-content-center"> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> <span class="fas fa-star"></span> </div>
            <div class="item-price"><strike>$52.00</strike> <b><?= $row['prix']?>$</b></div>
        </div>
        <?php }?>

</div>
<!-- EMD DEMO HTML -->
 </main>
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
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>