<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div id="header_main" class="container_wrap container_wrap_logo" style="background-color:#660d9e;">

    <div class="container av-logo-container">
        <div class="inner-container"><span class="logo"><a href="https://fpsikologi.uad.ac.id/">
                    <img height="100" width="300" src="https://fpsikologi.uad.ac.id/wp-content/uploads/2019/10/logo-psikologi.png" alt="Psychology For Better Community"></a></span>

            <nav class="main_menu" data-selectname="Select a page" role="navigation" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">

                <div class="avia-menu av-main-nav-wrap">

                </div>
            </nav>
        </div>
    </div>
    <!-- end container_wrap-->
</div>

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