<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Here</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <?php
    $emailErr = $passwordErr = "";
    $email = $password = "";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['email'])) {
            $emailErr = "Kolom Email Harus Diisi";
        } else {
            $email = $_POST['email'];

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Format Email Tidak Valid";
            }
        }

        if (empty($_POST['password'])) {
            $passwordErr = "Kolom Password Harus Diisi";
        } else {
            $password = $_POST['password'];

            if (!is_numeric($password)) {
                $passwordErr = "Password hanya boleh berupa nomor";
            }
        }
    }
    ?>
    <form action="" method="POST">
        <h2>Login Here..</h2>
        E-mail : <input type="text" name="email" value="<?= $email ?>">
        <span class="error">* <?= $emailErr ?></span><br><br>
        Password : <input type="password" name="password" value="<?= $password ?>">
        <span class="error">* <?= $passwordErr ?></span><br><br>
        <input type="submit" name="login" value="login">
        <input type="reset" name="reset" value="reset">
    </form>

    <?php
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $password = trim($_POST['password']);
        if ($email == 'hamdan.miftah63@gmail.com' && $password == '6363') {
            echo "<h2>Login Berhasil</h2>";
        } else {
            echo "<h2>Login Gagal</h2>";
        }
    }
    ?>
</body>

</html>