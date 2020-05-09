<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penanganan Form - Text</title>
</head>

<body>
    <?php
    $nama1 = isset($_POST['nama1']) ? $_POST['nama1'] : "";
    $nama2 = isset($_POST['nama2']) ? $_POST['nama2'] : "";
    $nama3 = isset($_POST['nama3']) ? $_POST['nama3'] : "";
    $nama4 = isset($_POST['nama4']) ? $_POST['nama4'] : "";
    ?>
    <form action="" method="POST">
        Sahabat-Sahabat Dekatku <br>
        <input type="text" name="nama1" value="<?= $nama1 ?>"><br><br>
        <input type="text" name="nama2" value="<?= $nama2 ?>"><br><br>
        <input type="text" name="nama3" value="<?= $nama3 ?>"><br><br>
        <input type="text" name="nama4" value="<?= $nama4 ?>"><br><br>
        <input type="submit" name="input" value="input"> <br><br>
    </form>
    <?php
    if (isset($_POST['input'])) {
        echo "<b>Nama Sahabat-sahabat Dekatku : </b> <br>";
        echo "$nama1 <br>";
        echo "$nama2 <br>";
        echo "$nama3 <br>";
        echo "$nama4 <br>";
    }
    ?>
</body>

</html>