<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Fiolina | about </title>
</head>
<body>
    <!-- <h1> Halaman About</h1>
    <h3> Fiolina Tafani </h3>
    <p> tafanifiolina@gmail.com</p>
    <img src="images/telkom.png" alt="telkom" width="200px">  -->

    <body>
        <h1> Halaman About </h1>
        <h3> <?= $nama; ?> </h3>
        <h3> <?= $email; ?> </h3>
        <img src="images/<?= $gambar; ?>" alt="<?= $nama; ?>" width="200px">
    </body>

</body>
</html>