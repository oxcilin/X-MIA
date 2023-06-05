<?php
include "db_conn.php";
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

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.dataTables.min.css" />

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

    .dt-buttons {
      color: #fff;
    }
  </style>

  <body class="dark-theme">
    <?php include './templates/sidebar.php'; ?>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light dark:bg-transparent" >
    <?php include './templates/header.php'; ?>

    
    <div class="body flex-grow-1 px-3">
      <form method="POST" action="_catatan" >
          <div style="display: flex;">
            <div name="catatan" rows="2" cols="50" class="form-floating" style="flex: 1;">
              <textarea list="names" name="catatan" class="form-control" placeholder=" " id="floatingTextarea2" style="height: 100px" required></textarea>
              <label for="floatingTextarea2">Catatan</label>
              <br>
            </div>
            <br>
            <div style="margin-left: 10px;">
              <button class="w-100 btn btn-primary btn-sm" type="submit" name="submit">Add</button>
            </div>
         </div>
      </form>

      <table id="data" class="display nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Catatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
          <?php

          $no = 1;
          $tampil = mysqli_query ($conn, "SELECT * FROM catatan ORDER BY id DESC");
          while ($data = mysqli_fetch_array($tampil)) :
          ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data['tanggal']; ?></td>
              <td><?= $data['jam']; ?></td>
              <td><?= $data['textarea']; ?></td>
              <td>
                <button id="notify" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-nib"></i></button>
                <button id="notify" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash-can"></i></button>
              </td>
            </tr>
        </tbody>
        <?php endwhile; ?>
    </table>
    </div>
    </div>
      <?php include './templates/footer.php'; ?>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>

    <script>
      $(document).ready(function() {
          $('#data').DataTable( {
              dom: 'Bfrtip',
              buttons: [
                  'excel', 'print'
              ]
          } );
      } );
    </script>

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