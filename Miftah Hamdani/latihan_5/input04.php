<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Form</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $nameErr = $emailErr = "";
    $name = $email = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameErr = "Name Is Required";
        } else {
            $name = $_POST['name'];
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only Leters and white space Allowed";
            }
        }
        if (empty($_POST['email'])) {
            $emailErr = "Email Is Required";
        } else {
            $email = $_POST['email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid Email Format";
            }
        }
    }
    ?>
    <h2>PHP Form Dengan Validation</h2>
    <p>
        <span class="error">* required field.</span>
    </p>
    <form action="" method="POST" name="input">
        Name : <input type="text" name="name" id="name" value="<?= $name ?>">
        <span class="error">*<?= $nameErr ?></span><br><br>
        Email : <input type="text" name="email" id="email" value="<?= $email ?>">
        <span class="error">*<?= $emailErr ?></span><br><br>
        <input type="submit" name="input" value="input"> <br><br><br><br>
    </form>
</body>

</html>
<?php

if (isset($_POST['input'])) {
    if (empty($_POST['name'])) {
        $name = "Silahkan Masukan Nama Anda !!!!!!";
    } else {
        $name = $_POST['name'];
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $name = "Hanya Huruf dan spasi yang diperbolehkan";
        }
    }
    if (empty($_POST['email'])) {
        $email = "Silahkan Masukan Email Anda !!!!!!";
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = "Format Email tidak Valid";
        }
    }
    echo "Nama Anda : <b>$name</b> <br> <br>";
    echo "Email Anda : <b>$email</b> <br> <br>";
}
