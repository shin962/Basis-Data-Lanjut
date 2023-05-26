<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="display-5 text-center">Data Pelanggan</h1>
        <?php

        $file = file_get_contents('customers.json');
        $data_pelanggan = json_decode($file);
        ?>
        
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead class="bg-secondary">
                        <tr>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Tlp</th>
                            <th>Pekerjaan</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        <?php
                        foreach ($data_pelanggan as $pelanggan) { ?>
                            <tr>
                                <td><?php echo $pelanggan->id_pelanggan ?></td>
                                <td><?php echo $pelanggan->nama_pelanggan ?></td>
                                <td><?php echo $pelanggan->alamat ?></td>
                                <td><?php echo $pelanggan->no_tlp ?></td>
                                <td><?php echo $pelanggan->pekerjaan ?></td>
                            </tr>
    
                <?php } ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>