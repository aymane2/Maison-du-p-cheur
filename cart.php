
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
if(isset($_GET['del'])){
  $id_del = $_GET['del'] ;
  //suppression
  unset($_SESSION['panier'][$id_del]);
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  

    <title>Shooping cart</title>
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

 <section class="h-100" style="background-color: #eee;">
  <div class="container h-100 py-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-10">

        <div class="d-flex justify-content-between align-items-center mb-4">
          <h3 class="fw-normal mb-0 text-black">Shopping Cart</h3>
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
        <div class="card rounded-3 mb-4">
          <div class="card-body p-4">
            <div class="row d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img src="products/<?= $product['image']?>"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <p class="lead fw-normal mb-2"><?= $product['nom']?></p>
              </div>
             <div  class="col-md-3 col-lg-3 col-xl-2 d-flex">
             <?=$_SESSION['panier'][$product['id']] ?>              

            </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                <h5 class="mb-0"><?= $product['prix']?>$</h5>
              </div>
            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
            <a href="cart.php?del=<?=$product['id']?>"><img src="Img/delete1.png"></a>
            </div>
            </div>
          </div>
        </div>
        <?php endforeach ;} ?>

        <tr class="total">
               <br> <th>Total : <?=$total?>$</th>
        </tr>



        <div class="card">
          <div class="card-body">
            <a button href="checkout.php" type="button" class="btn btn-warning btn-block btn-lg">Proceed to Pay</a></button>
          </div>
        </div>
      </div>
    </div>

  </div>
  <section style="background-color: #eee;">

</section>

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
</section>
 </section>
 <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/6eaa1d41d0.js" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>