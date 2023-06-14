<?php
session_start();
// Memanggil file koneksi ke database
include "db_conn.php";

echo "
<!DOCTYPE html>
<html>
<head>
  <style>
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        font-family: sans-serif;
    }

    body {
        flex-direction: column;
    }

    h1, h2 {
        text-align: center;
    }
  </style>
</head>
<body>
  <h1>jgn masuk ke sini, balek kembali yaa ;3</h1>
  <h2><a href='pemasukan-uang-kas'>kembali</a></h2>
</body>
</html>
";

// add
if (isset($_POST['button-add_save'])) {
  // save data baru
  $no_nota = $_POST['tambah-no-nota'];
  $bulan = $_POST['tambah-bulan'];
  $nominal = $_POST['tambah-nominal'];
  
  $simpan = mysqli_query($conn, "INSERT INTO tambah halaman pemasukan uang kas (id, date, no nota, bulan, nominal) 
  VALUES (NULL, CURRENT_TIMESTAMP, '$no_nota', '$bulan', '$nominal')");
  
  if ($simpan) {
    $_SESSION['success'] = "Note has been added successfully.";
    header("Location: catatan");
    exit();
  } else {
    $_SESSION['error'] = "An error occurred while processing the request. " . mysqli_error($conn);
    header("Location: catatan");
    exit();
  }
}

// edit
if (isset($_POST['button-edit_save'])) {
  $catatan = $_POST['edit-catatan'];

  $simpan = mysqli_query($conn, "UPDATE catatan SET
                                  id = '" . $_POST['edit-no'] . "',
                                  date = '" . $_POST['edit-date'] . "',
                                  catatan = '" . $_POST['edit-catatan'] . "'
                                WHERE id = '" . $_POST['id_cttn'] . "'");
                                
  if ($simpan) {
    $_SESSION['success'] = "Note has been updated successfully.";
    header("Location: catatan");
    exit();
  } else {
    $_SESSION['error'] = "An error occurred while processing the request. " . mysqli_error($conn);
    header("Location: catatan");
    exit();
  }
}

// Delete
if (isset($_POST['button-delete_save'])) {
  $hapus = mysqli_query($conn, "DELETE FROM catatan WHERE id = '" . $_POST['id_cttn'] . "'");
  
  if ($hapus) {
    $_SESSION['success'] = "Note has been deleted successfully.";
    header("Location: catatan");
    exit();
  } else {
    $_SESSION['error'] = "An error occurred while processing the request. " . mysqli_error($conn);
    header("Location: catatan");
    exit();
  }
}

?>
