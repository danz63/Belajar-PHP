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
    $jurusanErr = "";
    $jurusan = "";
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST['jurusan'])) {
            $jurusanErr = "Jurusan Is Required";
        } else {
            $jurusan = $_POST['jurusan'];
        }
    }
    ?>
    <form action="">
        <h2>Pilih Jurusan Anda</h2>
        <input type="radio" name="jurusan" <?= (isset($jurusan) && $jurusan == "TI")  ?> value="TI">
    </form>
</body>

</html>