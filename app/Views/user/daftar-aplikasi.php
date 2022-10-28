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
        <div class="content-wrapper py-5 auth px-0 ">
            <div class="row  mx-xl-5 mx-0 ">

                <div class=" col-lg-12 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                        <h4>Daftar Aplikasi </h4>
                        <br />
                        <h6 class="fw-light">Berikut aplikasi asesment atau praktikum Laboratorium PSI UAD</h6>
                        <br />
                        <button type="button" id="hollandApp" onclick="hollandapp()" class="btn btn-outline-secondary btn-icon mx-1 my-1">
                            <div class="" style="">
                                <div class="brand-logo my-auto">
                                    <img src="<?= base_url(); ?>/public2/images/logo.svg" alt="logo" />
                                </div>
                            </div>
                        </button>

                    </div>
                </div>
            </div>
            <div id="holland-content" class="row d-none  mx-xl-5 mx-0 my-3">

                <div class=" col-lg-12 col-xl-8 mx-auto">
                    <div class="auth-form-light text-left py-5 px-4 px-sm-5">

                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title card-title-dash">Apa itu hollannd survery</h4>
                                <h5 class="card-subtitle card-subtitle-dash">Karir apa saja yang membuat anda tertarik?</h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <img src="http://localhost:8080/public2/images/What Are Your Career Interest.png" width="100%" alt="">
                            </div>
                            <div class="col-12">
                                <p>
                                    Survey ini berdasarkan teori Dr. John L. Holland (Holland Code) yang menyatakan bahwa individu dan area pekerjaannya dapat diklasifikasikan menjadi enam kelompok (RIASEC).
                                </p>
                                <p>
                                    Perbedaan kepribadian dapat menyebabkan perbedaan area kerja yang lebih disukai. Meskipun Anda mempunyai beberapa ketertarikan dan kesamaan ciri-ciri dari keenam kelompok tersebut, Anda akan mempunyai dua sampai tiga area prioritas. Kedua atau ketiga huruf tersebut adalah “Holland Code” Anda.
                                </p>
                                <p>
                                    Tipe area yang bukan code Anda adalah tipe area yang kurang merepresentasikan diri Anda. Sebagian besar individu dan sebagian besar pekerjaan mereka ditunjukkan oleh kombinasi dari dua atau tiga area minat Holland.
                                </p>
                                <p>
                                    Sebagian besar individu merasa puas jika kepribadian mereka sesuai dengan area pekerjaan yang mereka miliki.
                                </p>
                                <p>
                                    Sumber : <a href="https://survey.actconsulting.co/hollandcode/c/reka" class="btn btn-link">survey.actconsulting.co</a>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>

<!-- <div id="box" style="margin-bottom: 100px; margin-top: 100px">
    Hover over me
</div>

<div id="text">Example text content</div>

<script>
    const box = document.getElementById('box');

    const textDiv = document.getElementById('text');

    // 👇️ Change text color on mouseover
    box.addEventListener('mouseover', function handleMouseOver() {
        textDiv.style.color = 'red';
    });
</script> -->

<script>
    function hollandapp() {
        window.open("<?= base_url(); ?>/user", "_self");
    }
</script>

<?= $this->endsection(); ?>