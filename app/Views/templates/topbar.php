<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
                <span class="icon-menu"></span>
            </button>
        </div>
        <div>
            <a class="navbar-brand brand-logo" href="index.html">
                <img src="<?= base_url(); ?>/public2/images/logo.svg" alt="logo" />
            </a>
            <a class="navbar-brand brand-logo-mini" href="index.html">
                <img src="<?= base_url(); ?>/public2/images/hiddenn sidebar icon.svg" alt="logo" />
            </a>
        </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-top">
        <ul class="navbar-nav">
            <li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
                <h1 class="welcome-text">Inventori, <span class="text-secondary fw-bold">SDS - Holland</span></h1>
                <h3 class="welcome-sub-text">Cari tahu karir seperti apa yang membuatmu tertarik.</h3>
            </li>
        </ul>

        <ul class="navbar-nav ms-auto">

        </ul>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item font-weight-semibold ms-0">
                <p class="fw-light text-muted mb-0"><?= user()->email; ?> </p>

            </li>
            <li class="nav-item font-weight-semibold d-none d-xl-block ms-0">
                <p class="fw-light text-muted mb-0 mx-2">|</p>

            </li>
            <li class="nav-item font-weight-semibold d-none d-xl-block ms-0">
                <p class="mb-0 mt-0 font-weight-semibold"><?= user()->name; ?></p>
            </li>
            <li class="nav-item font-weight-semibold d-none d-sm-block ms-0">
                <p class="fw-light text-muted mb-0 ms-2">|</p>

            </li>
            <li class="nav-item dropdown d-none d-sm-block user-dropdown">
                <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                    <img class="img-sm rounded-10" src="<?= base_url(); ?>/public2/image_user/<?php echo user()->user_image; ?>" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown p-0" aria-labelledby="UserDropdown">

                    <?php if (!in_groups('admin')) { ?>
                        <a class="dropdown-item" href="<?= base_url('user'); ?>"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-0"></i> Profil</a>
                    <?php } else { ?>
                        <a class="dropdown-item" href="<?= base_url('admin'); ?>"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-0"></i> Profil</a>
                    <?php }; ?>
                    <a class="dropdown-item" href="<?= base_url('logout'); ?>"><i class="dropdown-item-icon mdi mdi-power text-primary me-0"></i>Sign Out</a>
                </div>
            </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>