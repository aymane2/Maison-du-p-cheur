<?php

$host="localhost";
$user="root";
$password="";
$db="user";

session_start();


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}


if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$email=$_POST["email"];
	$password=$_POST["password"];


	$sql="select * from logine where email='".$email."' AND password='".$password."' ";

	$result=mysqli_query($data,$sql);

	$row=mysqli_fetch_array($result);

	if($row["usertype"]=="user")
	{	

		$_SESSION["email"]=$email;

		header("location:index.php");
	}

	elseif($row["usertype"]=="admin")
	{

		$_SESSION["email"]=$email;
		
		header("location:adminhome.php");
	}

	else
	{
		echo "email or password incorrect";
	}

}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>Maison du Pêcheur</title>

<style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}

</style>
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
        <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Contact US.php"><b>Contact Us</b></a>
        </li>
        <li class="nav-item"> <a class="nav-link" style="color:#000000" href="Login admin .php"><b>Connexion</b></a> </li>

      </ul>
    </div>

  </div>
  <section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="img/1.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form action="#" method="POST">
 

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" name="email"  class="form-control form-control-lg"
              placeholder="Enter a valid email address" required />
            <label class="form-label" for="form3Example3">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" name="password"  class="form-control form-control-lg"
              placeholder="Enter password" required/>
            <label class="form-label" for="form3Example4">Password</label>
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
            <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>
            </div>
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" value="Login" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.php"
                class="link-danger">Register</a></p>
          </div>

        </form>
      </div>
    </div>
  </div>
  <div
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
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      </form>


</body>
</html>