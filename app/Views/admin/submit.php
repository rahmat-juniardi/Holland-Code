<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="row">
    <div class="col-lg-12 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-12  col-xl-10 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body pb-0">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h2 class="card-title card-title-dash">Daftar Pengisian Survey Holland </h2>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 py-3">
                                <table id="submit" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lengkap</th>
                                            <th>NIM</th>
                                            <th>Email</th>
                                            <th>Tanggal Survey</th>
                                            <th>Skor Nilai</th>
                                            <th>Skor Kode</th>

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
                                                    <?= $i++; ?>
                                                </td>
                                                <td>
                                                    <?= $s['nama_lengkap']; ?>
                                                </td>

                                                <td>
                                                    <h6><?= $s['usernim']; ?></h6>
                                                </td>
                                                <td>
                                                    <h6><?= $s['email']; ?></h6>
                                                </td>
                                                <td>
                                                    <h6><?= $s['tanggal']; ?></h6>
                                                </td>
                                                <td>
                                                    <h6><?= $s['skor']; ?></h6>
                                                </td>
                                                <td>
                                                    <h6><?= $tiga_skor; ?></h6>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>