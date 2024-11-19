<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= base_url('/dashboard') ?>" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="<?= base_url('/logout') ?>" class="nav-link">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- Sidebar -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="<?= base_url('/dashboard') ?>" class="brand-link">
            <span class="brand-text font-weight-light">Dashboard</span>
        </a>
        <div class="sidebar">
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                    <li class="nav-item">
                        <a href="<?= base_url('/produk') ?>" class="nav-link active">
                            <i class="nav-icon fas fa-box"></i>
                            <p>Kelola Produk</p>
                        </a>
                    </li>                   
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Content Wrapper -->
    <div class="content-wrapper">
        <div class="content-header">
            <h1>Daftar Produk</h1>
        </div>
        <div class="content">
            <div class="container-fluid">
                <a href="<?= base_url('/produk/create') ?>" class="btn btn-primary mb-3">Tambah Produk</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Produk</th>
                            <th>Manufaktur</th>
                            <th>Durasi Lisensi</th>
                            <th>Nomor Lisensi</th>
                            <th>Instalasi Pertama</th>
                            <th>Tanggal Kadaluarsa</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($produk as $p): ?>
                        <tr>
                            <td><?= $p['id_produk'] ?></td>
                            <td><?= $p['nama_produk'] ?></td>
                            <td><?= $p['manufaktur'] ?></td>
                            <td><?= $p['durasi_lisensi'] ?></td>
                            <td><?= $p['nomor_lisensi'] ?></td>
                            <td><?= $p['instalasi_pertama'] ?></td>
                            <td><?= $p['tanggal_kadaluarsa'] ?></td>
                            <td>
                                <a href="<?= base_url('/produk/edit/' . $p['id_produk']) ?>" class="btn btn-warning btn-sm">Edit</a> 
                                <a href="<?= base_url('/produk/delete/' . $p['id_produk']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                <a href="<?= base_url('produk/lihat_pengingat/'.$p['id_produk']) ?>" class="btn btn-info">Lihat Pengingat</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
   
