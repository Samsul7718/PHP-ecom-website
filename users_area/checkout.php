<!-- connect file -->
<?php 
include('../includes/connect.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecom website</title>
    <!-- bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
     crossorigin="anonymous">
    <!-- font awosome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css file -->
    <link rel="stylesheet" href="./style.css">
    <style>
      .logo{
   width:7%;
   height:7%;
      }
    </style>
</head>
<body>
  <!-- Navbar -->
  <div class="container-fluid p-0">
    <!-- first child -->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="../images/logo.png" alt="" class="logo"/>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../display_all.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="user_registration.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      
    
      </ul>
      <form class="d-flex" action="search_product.php" method="get">
        <input class="form-control me-2" type="search" placeholder="Search" 
        aria-label="Search" name="search_data">
        <input type="submit" value="Search" class="btn btn-outline-light" 
        name="search_data_product">
      </form>
    </div>
  </div>
</nav>

<!-- calling cart function -->

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
<ul class="navbar-nav me-auto">

        <?php
         if(!isset($_SESSION['username'])){
  echo "<li class='nav-item'>
      <a href='#' class='nav-link'>welcome guest</a>
   </li>";
   }else{
   echo " <li class='nav-item'>
          <a class='nav-link' href=''>Welcome ".$_SESSION['username']."</a>
        </li>";

      }
if(!isset($_SESSION['username'])){
  echo " <li class='nav-item'>
          <a class='nav-link' href='./user_login.php'>Login</a>
        </li>";
}else{
   echo " <li class='nav-item'>
          <a class='nav-link' href='logout.php'>Logout</a>
        </li>";

}
        ?>
        
</ul>
</nav>
<!-- third child -->
<div class="bg-light my-3">
    <h3 class="text-center">Twilight Store</h3>
    <p class="text-center">Twilight is a very good store</p>
</div>

<div class="row px-1">
    <div class="col-md-12">
        <div class="row">
            <?php
            if(!isset($_SESSION['username'])){
                include('user_login.php');
            }else{
              include('payment.php');

            }
            ?>
        </div>
    </div>

</div>
    
<div>
<!-- last child -->
<!-- include footer -->
<?php include("../includes/footer.php") ?>

  </div>

    <!-- bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
    crossorigin="anonymous"></script>
</body>
</html>