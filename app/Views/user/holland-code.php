<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="row">
    <div class="col-lg-12 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-12 col-xl-10 col-xxl-8 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body pb-0">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class="card-title card-title-dash">apa itu hollannd survery</h4>
                                <h5 class="card-subtitle card-subtitle-dash">Karir apa saja yang membuat anda tertarik?</h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <img src="<?= base_url(); ?>/public2/images/What Are Your Career Interest.png" width="100%" alt="">
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
    </div>
</div>


<?= $this->endSection(); ?>