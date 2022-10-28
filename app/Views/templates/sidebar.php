<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">

        <?php if (in_groups('admin')) { ?>
            <li class="nav-item nav-category">Profile</li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('profile'); ?>">
                    <i class="menu-icon mdi mdi-account-circle-outline"></i>
                    <span class="menu-title">Profil Admin</span>
                </a>
            </li>
            <li class="nav-item nav-category">Submit Survey</li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('admin'); ?>">
                    <i class="menu-icon mdi mdi mdi-account-card-details"></i>
                    <span class="menu-title">Daftar Mahasiswa</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('submit'); ?>">
                    <i class="menu-icon mdi mdi mdi-table-large"></i>
                    <span class="menu-title">Daftar Submit Survey</span>
                </a>
            </li>

            <li class="nav-item nav-category"></li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(''); ?>">
                    <i class="menu-icon mdi mdi-arrow-left-bold"></i>
                    <span class="menu-title">Kembali</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="menu-icon mdi mdi mdi-power"></i>
                    <span class="menu-title">Sign Out</span>
                </a>
            </li>
        <?php } else { ?>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('user'); ?>">
                    <i class="menu-icon mdi mdi-account-circle-outline"></i>
                    <span class="menu-title">Profil</span>
                </a>
            </li>
            <li class="nav-item nav-category">Holland Survey</li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('holland-code'); ?>">
                    <i class="menu-icon mdi mdi-hexagon-outline"></i>
                    <span class="menu-title">Holland Code</span>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="<?= base_url('riwayat'); ?>">
                    <i class="menu-icon mdi mdi-card-text-outline"></i>
                    <span class="menu-title">Riwayat Survey</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">
                    <i class="menu-icon mdi mdi-border-color"></i>
                    <span class="menu-title">Mulai Survey</span>
                </a>
            </li>
            <li class="nav-item nav-category"></li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(''); ?>">
                    <i class="menu-icon mdi mdi-arrow-left-bold"></i>
                    <span class="menu-title">Kembali</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('logout'); ?>">
                    <i class="menu-icon mdi mdi mdi-power"></i>
                    <span class="menu-title">Sign Out</span>
                </a>
            </li>
        <?php }; ?>

    </ul>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Mulai Survey</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3">
                <p class="text-dark m-0">
                    Apakah akan memulai survey pada tanggal : <?= $tanggal; ?>
                </p>
            </div>
            <div class="modal-footer">

                <span>
                    <a type="button" class="btn btn-secondary  text-black mx-3" data-bs-dismiss="modal">Batal</a>
                    <a class="btn btn-primary text-white mx-3" href="<?= base_url('user/survey'); ?>/<?= user()->nim; ?>">Mulai</a>
                </span>

            </div>
        </div>
    </div>
</div>