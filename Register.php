<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
    <title>Maison du Pêcheur</title></head>
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


<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form action = "testregister.php"  methode ="POST" class="mx-1 mx-md-4" >

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" class="form-control" />
                      <label class="form-label" for="form3Example1c">Your Name</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="email" class="form-control" />
                      <label class="form-label" for="form3Example3c">Your Email</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" class="form-control" />
                      <label class="form-label" for="form3Example4c">Password</label>
                    </div>
                  </div>


                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" value="register" class="btn btn-primary btn-lg">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="img/1.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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

</body>
</html>