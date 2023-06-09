<?php

$file = file_get_contents('customers.json');
$data_pelanggan = json_decode($file);

$data_pelanggan[] = array(
    "id_pelanggan"=> $_GET['id'],
    "nama_pelanggan"=> $_GET['nama'],
    "alamat"=> $_GET['alamat'],
    "no_tlp"=> $_GET['nohp'],
    "pekerjaan"=> $_GET['pekerjaan'],
);

$json_pelanggan_update = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan_update);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Edited</h1>
    <a href="view.php"><button>Back</button></a>
</body>
</html>