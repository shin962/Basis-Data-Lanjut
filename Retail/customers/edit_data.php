<?php
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$pekerjaan = $_POST['pekerjaan'];

$file = file_get_contents('customers.json');
$data_pelanggan = json_decode($file);

foreach ($data_pelanggan as $key => $value) {
    if($value->id_pelanggan == $id) {
        $data_pelanggan[$key]->nama_pelanggan = $nama;
        $data_pelanggan[$key]->alamat = $alamat;
        $data_pelanggan[$key]->no_tlp = $nohp;
        $data_pelanggan[$key]->pekerjaan = $pekerjaan;
    }
}

$json_pelanggan_update = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan_update);
header("Location: view.php");

?>