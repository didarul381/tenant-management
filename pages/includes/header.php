<?php session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="../../../teant-menagement/asset/css/style.css">
    <title>Tenant Management!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light  bg-dark text-white border-bottom border-primary">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mx-auto">
        <?php
         if(isset($_SESSION['email'])){?>
        <li class="nav-item font-weight-bold">
          <a class="nav-link text-white " href="router.php?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="router.php?page=add-tenant">Add</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white font-weight-bold" href="router.php?page=logout">Logout</a>
        </li>
        <?php } else{?>
            <li class="nav-item ">
          <a class="nav-link text-white font-weight-bold" href="router.php?page=registration">Singup</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-white font-weight-bold" href="router.php?page=login">Login</a>
        </li>
        <?php }?>
        
      </ul>
    </div>
  </div>
</nav>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

   

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  
  </body>
</html>