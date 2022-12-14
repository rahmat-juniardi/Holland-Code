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

<div class="container">

    <div class="row justify-content-center">

        <div class="col-xl-10 col-lg-8 col-md-8">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Registrasi Akun - Holland Survey</h1>
                                </div>

                                <?= view('Myth\Auth\Views\_message_block') ?>

                                <form action="<?= url_to('register') ?>" method="post" class="user">
                                    <?= csrf_field() ?>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label pt-1">Nama Lengkap</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> form-control-user" name="nama-lengkap" placeholder="" value="<?= old('nama-lengkap') ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label pt-1">NIM</label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?> form-control-user" name="nim" placeholder="" value="<?= old('nim') ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label pt-1">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?> form-control-user" name="email" placeholder="" value="<?= old('email') ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label pt-1">Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?> form-control-user" name="password" placeholder="Password" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label pt-0">Ulangi Password</label>
                                                <div class="col-sm-9">
                                                    <input type="password" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> form-control-user" name="password-ulang" placeholder="" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register Sekarang
                                    </button>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= url_to('forgot') ?>">Lupa Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url(); ?>/login">Sudah punya Akun? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?= $this->endsection(); ?>