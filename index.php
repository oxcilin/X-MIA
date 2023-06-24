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
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />

    <!--=============== TITLE ===============-->
    <title><?php include 'templates/name_page.php'?></title>

    <!--=============== FONT ===============-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <style>
      <?php include 'templates/home/css.css'?>
    </style>

    <body>
      <?php include 'templates/home/navbar.php'?>

      <div class="px-4 py-5 my-5 text-center">
        <img
          class="pic-logo d-block mx-auto mb-4"
          src="logo.jpg"
          alt=""
          width="100"
          height="100"
        />
        <h1 class="display-5 fw-bold text-body-emphasis"><?php include 'templates/kelas.php'?></h1>
        <div class="col-lg-6 mx-auto">
          <p class="title-school">
            <i class="bi bi-caret-right"></i> SMAS SUTOMO 1 <i class="bi bi-caret-left"></i>
          </p>
        </div>
        <div class="col-lg-6 mx-auto">
          <p class="lead mb-4">Senior High School in Medan, North Sumatra</p>
        </div>
      </div>

      <?php include 'templates/home/footer.php'?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
  </head>
</html>
