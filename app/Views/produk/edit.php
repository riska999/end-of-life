<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <a class="navbar-brand" href="#">AdminLTE</a>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">AdminLTE</span>
            </a>
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                        <li class="nav-item">
                            <a href="<?= base_url('/produk') ?>" class="nav-link">
                                <i class="nav-icon fas fa-box"></i>
                                <p>Daftar Produk</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('/logout') ?>" class="nav-link">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <h1 class="m-0">Edit Produk</h1>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                    <form action="<?= base_url('/produk/update/' . $produk['id_produk']) ?>" method="post">
                        <div class="form-group">
                            <label for="nama_produk">Nama Produk:</label>
                            <input type="text" class="form-control" name="nama_produk" value="<?= $produk['nama_produk'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="manufaktur">Manufaktur:</label>
                            <input type="text" class="form-control" name="manufaktur" value="<?= $produk['manufaktur'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="durasi_lisensi">Durasi Lisensi:</label>
                            <input type="text" class="form-control" name="durasi_lisensi" value="<?= $produk['durasi_lisensi'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="nomor_lisensi">Nomor Lisensi:</label>
                            <input type="text" class="form-control" name="nomor_lisensi" value="<?= $produk['nomor_lisensi'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="instalasi_pertama">Instalasi Pertama:</label>
                            <input type="date" class="form-control" name="instalasi_pertama" value="<?= $produk['instalasi_pertama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_kadaluarsa">Tanggal Kadaluarsa:</label>
                            <input type="date" class="form-control" name="tanggal_kadaluarsa" value="<?= $produk['tanggal_kadaluarsa'] ?>" required>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                    <a href="<?= base_url('/produk') ?>" class="btn btn-secondary mt-2">Kembali ke Daftar Produk</a>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-inline">
                AdminLTE
            </div>
            <strong>&copy; 2024 <a href="#">Your Company</a>.</strong> All rights reserved.
        </footer>
    </div>

    <script src="<?= base_url('assets/adminlte/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/adminlte/js/adminlte.min.js') ?>"></script>
</body>
</html>
