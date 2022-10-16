<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<div class="row">
    <div class="col-lg-12 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-12 col-xl-10 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body pb-0">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h4 class=" d-none d-sm-block card-title card-title-dash">Riwayat hasil pengisian Holland survey</h4>
                                <h4 class=" d-block d-sm-none card-title card-title-dash">Hasil pengisian Holland survey</h4>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="table-responsive  mt-1">
                                <table class="table select-table ">
                                    <thead>
                                        <tr>
                                            <th class="pe-4">No</th>
                                            <th>Tanggal</th>
                                            <th class="pe-5">Skor</th>
                                            <th class="pe-5">Kode skor</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1; ?>
                                        <?php foreach ($submit as $s) : ?>

                                            <?php
                                            $tiga_skor = str_replace('"', "", $s['tiga_skor_kode']);
                                            $tiga_skor = str_replace('[', "[ ", $tiga_skor);
                                            $tiga_skor = str_replace(']', " ]", $tiga_skor);
                                            $tiga_skor = str_replace(',', ", ", $tiga_skor);
                                            ?>

                                            <tr>
                                                <td>
                                                    <h6><?= $i++; ?></h6>
                                                </td>

                                                <td>
                                                    <h6><?= $s['tanggal']; ?></h6>
                                                </td>
                                                <td>
                                                    <h6>
                                                        <?= ($s['status_skor'] == 'Tidak tampil') ? '-' : $s['skor']; ?>
                                                    </h6>
                                                </td>
                                                <td>
                                                    <h6><?= $tiga_skor; ?></h6>
                                                </td>
                                                <td>
                                                    <a target="_blank" href="<?= base_url('user/hasil'); ?>/<?= user()->nim; ?>/<?= str_replace(" ", "-", $s['tanggal']); ?>/<?= $s['skor']; ?>" class="btn btn-outline-primary  btn-lg m-0"><i class="mdi mdi-cloud-print-outline"></i> Lihat Jawaban</a>
                                                    <a target="_self" href="<?= base_url('user/download-hasil'); ?>/<?= user()->nim; ?>/<?= str_replace(" ", "-", $s['tanggal']); ?>/<?= $s['skor']; ?>" class="btn btn-outline-primary  btn-lg m-0"><i class="mdi mdi-download"></i> Unduh Jawaban</a>
                                                </td>


                                            </tr>

                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                        <div class="row ">
                            <div class="col-12 text-start my-0">
                                <div class="my-3">
                                    <button class="btn btn-primary btn-lg text-white mb-0 me-0 px-3 mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button"><i class="menu-icon mdi mdi-border-color"></i>Mulai Survey</button>
                                </div>
                            </div>
                        </div>

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
                                        <button type="button" class="btn btn-secondary  text-black" data-bs-dismiss="modal">Batal</button>
                                        <a class="btn btn-primary text-white" href="<?= base_url('user/survey'); ?>/<?= user()->nim; ?>">Mulai</a>
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


<?= $this->endSection(); ?>