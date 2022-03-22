<?php require("server.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <title>Housekeeper Admin Login</title>
   <?php require("meta.php"); ?>
</head>

<body class="bg-gray-200">

   <div class="container position-sticky z-index-sticky top-0">
      <div class="row">
         <div class="col-12">
            <!-- Navbar -->
            <nav
               class="navbar navbar-expand-lg blur border-radius-xl top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
               <div class="container-fluid ps-2 pe-0">
                  <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="login.php">
                     <i class="fas fa-box-tissue " aria-hidden="true"></i>
                     HouseKeeping
                  </a>
                  <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                     data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                     aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon mt-2">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                     </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navigation">
                     <ul class="navbar-nav mx-auto">

                        <li class="nav-item">
                           <a class="nav-link me-2" href="login.php">
                              <i class="fa fa-user opacity-6 text-dark me-1"></i>
                              Student login
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link me-2" href="alogin.php">
                              <i class="fas fa-user-circle opacity-6 text-dark me-1"></i>
                              Admin login
                           </a>
                        </li>

                     </ul>
                     <ul class="navbar-nav d-lg-block d-none">
                        <li class="nav-item">
                           <a class="btn bg-gradient-primary  mb-0" href="https://wa.me/16478639527" target="_blank"
                              type="button"> <i class="fas fa-headset" aria-hidden="true"></i> Support</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
            <!-- End Navbar -->
         </div>
      </div>
   </div>
   <main class="main-content  mt-0">
      <div class="page-header align-items-start min-vh-100" style="background-image: url('./assets/img/abg.jpg');">
         <span class="mask bg-gradient-primary opacity-2"></span>
         <div class="container my-auto">
            <div class="row">
               <div class="col-lg-4 col-md-8 col-12 mx-auto">
                  <div class="card z-index-0 fadeIn3 fadeInBottom ">
                     <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 ">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                           <h4 class="text-white font-weight-bolder text-center mt-2 mb-0"> Admin login </h4>
                           <div class="row mt-3">

                           </div>
                        </div>
                     </div>
                     <div class="card-body">

                        <form action="" method="POST" autocomplete="off" class="text-start">
                           <?php include("errors.php") ?>
                           <div class="input-group input-group-outline my-3">
                              <input type="text" name="adminUsername" id="rollnumber" class="form-control" required>
                              <label class="form-label" for="rollnumber">Username</label>
                           </div>
                           <div class="input-group input-group-outline mb-3">
                              <input type="password" name="adminPassword" id="password" class="form-control" required>
                              <label class="form-label" for="password">Password</label>
                           </div>

                           <div class="form-check form-switch d-flex align-items-center mb-3">
                              <input class="form-check-input" type="checkbox" id="rememberMe">
                              <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
                           </div>
                           <button type="submit" name="adminLogin" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign
                              in</button>
                        </form>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <footer class="footer position-absolute bottom-2 py-2 w-100">
            <div class="container">
               <div class="row align-items-center justify-content-lg-between">
                  <div class="col-12 col-md-6 my-auto">
                     <div class="copyright text-center text-sm text-lg-start">
                        © 2022
                     </div>
                  </div>
                  <div class="col-12 col-md-6">
                     <ul class="nav nav-footer justify-content-center justify-content-lg-end">

                        <li class="nav-item">
                           <a href="pages/about-us.php" class="nav-link">About Us</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </footer>
      </div>
   </main>
   <?php require("footer.php"); ?>
</body>

</html>
