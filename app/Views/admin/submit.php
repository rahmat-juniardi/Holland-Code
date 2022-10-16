<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="row">
    <div class="col-lg-12 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-12  col-xxl-10 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body pb-0">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h2 class="card-title card-title-dash">Daftar Pengisian Survey Holland </h2>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 py-3">
                                <form action="<?= base_url('submit/update_status_skor') ?>" method="post" class="form-sample user">
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
                                                <th>Status Skor</th>

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
                                                    <td>
                                                        <h6>
                                                            <?php if ($s['status_skor'] == 'Tidak tampil') { ?>
                                                                <input id="<?= $s['id']; ?>" name="<?= $s['id']; ?>" class="form-check-input mt-0 status_skor" onclick="checkbox_status_skor(this.id)" type="checkbox" value="Tidak tampil" aria-label="Checkbox for following text input">
                                                                <label id="label_<?= $s['id']; ?>" for="<?= $s['id']; ?>">Tidak tampil</label>
                                                            <?php } else { ?>
                                                                <input id="<?= $s['id']; ?>" name="<?= $s['id']; ?>" class="form-check-input mt-0 status_skor" onclick="checkbox_status_skor(this.id)" type="checkbox" value="Tampil" aria-label="Checkbox for following text input" checked>
                                                                <label id="label_<?= $s['id']; ?>" for="<?= $s['id']; ?>">Tampil</label>
                                                            <?php }; ?>
                                                        </h6>

                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                    <div class="row ">
                                        <div class="col-12 text-center text-md-start border-top my-4">
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary btn-lg text-white mb-0 me-0 px-3"><i class="mdi mdi mdi-upload"></i>Update Status Skor</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function checkbox_status_skor(id) {
        var checkBox = document.getElementById(id);
        var label = document.getElementById("label_" + id);

        if (checkBox.checked == true) {
            checkBox.value = "Tampil";
            label.innerHTML = "Tampil";

        } else {
            checkBox.value = "Tidak tampil";
            label.innerHTML = "Tidak tampil";
        }
    }
</script>

<?= $this->endSection(); ?>