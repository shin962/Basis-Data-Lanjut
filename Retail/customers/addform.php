<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Add Data</title>
</head>
<style>
</style>
<body class="bg-dark">
    <form action="add_data.php" method="post">
        <div class="container ">
            <div class="row col-md-8">
                    <div class="mt-4 ms-5 text-white"><h2>Add Data</h2></div>
                <form action="add_data.php" method="post"></form>
                <div class="mb-2 mt-3">
                    <label for="id" class="form-label text-white">ID</label>
                    <input type="text" name="id" id="id" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label text-white" text-white>Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label text-white">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="nohp" class="form-label text-white">Nomor Telepon</label>
                    <input type="text" name="nohp" id="nohp" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="pekerjaan" class="form-label text-white">Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control">
                </div>
                <div class="mt-2">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </div>
        </div>
    </form>
</body>
</html>