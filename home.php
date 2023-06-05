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
    <link
      href="./idk/style.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="./idk/simplebar.css"
    />
    <link
      rel="stylesheet"
      href="./idk/simplebar(1).css"
    />

    <!--=============== TITLE ===============-->
    <title>
      <?php
        $filename = pathinfo(__FILE__, PATHINFO_FILENAME);
        $filename = ucwords($filename);
        echo $filename;
      ?> • Oxa</title>

    <!--=============== FONT ===============-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Chivo:wght@300&display=swap"
      rel="stylesheet"
    />

    <!--=============== JS ===============-->
    <script
      type="text/javascript"
      async=""
      src="./idk/js"
    ></script>
  <style>
    html,
    body {
      font-family: "Chivo";
    }
  </style>

  <body class="dark-theme">
    <?php include './templates/sidebar.php'; ?>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent" >
    <?php include './templates/header.php'; ?>

      <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="row">
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-primary-gradient" style="height: 125px;">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start flex-column">
                  <div>
                    <div class="fs-7">
                      <p>Uang Kas (KOTOR)</p>
                    </div>
                    <div class="fs-5 fw-semibold">
                      <?php echo "IDR -"; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-primary-gradient" style="height: 125px;">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start flex-column">
                  <div>
                    <div class="fs-7">
                      <p>Uang Kas (BERSIH)</p>
                    </div>
                    <div class="fs-5 fw-semibold">
                      <?php echo "IDR -"; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-info-gradient" style="height: 125px;">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start flex-column">
                  <div>
                    <div class="fs-7">
                      <p>Total MDR Qris</p>
                    </div>
                    <div class="fs-5 fw-semibold">
                      <?php echo "IDR -"; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-warning-gradient" style="height: 125px;">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start flex-column">
                  <div>
                    <div class="fs-7">
                      <p>Total Pengeluaran</p>
                    </div>
                    <div class="fs-5 fw-semibold">
                      <?php echo "IDR -"; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-sm-6 col-lg-3">
              <div class="card mb-4 text-white bg-danger-gradient" style="height: 125px;">
                <div class="card-body pb-0 d-flex justify-content-between align-items-start flex-column">
                  <div>
                    <div class="fs-7">
                      <p>Sisa Uang Kas</p>
                    </div>
                    <div class="fs-5 fw-semibold">
                      <?php echo "IDR -"; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
  </div>
  </div>
      <?php include './templates/footer.php'; ?>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="./idk/coreui.bundle.min.js.download"></script>
    <script src="./idk/simplebar.min.js.download"></script>
    <script>
      if (document.body.classList.contains("dark-theme")) {
        var element = document.getElementById("btn-dark-theme");
        if (typeof element != "undefined" && element != null) {
          document.getElementById("btn-dark-theme").checked = true;
        }
      } else {
        var element = document.getElementById("btn-light-theme");
        if (typeof element != "undefined" && element != null) {
          document.getElementById("btn-light-theme").checked = true;
        }
      }

      function handleThemeChange(src) {
        var event = document.createEvent("Event");
        event.initEvent("themeChange", true, true);

        if (src.value === "light") {
          document.body.classList.remove("dark-theme");
        }
        if (src.value === "dark") {
          document.body.classList.add("dark-theme");
        }
        document.body.dispatchEvent(event);
      }
    </script>
  </body>
</html>

<?php 
} else {
  header("Location: index");
  exit();
}
?>