<?php
session_start();
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
  <h1>kembali skrg ya ;3</h1>
  <h2><a href='login'>kembali ke login</a></h2>
</body>
</html>
";


if (isset($_POST['email']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $email = validate($_POST['email']);
    $password = validate($_POST['password']);

    if (empty($email)) {
        $_SESSION['error'] = "Email is required";
    } else if (empty($password)) {
        $_SESSION['error'] = "Password is required";
    } else {
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home");
                exit();
            } else {
                $_SESSION['error'] = "Incorrect email or/and password";
            }
        } else {
            $_SESSION['error'] = "Incorrect email or/and password";
        }
    }

    header("Location: login");
    exit();
}
?>
