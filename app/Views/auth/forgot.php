<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex  auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-2">Lupa Password?</h1>
                            <p class="mb-4">Masukan alamat email untuk konfirmasi link reset password.</p>
                        </div>

                        <?= view('Myth\Auth\Views\_message_block') ?>


                        <form action="<?= url_to('forgot') ?>" method="post" class="user">
                            <?= csrf_field() ?>

                            <div class="form-group">
                                <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> form-control-user" aria-describedby="emailHelp" placeholder="Masukan Email" name="email">
                                <div class="invalid-feedback">
                                    <?= session('errors.email') ?>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Reset Password
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url(); ?>/login">Sudah punya Akun? Login!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<?= $this->endSection(); ?>