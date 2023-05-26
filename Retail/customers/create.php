<?php

$data_pelanggan [] = array(
                        'id_pelanggan' => 'P001',
                        'nama_pelanggan' => 'Shin',
                        'alamat' => 'Canggu',
                        'no_tlp' => '087798951475',
                        'pekerjaan' => 'Data Analyst',
);

$data_pelanggan [] = array(
                        'id_pelanggan' => 'P002',
                        'nama_pelanggan' => 'Asa Wijaya',
                        'alamat' => 'Ubung',
                        'no_tlp' => '087839254732',
                        'pekerjaan' => 'Designer',
);

$data_pelanggan [] = array(
                        'id_pelanggan' => 'P003',
                        'nama_pelanggan' => 'Ngurah Nguyen',
                        'alamat' => 'Ayani',
                        'no_tlp' => '087382019562',
                        'pekerjaan' => 'Programmer',
);


$json_pelanggan = json_encode($data_pelanggan, JSON_PRETTY_PRINT);
file_put_contents('customers.json', $json_pelanggan);






?>