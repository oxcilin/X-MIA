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
  </head>
  <style>
    html,
    body {
      height: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: "Chivo";
      user-select: none;
    }

    .login-form {
      width: 400px;
    }

    .login-form .btn {
      width: 100%;
    }

    .form-group input {
      width: 100%;
    }

    /* Media query for screens larger than 768px (laptop screens) */
    @media (min-width: 768px) {
      .login-form {
        width: 500px; /* Adjust the width as per your requirement */
      }

      .login-form .btn {
        width: 100%; /* Set the button width to 100% within the larger screens */
      }
    }

    .logo-container {
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .logo-title {
      filter: drop-shadow(0px 0px 10px rgba(255, 255, 255, 0.5)) brightness(1.1);
    }

    .separator {
      margin: 0 20px;
      font-size: 12px;
      opacity: 0.5;
    }

    .form-control:focus,
    .form-control:active {
      outline: none;
      box-shadow: none;
    }

    .form-control:focus {
      border-color: #fff;
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
    }

    select.form-select:focus,
    select.form-select:active {
      outline: none;
      box-shadow: none;
    }

    select.form-select:focus {
      border-color: #fff;
      box-shadow: 0 0 0 0.2rem rgba(255, 255, 255, 0.25);
    }

  </style>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form action="_login" method="post" class="login-form">
          <div class="logo-container">
            <img src="pancasila.png" alt="Logo Pancasila" class="logo-title" width="100" height="100">
            <span class="separator">|</span>
            <img src="sut.png" alt="Logo Sut" class="logo-title" width="100" height="100">
          </div>

            <br>
            <?php session_start();
            if (isset($_SESSION['error'])) {
              echo '
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <i class="fas fa-exclamation-triangle px-2"></i>' . $_SESSION['error'] . '
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              unset($_SESSION['error']); // Clear the error message from the session
            }?>

            
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email"/>
            </div>
            <div class="mb-3">
              <label class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" />
            </div>
            <button type="submit" class="w-100 btn btn-outline-light">🚀</button>
          </form>
        </div>
      </div>
    </div>

    <!-- SCRIPT -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
      integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
      integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
