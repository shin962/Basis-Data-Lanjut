<?php

$data_pelanggan [] = array(
                        'id_pelanggan' => 'P001',
                        'nama_pelanggan' => array('nama_depan'=>'Kadek', 'nama_belakang'=>'William Darmawan'),
                        'alamat' => 'Canggu',
                        'no_tlp' => '087798951475',
                        'pekerjaan' => 'Data Analyst',
);

$data_pelanggan [] = array(
                        'id_pelanggan' => 'P002',
                        'nama_pelanggan' => array('nama_depan'=>'Kadek', 'nama_belakang'=>'Sri Dwi Wijayanti'),
                        'alamat' => 'Ubung',
                        'no_tlp' => '087839254732',
                        'pekerjaan' => 'Web Developer',
);

$data_pelanggan [] = array(
                        'id_pelanggan' => 'P003',
                        'nama_pelanggan' => array('nama_depan'=>'Ngurah', 'nama_belakang'=>'Bagus Putra Arthawan'),
                        'alamat' => 'Ayani',
                        'no_tlp' => '087382019562',
                        'pekerjaan' => 'Programmer',
);

$json_multidimension = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers_multidimension.json', $json_multidimension);

    $file = file_get_contents('customers_multidimension.json');
    $multidimension_customers = json_decode($file);

// echo($multidimension_customers[1]->nama_pelanggan->nama_depan);

foreach ($multidimension_customers as $customers){
    echo $customers->nama_pelanggan->nama_depan.'<br>';
}
?>