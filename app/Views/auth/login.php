<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth px-0">
            <div class="row w-100 mx-0">
                <div class="col-lg-4 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                        <div class="brand-logo">
                            <img src="<?= base_url(); ?>/public2/images/logo.svg" alt="logo" />
                        </div>
                        <h4>Selamat datang di Inventori SDS - Holland</h4>
                        <h6 class="fw-light">Silakan Login untuk lanjut.</h6>

                        <?= view('Myth\Auth\Views\_message_block') ?>

                        <form class="pt-3 user" action="<?= url_to('login') ?>" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control  <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> form-control-user form-control-lg" aria-describedby="emailHelp" name="login" placeholder="Email atau NIM">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> form-control-lg form-control-user" name="password" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="my-2 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <label class="form-check-label text-muted">
                                        <input type="checkbox" class="form-check-input" name="remember" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                        Ingat saya!
                                    </label>
                                </div>

                            </div>
                            <div class="mt-3">
                                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">Login</button>
                            </div>
                            <br>

                            <div class="text-center mt-4 fw-light">
                                <a href="<?= url_to('forgot') ?>" class="text-black me-3">Lupa Password?</a>
                                <a href="<?= url_to('register') ?>" class="text-primary">Register Akun</a>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<?= $this->endsection(); ?>