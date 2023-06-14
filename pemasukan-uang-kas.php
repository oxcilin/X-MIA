<?php
session_start();
include "db_conn.php";

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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />

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
        
      <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <!-- Button trigger modal -->
            <button type="button" class="w-100 btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#uangkasHalaman">
              Add New Page
            </button>
            
            <?php
              if (isset($_SESSION['error'])) {
                echo '
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <i class="fas fa-exclamation-triangle px-2"></i>' . $_SESSION['error'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                unset($_SESSION['error']); // Clear the error message from the session
              }

              if (isset($_SESSION['success'])) {
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fa-regular fa-circle-check px-2"></i>' . $_SESSION['success'] . '
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                unset($_SESSION['success']); // Clear the error message from the session
              }
            ?>

            <!-- MODAL NAMBAH HALAMAN -->
            <div class="modal fade" id="uangkasHalaman" tabindex="-1" aria-labelledby="uangkasHalamanLabel" aria-hidden="true" data-bs-backdrop="static">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="uangkasHalamanLabel">Tambah Halaman <?php include 'templates/name_page-crud.php'?></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <form action="_pemasukan-uang-kas" method="post">
                      <div class="d-flex flex-column flex-md-row gap-3">
                        <div class="mb-3">
                          <label for="tambah-no-nota" class="form-label">No Nota</label>
                          <input type="text" class="w-100 form-control" id="tambah-no-nota" aria-describedby="tambah-no-nota" name="tambah-no-nota" required>
                        </div>
                        <div class="mb-3">
                          <label for="tambah-bulan" class="form-label">Bulan</label>
                          <select name="tambah-bulan" class="form-select" id="tambah-bulan" required>
                            <option selected>Choose Month ----------</option>
                            <option value="Bulan 1">Bulan 1</option>
                            <option value="Bulan 2">Bulan 2</option>
                            <option value="Bulan 3">Bulan 3</option>
                            <option value="Bulan 4">Bulan 4</option>
                            <option value="Bulan 5">Bulan 5</option>
                            <option value="Bulan 6">Bulan 6</option>
                            <option value="Bulan 7">Bulan 7</option>
                            <option value="Bulan 8">Bulan 8</option>
                            <option value="Bulan 9">Bulan 9</option>
                            <option value="Bulan 10">Bulan 10</option>
                            <option value="Bulan 11">Bulan 11</option>
                            <option value="Bulan 12">Bulan 12</option>
                          </select>
                        </div>
                      </div>

                      <div class="mb-3">
                        <label for="tambah-nominal" class="form-label">Nominal</label>
                        <input type="text" class="form-control" id="tambah-nominal" name="tambah-nominal" required>

                        <script>
                          function formatRupiah(angka, prefix) {
                          var number_string = angka.replace(/[^,\d]/g, "").toString(),
                            split = number_string.split(","),
                            sisa = split[0].length % 3,
                            rupiah = split[0].substr(0, sisa),
                            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                          if (ribuan) {
                            separator = sisa ? "." : "";
                            rupiah += separator + ribuan.join(".");
                          }

                          rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
                          return prefix == undefined ? rupiah : rupiah ? "IDR. " + rupiah : "";
                        }

                        document.getElementById("tambah-nominal")
                          .addEventListener("keyup", function (event) {
                            event.preventDefault();
                            var nominal = document.getElementById("tambah-nominal").value;
                            document.getElementById("tambah-nominal").value = formatRupiah(
                              nominal,
                              "IDR. "
                            );
                          });
                        </script>
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="button-add_save" class="btn btn-outline-light">Add</button>
                  </div>
                  </form>
                </div>
              </div>
            </div>

                <?php
                  if (isset($_SESSION['error'])) {
                    echo '
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <i class="fas fa-exclamation-triangle px-2"></i>' . $_SESSION['error'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    unset($_SESSION['error']); // Clear the error message from the session
                  }

                  if (isset($_SESSION['success'])) {
                    echo '
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="fa-regular fa-circle-check px-2"></i>' . $_SESSION['success'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                    unset($_SESSION['success']); // Clear the error message from the session
                  }
                ?>
            </div>
            <div class="col">
              <table class="table">
                  <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date  </th>
                        <th scope="col>">No Nota</th> 
                        <th scope="col">Bulan</th>
                        <th scope="col">Nominal</th>
                        <th scope="col">Action</th>
                      </tr>
                  </thead>
                
                  <tbody>
                      <tr>
                        <th class="col-auto col-sm-1" scope="row">1</th>
                        <td class="col-auto col-sm-3">
                          xx
                        </td>
                        <td class="col-auto">
                          yy
                        </td>
                        <td class="col-auto">
                          zz
                        </td>
                        <td class="col-auto">
                          aa
                        </td>
                        <td class="col-auto col-sm-2">
                          <a type="button" class="badge btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#edit-crud<?= $no ?>"><i class="fa-solid fa-pen-nib"></i></a>
                          <a type="button" class="badge btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#delete-crud<?= $no ?>"><i class="fa-solid fa-trash-can"></i></a>
                        </td>
                      </tr>
                  </tbody>
              </table>
            </div>
        </div>
      </div>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
    <script>
      $(document).ready(function() {
        $('#example').DataTable();
      });
    </script>
  </head>
</html>

<?php 
} else {
  header("Location: index");
  exit();
}
?>
