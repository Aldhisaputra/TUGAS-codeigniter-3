<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
        /* Add your custom CSS here */
    </style>
</head>
<body>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <form action="<?php echo base_url('mahasiswa/search'); ?>" method="post" class="mb-3">
            <div class="input-group">
                <input type="text" required name="keyword" class="form-control" placeholder="Cari mahasiswa">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Cari</button>
                    <button onclick="window.location.href='<?php echo base_url('mahasiswa'); ?>'" type="button" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NPM</th>
                    <th>Angkatan</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                    <th>Mata Kuliah Favorit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($mahasiswa as $mhs): ?>
                <tr>
                    <td><?php echo $mhs['id']; ?></td>
                    <td><?php echo $mhs['nama']; ?></td>
                    <td><?php echo $mhs['npm']; ?></td>
                    <td><?php echo $mhs['angkatan']; ?></td>
                    <td><?php echo $mhs['kelas']; ?></td>
                    <td><?php echo $mhs['alamat']; ?></td>
                    <td><?php echo $mhs['mata_kuliah_favorit']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
