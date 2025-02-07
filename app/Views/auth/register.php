<!-- filepath: /c:/laragon/www/laguna/app/Views/auth/register.php -->
<!DOCTYPE html>
<html lang="id">

<head>
    <title><?= $title; ?></title>
    <!-- Custom icon page -->
    <link rel="icon sekolah" href="<?= base_url('assets/img/iconS.png') ?>" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/stylesheet.css') ?>" rel="stylesheet">
</head>

<body class="bg-img">
    <?php if (session()->get('logged_in')): ?>
        <?= redirect()->to(base_url('/')); ?>
    <?php endif; ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row justify-content-center">
                            <div class="col-lg-5 d-none d-lg-block bg-register-image d-flex align-items-center justify-content-center">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/iconS.png') ?>" alt="Icon" class="mx-auto img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-1 d-flex align-items-center justify-content-center" style="padding: 50px;">
                                <div style="border-left: 2px solid #ddd; height: 100%;"></div>
                            </div>
                            <div class="col-lg-5">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Buat Akun!</h1>
                                    </div>
                                    <?= session()->getFlashdata('error') ?>
                                    <form class="user" action="/register" method="POST">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user" placeholder="Nama Pengguna" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control form-control-user" placeholder="Nama" required>
                                        </div>
                                        <div class="form-group position-relative">
                                            <input type="password" name="password" class="form-control form-control-user" placeholder="Kata Sandi" required id="password">
                                            <button type="button" class="btn position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none;" onclick="togglePassword('password')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="form-group position-relative">
                                            <input type="password" name="confirm_password" class="form-control form-control-user" placeholder="Ulangi Kata Sandi" required id="confirm_password">
                                            <button type="button" class="btn position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); background: none; border: none;" onclick="togglePassword('confirm_password')">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <input type="hidden" name="role_id" value="1">
                                        <input type="hidden" name="location_id" value="1">
                                        <button type="submit" class="btn btn-primary btn-user btn-block">Daftar Akun</button>
                                    </form>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="<?= base_url('/login') ?>">Sudah punya akun? Masuk!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function togglePassword(id) {
            var input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
            } else {
                input.type = "password";
            }
        }
    </script>
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</body>

</html>