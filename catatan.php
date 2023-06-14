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
                <form action="_catatan" method="POST">
                    <div class="mb-3">
                      <label class="form-label">Catatan</label>
                      <textarea class="form-control" style="max-height: 186px; resize: vertical;" rows="3" name="tambah-catatan" required></textarea>
                    </div>
                    <button type="submit" name="button-add_save" class="textfield w-100 btn btn-outline-light btn-sm">Add</button>
                </form>

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
              <table class="table" id="myTable">
                  <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date  </th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Action</th>
                      </tr>
                  </thead>
                  
                  <?php
                    $no = 1;
                    $tampil = mysqli_query($conn, "SELECT * FROM catatan");
                    while ($data = mysqli_fetch_array($tampil)) :
                  ?>

                    <tbody>
                        <tr>
                          <th class="col-auto col-sm-1" scope="row">
                            <?= $no++ ?>
                          </th>
                          <td class="col-auto col-sm-3">
                            <?= $data['date'] ?>
                          </td>
                          <td class="col-auto">
                            <?= nl2br($data['catatan']) ?>
                          </td>
                          <td class="col-auto col-sm-2">
                            <a type="button" class="badge btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#edit-crud<?= $no ?>"><i class="fa-solid fa-pen-nib"></i></a>
                            <a type="button" class="badge btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#delete-crud<?= $no ?>"><i class="fa-solid fa-trash-can"></i></a>
                          </td>
                        </tr>
                    </tbody>

                    <!-- CRUD FOR EDIT -->
                    <div class="modal fade" id="edit-crud<?= $no ?>" tabindex="-1" aria-labelledby="edit-crud" data-bs-backdrop="static" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="edit-crud">Edit Data <?php include 'templates/name_page-crud.php'?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="_catatan" method="post">
                              <input type="hidden" name="id_cttn" value="<?= $data['id'] ?>">
                              <div class="mb-3">
                                <label for="edit-no" class="form-label">#</label>
                                <input type="text" class="form-control" id="edit-no" name="edit-no" value="<?= $no ?>" required readonly>
                              </div>
                              <div class="mb-3">
                                <label for="edit-date" class="form-label">Date</label>
                                <input type="text" class="form-control" id="edit-date" value="<?php echo date('Y-m-d H:i:s'); ?>" name="edit-date" required readonly>
                              </div>
                              <div class="mb-3">
                                <label for="edit-form" class="form-label">Catatan</label>
                                <textarea class="form-control" id="edit-form" style="max-height: 139px; resize: vertical;" rows="3" name="edit-catatan" required><?= $data['catatan'] ?></textarea>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="button-edit_save" class="btn btn-outline-warning">Save changes</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>

                    <!-- CRUD FOR DELETE -->
                    <div class="modal fade" id="delete-crud<?= $no ?>" tabindex="-1" aria-labelledby="delete-crud" data-bs-backdrop="static" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="delete-crud">Confirmation Delete Data <?php include 'templates/name_page-crud.php'?></h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            <form action="_catatan" method="post">
                              <input type="hidden" name="id_cttn" value="<?= $data['id'] ?>">
                              <p style="text-align: justify;">Are you sure you want to delete this data?</p>

                              <div class="mb-3 row">
                                <label for="delete-no" class="col-sm-2 col-form-label">#</label>
                                <div class="col-sm-10">
                                  <input type="text" name="hapus-no" readonly class="form-control-plaintext" id="delete-no" value="<?= $no ?>" required>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="delete-date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                  <input type="text" name="hapus-date" readonly class="form-control-plaintext" id="delete-date" value="<?= $data['date']?>" required>
                                </div>
                              </div>
                              <div class="mb-3 row">
                                <label for="delete-catatan" class="col-sm-2 col-form-label">Catatan</label>
                                <div class="col-sm-10">
                                  <textarea type="text" name="hapus-catatan" readonly class="form-control-plaintext" id="delete-catatan" style="max-height: 139px; resize: vertical;" rows="3" required><?= $data['catatan']?></textarea>
                                </div>
                              </div>
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="pernyataan" required>
                                <label class="form-check-label" for="pernyataan">
                                  I understand the data I delete can't be redone.
                                </label>
                              </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="button-delete_save" class="btn btn-outline-danger">Yes, Delete It</button>
                          </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  <?php endwhile; ?>
              </table>
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
