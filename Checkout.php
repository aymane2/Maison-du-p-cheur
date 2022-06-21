<?php 
session_start();

$host="localhost";
$user="root";
$password="";
$db="product";



$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Checkout Forum </title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

<style>
    h2 {
    color: #000;
    font-size: 26px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
    position: relative;
    margin: 30px 0 60px;
}
  h2::after {
    content: "";
    width: 100px;
    position: absolute;
    margin: 0 auto;
    height: 4px;
    border-radius: 1px;
    background: #ffa710;
    left: 0;
    right: 0;
    bottom: -20px;
  }
</style>  
</head>

<body>

    <section style="background-color: #fafafa;">

    <div class="hdr hdr-style6">

    <div class="navbar navbar-expand-md bg-Light navbar-Light">
      <div class="container ">
        <a href="Index.php" class="navbar-brand text-Primary"><b>Maison du Pêcheur</b></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">

          <span class="navbar-toggler-icon bg-Light"></span>

        </button>
        <ul class="nav justify-content-center">
          <li class="nav-item"> <a class="nav-link" style="color:#000000"  href="Index.php"><b>Home</b></a> </li>
          <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Products.php"><b>Shop</b></a> </li>
          <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Contact US.php"><b>Contact Us</b></a>
          </li>
          <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Login admin .php"><b>Connexion</b></a> </li>
          <li class="nav-item"> <a class="nav-link"  href="cart.php"><i class="fa-solid fa-cart-shopping"></i><span><?=array_sum($_SESSION['panier'])?></span></a> </li>

        </ul>
      </div>

    </div>
</div>

     <!-- DEMO HTML -->
     <div class="container">
  <div class="py-5 text-center">
    <h2>Checkout <b>Page.</b></h2>
  </div>
  <?php
           $total = 0 ;
           // liste des produits
           //récupérer les clés du tableau session
           $ids = array_keys($_SESSION['panier']);
           if(empty($ids)){
             echo "votre panier est vide";
           }else { 
            //si oui 
            $products = mysqli_query($data, "SELECT * FROM detail WHERE id IN (".implode(',', $ids).")");
               
          //lise des produit avec une boucle foreach
           foreach($products as $product):
           //calculer le total ( prix unitaire * quantité) 
           //et aditionner chaque résutats a chaque tour de boucle
            $total = $total + $product['prix'] * $_SESSION['panier'][$product['id']] ;

           ?>
  <div class="row">
  <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
      </h4>
      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
        <div>
        <?=$_SESSION['panier'][$product['id']] ?>
        </div>  
        <div>
            <h6 class="my-0"><?= $product['nom']?></h6>
          </div>
          <span class="text-muted"><?= $product['prix']?>$</span>
           </div>
           </li>
    <?php endforeach ;} ?>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form action = "testcheckout.php"  methode ="POST" class="needs-validation">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nome" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" name="prenome" id="prenome" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="username">Username</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text">@</span>
            </div>
            <input type="text" class="form-control" name="usernamee" id="usernamee" placeholder="Username" required>
            <div class="invalid-feedback" style="width: 100%;">
              Your username is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="emaile" id="emaile" placeholder="you@example.com">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="addresse" id="addresse" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <div class="mb-3">
          <label for="address_2">Address 2 <span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" name="address_2e" id="address_2e" placeholder="Apartment or suite">
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="pays">Pays</label>
            <input type="text" class="form-control" name="payse" id="payse" placeholder="" required>
            <div class="invalid-feedback">
              Country code required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" name="villee" id="villee" placeholder="" required>
            <div class="invalid-feedback">
              State code required.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="code_postal">Code Postal</label>
            <input type="text" class="form-control" name="code_postale" id="code_postale" placeholder="" required>
            <div class="invalid-feedback">
            Code Postal required.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="same-address">
          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
        </div>
        <br>
        <button class="btn btn-warning btn-lg btn-block" type="submit">Confirm Your Order</button>
      </form>
    </div>
  </div>
<br>
  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <p class="col-md-4 mb-0 text-muted">&copy; Copyright © 2022. All rights reserved.</p>



      <ul class="nav col-md-4 justify-content-end">
        <li class="nav-item"><a href="Index.php" class="nav-link px-2 text-muted">Home</a></li>
        <li class="nav-item"><a href="Products.php" class="nav-link px-2 text-muted">Shop</a></li>
        <li class="nav-item"><a href="Contact US.php" class="nav-link px-2 text-muted">Contact Us</a></li>
        <li class="nav-item"><a href="Login admin .php" class="nav-link px-2 text-muted">Connexion</a></li>

      </ul>
    </footer>
  </div>
</div>
     
  
<!-- Bootstrap 5 JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>