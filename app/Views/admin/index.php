<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>


<div class="row">
    <div class="col-lg-12 d-flex flex-column">
        <div class="row flex-grow">
            <div class="col-12 grid-margin stretch-card">
                <div class="card card-rounded">
                    <div class="card-body pb-0">
                        <div class="d-sm-flex justify-content-between align-items-start">
                            <div>
                                <h2 class="card-title card-title-dash">Daftar Pengisian Survey Holland </h2>

                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 py-3">
                                <table id="user" class="display nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nim</th>
                                            <th>Email</th>
                                            <th>Nama Lengkap</th>
                                            <th>Umur</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Pendidikan</th>
                                            <th>Jurusan</th>
                                            <th>Pekerjaan Ayah</th>
                                            <th>Pekerjaan Ibu</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $i = 1; ?>
                                        <?php foreach ($users as $s) : ?>


                                            <tr>
                                                <td><?= $i++; ?></td>
                                                <td><?= $s['nim']; ?></td>
                                                <td><?= $s['email']; ?></td>
                                                <td><?= $s['nama_lengkap']; ?></td>
                                                <td><?= $s['umur']; ?></td>
                                                <td><?= $s['jenis_kelamin']; ?></td>
                                                <td><?= $s['pendidikan']; ?></td>
                                                <td><?= $s['jurusan']; ?></td>
                                                <td><?= $s['pekerjaan_ayah']; ?></td>
                                                <td><?= $s['pekerjaan_ibu']; ?></td>
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



<!-- /.container-fluid -->

<?= $this->endSection(); ?>