<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
<!-- <script src="<?= base_url('assets/adminlte/js/adminlte.min.js') ?>"></script> -->

</head>
<body class="hold-transition login-page">
<div class="login-box">    

    <div class="card">
        <div class="card-body login-card-body">
            <h4 class="login-box-msg">Login</h4>
            <?php if (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
            <?php endif; ?>
            <form action="<?= base_url('/authenticate') ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" name="nama_pengguna" class="form-control" placeholder="Username" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">                    
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('path/to/jquery.min.js') ?>"></script>
<script src="<?= base_url('path/to/bootstrap.bundle.min.js') ?>"></script>
<script src="<?= base_url('path/to/adminlte.min.js') ?>"></script>
</body>
</html>
