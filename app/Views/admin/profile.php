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
                                <h4 class="card-title card-title-dash">Profile Data Diri</h4>
                                <h5 class="card-subtitle card-subtitle-dash">*Mohon lengkapi data diri anda</h5>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-md-6 col-xl-4">
                                <h4 class="card-title card-title-dash ps-0 ps-lg-3 ">Foto Profil</h4>



                                <form action="/user/saveImage" method="POST" enctype="multipart/form-data">
                                    <?= csrf_field() ?>
                                    <div class="profile-pic-wrapper d-flex justify-content-center">
                                        <div class="pic-holder text-center d-flex justify-content-center">
                                            <input type="text" class="d-none" name="namaFoto" value="<?php echo user()->user_image; ?>" id="">
                                            <img id="profilePic" name='tempatFoto' class="pic mx-auto d-block" src="<?= base_url(); ?>/public2/image_user/<?php echo user()->user_image; ?>" alt="<?php echo user()->user_image; ?>">

                                            <!-- <Input class="uploadProfileInput d-none" type="file" name="profile_pic" id="newProfilePhoto" accept="image/*" style="opacity: 0;" />
                                        <label for="newProfilePhoto" class="upload-file-block">
                                            <div class="">
                                                <div class="mb-2">
                                                    <i class="fa fa-camera fa-2x"></i>
                                                </div>
                                                <div class="text-uppercase">
                                                    Ganti <br /> Foto Profil
                                                </div>
                                            </div>
                                        </label> -->
                                        </div>
                                    </div>
                                    <div class="form-group row m-0">
                                        <div class="col-12 col-sm-10">
                                            <div class="custom-file mb-3">
                                                <input class="form-control form-control-sm " id="foto" name="foto" type="file">

                                                <label for="foto" class="form-label">Upload foto profile anda</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary-outline align-text-bottom " type="submit"><i class="mdi mdi-camera-party-mode"></i>Ganti Foto</button>
                                </form>

                            </div>
                            <div class="col-12 col-md-6 mt-sm-3">
                                <div class="row">
                                    <div class="col-12 col-sm-6 ">
                                        <h4 class="card-title card-title-dash">Nama lengkap</h4>
                                        <h5 class="card-subtitle card-subtitle-dash "><?= $biodata['nama_lengkap']; ?></h5>

                                        <h4 class="card-title card-title-dash mt-4">Pendidikan</h4>
                                        <h5 class="card-subtitle card-subtitle-dash "><?= $biodata['pendidikan']; ?></h5>


                                        <h4 class="card-title card-title-dash mt-4 ">Jurusan</h4>
                                        <h5 class="card-subtitle card-subtitle-dash mb-0"><?= $biodata['jurusan']; ?></h5>
                                    </div>
                                    <div class="col-12 col-sm-6 ">
                                        <h4 class="card-title card-title-dash mt-4 mt-sm-0">Umur</h4>
                                        <h5 class="card-subtitle card-subtitle-dash "><?= $biodata['umur']; ?></h5>

                                        <h4 class="card-title card-title-dash mt-4">Jenis kelamin</h4>
                                        <h5 class="card-subtitle card-subtitle-dash "><?= $biodata['jenis_kelamin']; ?></h5>


                                        <h4 class="card-title card-title-dash mt-4">Pekerjaan Ayah</h4>
                                        <h5 class="card-subtitle card-subtitle-dash "><?= $biodata['pekerjaan_ayah']; ?></h5>
                                        <h4 class="card-title card-title-dash mt-4">Pekerjaann Ibu</h4>
                                        <h5 class="card-subtitle card-subtitle-dash "><?= $biodata['pekerjaan_ibu']; ?></h5>

                                    </div>
                                </div>


                            </div>
                            <div class="row ">
                                <div class="col-12 text-center text-md-start border-top my-4">
                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-lg text-white mb-0 me-0 px-3" data-bs-toggle="modal" data-bs-target="#ModalEditProfil" type="button"><i class="mdi mdi mdi-settings"></i>Edit Profil</button>
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


<!-- Modal -->
<div class="modal fade" id="ModalEditProfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content modal-xl rounded">
            <div class="modal-body p-3">
                <div class="col-12 grid-margin">

                    <div class="card-body">
                        <h4 class="card-title">Ubah Data Diri</h4>
                        </br>

                        <form action="<?= base_url('user/updateBiodata') ?>" method="post" class="form-sample user">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="nama_lengkap" value="<?= $biodata['nama_lengkap']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pendidikan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="pendidikan" value="<?= ($biodata['pendidikan'] == '-') ? '' : $biodata['pendidikan']; ?>" placeholder="*Mahasiswa" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jurusan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="jurusan" value=" <?= ($biodata['jurusan'] == '-') ? '' : $biodata['jurusan']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Umur</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="umur" value="<?= ($biodata['umur'] == '-') ? '' : $biodata['umur']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="" <?= ($biodata['jenis_kelamin'] == '') ? 'selected' : ''; ?>>-</option>
                                                <option value="Laki-laki" <?= ($biodata['jenis_kelamin'] == 'Laki-laki') ? 'selected' : ''; ?>>Laki-laki</option>
                                                <option value="Perempuan" <?= ($biodata['jenis_kelamin'] == 'Perempuan') ? 'selected' : ''; ?>>Perempuan</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 d-none">

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan Ayah</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="pekerjaan_ayah" value="<?= ($biodata['pekerjaan_ayah'] == '-') ? '' : $biodata['pekerjaan_ayah']; ?>" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Pekerjaan Ibu</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="pekerjaan_ibu" value="<?= ($biodata['pekerjaan_ibu'] == '-') ? '' : $biodata['pekerjaan_ibu']; ?>" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span>
                    <button type="button" class="btn btn-secondary btn-lg text-black" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-lg text-white">Perbaharui</a>
                </span>

            </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>