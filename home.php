<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

    ?>

<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta property="og:site_name" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1280" />
    <meta property="og:image:height" content="800" />
    <meta property="twitter:card" content="summary_large_image" />

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="theme-color" content="#ffffff" />
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon" />

    <!--=============== REMIX ICONS ===============-->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
      rel="stylesheet"
    />

    <!--=============== CSS ===============-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/additional.css" />

    <!--=============== TITLE ===============-->
    <title>
      <?php include 'templates/name_page.php'?>
    </title>

    <!--=============== FONT ===============-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Chivo:wght@300&display=swap"
      rel="stylesheet"
    />

    <style>
      <?php include 'templates/additional.css'?> 
    </style>

    <body>
      <?php include 'templates/navbar.php'; ?>
      <?php include 'templates/news.php'; ?>
        
        <!-- Uang Kas 1  -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow-lg h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div
                    class="text-xs font-weight-bold text-primary text-uppercase mb-1"
                  >
                    Uang Kas
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    IDR 40.000
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fa-solid fa-piggy-bank fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Uang Kas 2  -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow-lg h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div
                    class="text-xs font-weight-bold text-success text-uppercase mb-1"
                  >
                    Uang Kas
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    IDR 40.000
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fa-solid fa-piggy-bank fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Uang Kas 3  -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow-lg h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div
                    class="text-xs font-weight-bold text-info text-uppercase mb-1"
                  >
                    Uang Kas
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    IDR 40.000
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fa-solid fa-piggy-bank fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Uang Kas 4  -->
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow-lg h-100 py-2">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div
                    class="text-xs font-weight-bold text-warning text-uppercase mb-1"
                  >
                    Uang Kas
                  </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">
                    IDR 40.000
                  </div>
                </div>
                <div class="col-auto">
                  <i class="fa-solid fa-piggy-bank fa-2x text-gray-300"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </head>
</html>

<?php 
} else {
  header("Location: index");
  exit();
}
?>
