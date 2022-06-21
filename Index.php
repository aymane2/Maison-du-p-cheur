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
?><!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Home page.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Maison du Pêcheur</title>

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
    <!--Slide-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/1.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption text-end">
            <a style="color:#000000">
              <h3><b>MEGA SALE.</b></h3>
            </a>
            <a style="color:#ffc107"><b>
                <h3>ONLY TODAY.</h3></a></b>
            <a class="btn btn-lg btn-primary btn-rounded" href="Products.php">Shop Now</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="Img/2.webp" class="d-block w-100" alt="...">
          <div class="carousel-caption text-end">
            <a style="color:#000000">
              <h3><b>MEGA SALE.</b></h3>
            </a>
            <a style="color:#ffc107"><b>
                <h3>ONLY TODAY.</h3></a></b>
            <a class="btn btn-lg btn-primary btn-rounded" href="Products.php">Shop Now</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <?php
       $req = mysqli_query($data, "SELECT * FROM moulinets");
        while($row = mysqli_fetch_assoc($req)){
    ?>
    <br></br></br>
    <h2>Top <b>Categories.</b></h2>
    <br>

    <div class="container mt-2">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="card card-block">
            <a href="Ensembles.php"><img src="Img/Ensembles/1-2.png" alt= ""></a>
            <h5 class="card-title mt-3 mb-3">Ensembles </h5>
      </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card card-block">
            <a href="Moulinets.php"><img src="Img/Moulinet/1-2.png" alt= ""></a>
            <h5 class="card-title  mt-3 mb-3">Moulinets</h5>
      </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card card-block">
            <a href="Filaments.php"><img src="Img/Filaments/1-2.png" alt= ""></a>
            <h5 class="card-title  mt-3 mb-3">Filaments</h5>
      </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="card card-block">
            <a href="Cannes.php"><img src="Img/Cannes/1-2.png" alt= ""></a>
            <h5 class="card-title  mt-3 mb-3">Cannes</h5>
      </div>
        </div>    
      </div>
      
    </div>
    <br></br>
    <?php }?>

    <h2>Nos <b>Offres.</b></h2>

    <br></br>

    <hr class="featurette-divider">
    <br></br>

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        
          <br></br>    
  
       <h1 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h1>
       <br>    
      <h4  class="item-price"><strike>$400.00</strike> <b>$369.00</b></h4>
    <br>    
  
       <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
     <br>
     <a class="btn btn-warning btn-lg btn-block" href="Ensembles 1.php">Learn More</a>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="Img/Ensembles/1.png" alt="Logo HTML w3" style="width:500px; height:500px" class="img-thumbnail"> 
        
      </div>
    </div>

    <br></br>

    <hr class="featurette-divider">

    <br></br>

    <div class="row featurette">
      <div class="col-md-7 ">
        
          <br></br>    
  
       <h1 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h1>
       <br>    
      <h4  class="item-price"><strike>$400.00</strike> <b>$369.00</b></h4>
    <br>    
  
       <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
     <br>
     <a class="btn btn-warning btn-lg btn-block" href="Moulinets 1.php">Learn More</a>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="Img/Moulinet/1.png" alt="Logo HTML w3" style="width:500px; height:500px" class="img-thumbnail"> 
        
      </div>
    </div>

    <br></br>

    <hr class="featurette-divider">

    <br></br>

    <div class="row featurette ">
      <div class="col-md-7 order-md-2">
        
          <br></br>    
  
       <h1 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">See for yourself.</span></h1>
       <br>    
      <h4  class="item-price"><strike>$400.00</strike> <b>$369.00</b></h4>
    <br>    
  
       <p class="lead">Another featurette? Of course. More placeholder content here to give you an idea of how this layout would work with some actual real-world content in place.</p>
     <br>
     <a class="btn btn-warning btn-lg btn-block" href="Cannes 1.php">Learn More</a>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="Img/Cannes/1.png" alt="Logo HTML w3" style="width:500px; height:500px" class="img-thumbnail"> 
        
      </div>
    </div>

    <br></br>
    <hr class="featurette-divider">
    <br></br>
    <div class="container">

    <div class="row ">

     <div class="col-lg-4 ">
      <div class="h1">  
      <i class="fa-solid fa-plane-circle-check"></i>     
      </div>
        <h3>Free & Fast Shipping</h3>
      </div> 
      <!-- /.col-lg-4 -->

      <div class="col-lg-4 md-auto">
        <div class="h1">
          <i class="fa-solid fa-square-check "></i>         
        </div>  
          <h3>Trusted Store</h3>
      </div>
        <!-- /.col-lg-4 -->

       <div class="col-lg-4 md-auto">
        <div class="h1">
          <i class="fa-regular fa-star "></i>       
       </div>
         <h3>4.8/5</h3>
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

  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/6eaa1d41d0.js" crossorigin="anonymous"></script>

    </body>

</html>
