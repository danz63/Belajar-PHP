<?php
if (isset($_POST['input'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penanganan Form</title>
</head>

<body>
    <form action="" method="POST" name="input">
        Name : <input type="text" name="name" id="name" value="<?= isset($name) ? $name : '' ?>"> <br><br>
        Email : <input type="text" name="email" id="email" value="<?= isset($email) ? $email : '' ?>"> <br><br>
        <input type="submit" name="input" value="input"> <br><br><br><br>
    </form>
</body>

</html>
<?php

if (isset($_POST['input'])) {
    echo "Nama Anda : <b>$name</b> <br> <br>";
    echo "Email Anda : <b>$email</b> <br> <br>";
}
