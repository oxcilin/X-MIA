<?php
session_start();
// Memanggil file koneksi ke database
include "db_conn.php";
require "dompdf/autoload.php";

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
  <h2><a href='catatan'>kembali</a></h2>
</body>
</html>
";

?>
