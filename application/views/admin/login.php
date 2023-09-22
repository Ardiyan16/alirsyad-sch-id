<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Admin</title>
    <!-- Favicon icon -->
	<link href="https://www.alirsyadjember.sch.id/wp-content/uploads/2021/12/Logo-LPP.png" rel="icon">
    <link href="<?= base_url() ?>assets/admin/css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/js/sweetalert2-all.js"></script>

</head>
<style>
	label {
		color: #FFF
	}
</style>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content" style="background: #127f62">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<img src="https://www.alirsyadjember.sch.id/wp-content/uploads/2021/12/Logo-LPP.png" style=" display: block; margin-left: auto; margin-right: auto; width: 45%; height: 200px">
                                    <h4 class="text-center mb-4 mt-3" style="color: #FFF">Silahkan isi data untuk masuk!</h4>
                                    <form action="<?= base_url('Admin/action_login') ?>" method="POST">
                                        <div class="form-group">
                                            <label><strong>Username</strong></label>
                                            <input type="text" class="form-control" name="username">
											<?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>Password</strong></label>
                                            <input type="password" class="form-control password" name="password">
											<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                                <div class="form-check ml-2">
                                                    <input class="form-check-input form-checkbox" type="checkbox" id="basic_checkbox_1">
                                                    <label class="form-check-label" for="basic_checkbox_1">Lihat Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-light btn-block">Masuk</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?= base_url() ?>assets/dashboard/vendor/global/global.min.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/quixnav-init.js"></script>
    <script src="<?= base_url() ?>assets/dashboard/js/custom.min.js"></script>

	<script type="text/javascript">
        $(document).ready(function() {
            $('.form-checkbox').click(function() {
                if ($(this).is(':checked')) {
                    $('.password').attr('type', 'text');
                } else {
                    $('.password').attr('type', 'password');
                }
            });
        });
    </script>

	<script>
		<?php if ($this->session->flashdata('password_salah')) : ?>
			Swal.fire({
				icon: 'warning',
				title: 'Gagal!',
				text: 'Password yang anda inputkan salah!',
				showConfirmButton: true,
				// timer: 1500
			})
		<?php elseif ($this->session->flashdata('username_salah')) : ?>
			Swal.fire({
				icon: 'warning',
				title: 'Gagal!',
				text: 'Username yang anda inputkan tidak terdaftar!',
				showConfirmButton: true,
				// timer: 1500
			})

		<?php elseif ($this->session->flashdata('logout')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'Anda berhasil keluar!',
				showConfirmButton: true,
				// timer: 1500
		})

		<?php elseif ($this->session->flashdata('login_dulu')) : ?>
			Swal.fire({
				icon: 'warning',
				title: 'Catatan!',
				text: 'Anda harus login terlebih dahulu!',
				showConfirmButton: true,
				// timer: 1500
		})

		<?php elseif ($this->session->flashdata('success_profile')) : ?>
			Swal.fire({
				icon: 'success',
				title: 'Berhasil!',
				text: 'Anda berhasil memperbarui profil, Silahkan masuk kembali!',
				showConfirmButton: true,
				// timer: 1500
		})
		<?php endif ?>
	</script>

</body>

</html>
