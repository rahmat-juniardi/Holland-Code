<?= $this->extend('holland/survey'); ?>

<?= $this->section('page-content'); ?>
<form action="/user/save/<?= user()->nim; ?>" method="post" enctype="multipart/form-data">

    <br>

    <br>

    <h3 id="">Bagian 1 - Kegiatan</h3>
    <p>Lingkarilah huruf "S" jika Anda suka kegiatan tersebut, dan lingkarilah huruf "TS" jika Anda tidak suka atau biasa saja (bersikap netral) mengenai kegiatan tersebut pada lembar jawab yang disediakan.</p>
    <br>

    <div class="col-12 col-xl-10 p-0  mx-auto">


        <h1 class="display-5">R</h1>
        <table class="table">
            <!-- 'B1-R', 'B1-I', 'B1-A', 'B1-S', 'B1-E', 'B1-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Suka</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak Suka</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B1-I'] != '') {; ?>
                        <tr>
                            <td><?= $h['B1-R']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-S  radio " name="B1-R-<?= $i; ?>" value="S" required />
                                        <!-- option-input option-input-green option-input-green-S -->
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-TS  radio " name="B1-R-<?= $i++; ?>" value="TS" />
                                        <!-- option-input option-input-red option-input-red-TS -->
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>

            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">I</h1>
        <table class="table">
            <!-- 'B1-R', 'B1-I', 'B1-A', 'B1-S', 'B1-E', 'B1-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Suka</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak Suka</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B1-I'] != '') {; ?>
                        <tr>
                            <td><?= $h['B1-I']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-S radio " name="B1-I-<?= $i; ?>" value="S" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-TS radio " name="B1-I-<?= $i++; ?>" value="TS" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">A</h1>
        <table class="table">
            <!-- 'B1-R', 'B1-I', 'B1-A', 'B1-S', 'B1-E', 'B1-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Suka</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak Suka</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B1-A'] != '') {; ?>
                        <tr>
                            <td><?= $h['B1-A']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-S radio " name="B1-A-<?= $i; ?>" value="S" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-TS radio " name="B1-A-<?= $i++; ?>" value="TS" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>


        <br>
        <br>

        <h1 class="display-5">S</h1>
        <table class="table">
            <!-- 'B1-R', 'B1-I', 'B1-A', 'B1-S', 'B1-E', 'B1-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Suka</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak Suka</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B1-S'] != '') {; ?>
                        <tr>
                            <td><?= $h['B1-S']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-S radio " name="B1-S-<?= $i; ?>" value="S" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-TS radio " name="B1-S-<?= $i++; ?>" value="TS" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">E</h1>
        <table class="table">
            <!-- 'B1-R', 'B1-I', 'B1-A', 'B1-S', 'B1-E', 'B1-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Suka</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak Suka</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B1-E'] != '') {; ?>
                        <tr>
                            <td><?= $h['B1-E']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-S radio " name="B1-E-<?= $i; ?>" value="S" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-TS radio " name="B1-E-<?= $i++; ?>" value="TS" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">C</h1>
        <table class="table">
            <!-- 'B1-R', 'B1-I', 'B1-A', 'B1-S', 'B1-E', 'B1-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Suka</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak Suka</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B1-C'] != '') {; ?>
                        <tr>
                            <td><?= $h['B1-C']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-S radio " name="B1-C-<?= $i; ?>" value="S" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-TS radio " name="B1-C-<?= $i++; ?>" value="TS" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <div class=" " id="bagian-2"></div>


    <br>
    <hr>
    <br>

    <h3 id="">Bagian 2 - Keahlian</h3>
    <p>Lingkarilah huruf “Y” (Ya) untuk kegiatan yang mampu Anda Lakukan dengan baik. Lingkarilah huruf 'T' (Tidak) untuk kegiatan yang tidak pernah Anda lakukan atau tidak mampu Anda lakukan dengan baik pada lembar jawab yang disediakan.</p>
    <br>

    <div class="col-12 col-xl-10  p-0 mx-auto">


        <h1 class="display-5">R</h1>
        <table class="table">
            <!-- 'B2-R', 'B2-I', 'B2-A', 'B2-S', 'B2-E', 'B2-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B2-R'] != '') {; ?>
                        <tr>
                            <td><?= $h['B2-R']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y  radio " name="B2-R-<?= $i; ?>" value="Y" required />
                                        <!-- option-input option-input-green option-input-green-Y -->
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T  radio " name="B2-R-<?= $i++; ?>" value="T" />
                                        <!-- option-input option-input-red option-input-red-T -->
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>

            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">I</h1>
        <table class="table">
            <!-- 'B2-R', 'B2-I', 'B2-A', 'B2-S', 'B2-E', 'B2-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B2-I'] != '') {; ?>
                        <tr>
                            <td><?= $h['B2-I']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B2-I-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B2-I-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">A</h1>
        <table class="table">
            <!-- 'B2-R', 'B2-I', 'B2-A', 'B2-S', 'B2-E', 'B2-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B2-A'] != '') {; ?>
                        <tr>
                            <td><?= $h['B2-A']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B2-A-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B2-A-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>


        <br>
        <br>

        <h1 class="display-5">S</h1>
        <table class="table">
            <!-- 'B2-R', 'B2-I', 'B2-A', 'B2-S', 'B2-E', 'B2-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B2-S'] != '') {; ?>
                        <tr>
                            <td><?= $h['B2-S']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B2-S-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B2-S-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">E</h1>
        <table class="table">
            <!-- 'B2-R', 'B2-I', 'B2-A', 'B2-S', 'B2-E', 'B2-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B2-E'] != '') {; ?>
                        <tr>
                            <td><?= $h['B2-E']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B2-E-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B2-E-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">C</h1>
        <table class="table">
            <!-- 'B2-R', 'B2-I', 'B2-A', 'B2-S', 'B2-E', 'B2-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B2-C'] != '') {; ?>
                        <tr>
                            <td><?= $h['B2-C']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B2-C-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B2-C-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <div class=" " id="bagian-3"></div>


    <br>
    <hr>
    <br>

    <h3 id="">Bagian 3 - Pekerjaan</h3>
    <p>Daftar dibawah ini menggambarkan perasaan dan sikap Anda terhadap bermacam pekerjaan.Pada setiap pekerjaan lingkaniah huruf “Y” (Ya).bila pekerjaan tersebut Anda sukai atau menarik bagi Anda. Lingkarilah huruf “T” (Tidak), bila Anda merasa pekerjaan tersebut tidak Anda sukai atau tidak menarik bagi Anda.</p>
    <br>

    <div class="col-12 col-xl-10  p-0 mx-auto">


        <h1 class="display-5">R</h1>
        <table class="table">
            <!-- 'B3-R', 'B3-I', 'B3-A', 'B3-S', 'B3-E', 'B3-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B3-R'] != '') {; ?>
                        <tr>
                            <td><?= $h['B3-R']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y  radio " name="B3-R-<?= $i; ?>" value="Y" required />
                                        <!-- option-input option-input-green option-input-green-Y -->
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T  radio " name="B3-R-<?= $i++; ?>" value="T" />
                                        <!-- option-input option-input-red option-input-red-T -->
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>

            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">I</h1>
        <table class="table">
            <!-- 'B3-R', 'B3-I', 'B3-A', 'B3-S', 'B3-E', 'B3-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B3-I'] != '') {; ?>
                        <tr>
                            <td><?= $h['B3-I']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B3-I-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B3-I-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">A</h1>
        <table class="table">
            <!-- 'B3-R', 'B3-I', 'B3-A', 'B3-S', 'B3-E', 'B3-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B3-A'] != '') {; ?>
                        <tr>
                            <td><?= $h['B3-A']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B3-A-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B3-A-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>


        <br>
        <br>

        <h1 class="display-5">S</h1>
        <table class="table">
            <!-- 'B3-R', 'B3-I', 'B3-A', 'B3-S', 'B3-E', 'B3-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B3-S'] != '') {; ?>
                        <tr>
                            <td><?= $h['B3-S']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B3-S-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B3-S-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">E</h1>
        <table class="table">
            <!-- 'B3-R', 'B3-I', 'B3-A', 'B3-S', 'B3-E', 'B3-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B3-E'] != '') {; ?>
                        <tr>
                            <td><?= $h['B3-E']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B3-E-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B3-E-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

        <br>
        <br>

        <h1 class="display-5">C</h1>
        <table class="table">
            <!-- 'B3-R', 'B3-I', 'B3-A', 'B3-S', 'B3-E', 'B3-C' -->
            <thead>
                <tr>
                    <th scope="col" class="col-10">Pertanyaan</th>
                    <th scope="col" class="col-1" style="color: #33a474;">Ya</th>
                    <th scope="col" class="col-1" style="color: #b84747;">Tidak</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($holland as $h) : ?>
                    <?php if ($h['B3-C'] != '') {; ?>
                        <tr>
                            <td><?= $h['B3-C']; ?></td>
                            <td class="">
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-green option-input-green-Y radio " name="B3-C-<?= $i; ?>" value="Y" required />
                                    </label>
                                </div>
                            </td>
                            <td>
                                <div class="form-check d-flex justify-content-start">
                                    <label class="m-0">
                                        <input type="radio" class="option-input option-input-red option-input-red-T radio " name="B3-C-<?= $i++; ?>" value="T" />
                                    </label>
                                </div>
                            </td>
                        </tr>
                    <?php }; ?>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <div class=" " id="self-estimate"></div>

    <br>
    <hr>
    <br>

    <h3 id="">Self Estimate</h3>
    <p>Buatlah penilaian tentang karakteristik berikut ini sesuai yang Anda pikirkan bila dibandingkan dengan orang sesuai Anda. Berikan pemikiran yang setepat-tepatnya. Lingkarilah angka yang menurut Anda sesuai dan jangan menilai dengan angka yang sama untuk karakteristik yang berbeda.</p>
    <br>

    <div class="col-12 mx-auto p-0">
        <!--  SE 1 -->
        <hr>
        <?php foreach ($holland as $h) : ?>
            <?php if ($h['SE1-R'] != '') {; ?>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE1-R']; ?></span></p>
                        <p class="h5 mb-3">(R)</p>
                        <div class="form-check d-flex justify-content-center">
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <label class="mx-1">
                                    <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE1-R-1" required value="<?= $i; ?>" />
                                </label>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 col-md-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE1-I']; ?></span></p>
                        <p class="h5 mb-3">(I)</p>
                        <div class="form-check d-flex justify-content-center">
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <label class="mx-1">
                                    <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE1-I-1" value="<?= $i; ?>" />
                                </label>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE1-A']; ?></span></p>
                        <p class="h5 mb-3">(A)</p>
                        <div class="form-check d-flex justify-content-center">
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <label class="mx-1">
                                    <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE1-A-1" value="<?= $i; ?>" />
                                </label>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE1-S']; ?></span></p>
                        <p class="h5 mb-3">(S)</p>
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <label class="mx-1">
                                <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE1-S-1" value="<?= $i; ?>" />
                            </label>
                        <?php }; ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE1-E']; ?></span></p>
                        <p class="h5 mb-3">(E)</p>
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <label class="mx-1">
                                <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE1-E-1" value="<?= $i; ?>" />
                            </label>
                        <?php }; ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE1-C']; ?></span></p>
                        <p class="h5 mb-3">(C)</p>
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <label class="mx-1">
                                <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE1-C-1" value="<?= $i; ?>" />
                            </label>
                        <?php }; ?>
                    </div>
                </div>

            <?php }; ?>
        <?php endforeach; ?>

        <!--  SE 2 -->
        <hr class="my-5">
        <?php foreach ($holland as $h) : ?>
            <?php if ($h['SE2-R'] != '') {; ?>

                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE2-R']; ?></span></p>
                        <p class="h5 mb-3">(R)</p>
                        <div class="form-check d-flex justify-content-center">
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <label class="mx-1">
                                    <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE2-R-1" required value="<?= $i; ?>" />
                                </label>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE2-I']; ?></span></p>
                        <p class="h5 mb-3">(I)</p>
                        <div class="form-check d-flex justify-content-center">
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <label class="mx-1">
                                    <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE2-I-1" value="<?= $i; ?>" />
                                </label>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE2-A']; ?></span></p>
                        <p class="h5 mb-3">(A)</p>
                        <div class="form-check d-flex justify-content-center">
                            <?php for ($i = 1; $i <= 7; $i++) { ?>
                                <label class="mx-1">
                                    <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE2-A-1" value="<?= $i; ?>" />
                                </label>
                            <?php }; ?>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE2-S']; ?></span></p>
                        <p class="h5 mb-3">(S)</p>
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <label class="mx-1">
                                <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE2-S-1" value="<?= $i; ?>" />
                            </label>
                        <?php }; ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE2-E']; ?></span></p>
                        <p class="h5 mb-3">(E)</p>
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <label class="mx-1">
                                <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE2-E-1" value="<?= $i; ?>" />
                            </label>
                        <?php }; ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 my-4 text-center border-dark">
                        <p class="h5 mb-2"><span><?= $h['SE2-C']; ?></span></p>
                        <p class="h5 mb-3">(C)</p>
                        <?php for ($i = 1; $i <= 7; $i++) { ?>
                            <label class="mx-1">
                                <input type="radio" class="option-input-SE  option-input-green option-input-green-<?= $i; ?>  radio " name="SE2-C-1" value="<?= $i; ?>" />
                            </label>
                        <?php }; ?>
                    </div>
                </div>

            <?php }; ?>
        <?php endforeach; ?>
        <hr class="my-5">

    </div>

    <div class="col-12 text-center my-5">
        <button type="submit" class="col-8 col-sm-6 col-md-4 py-3 btn btn-lg btn-success mb-2">
            <p class="h5">Submit Survey</p>
        </button>
    </div>
</form>


<?= $this->endSection(); ?>