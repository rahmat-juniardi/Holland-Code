<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        .table,
        .td,
        .th {
            border: 1px solid #333;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .td,
        .th {
            padding: 10px;
            text-align: center;
        }

        .th {
            background-color: #ccc;
        }

        .option-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            height: 40px;
            width: 40px;
            transition: all 0.15s ease-out 0s;
            background: none;

            color: #555;
            cursor: pointer;
            display: inline-block;
            outline: none;
            position: relative;
            z-index: 1000;
        }

        .option-input-green {
            border: 2px solid #33a474;
        }

        .option-input-green-SE {
            border: 2px solid #33a474;
        }


        .option-input-red {
            border: 2px solid #b84747;
        }

        /* .option-input-green:hover {
            background: #33a474;
        }

        .option-input-red:hover {
            background: #b84747;
        } */

        .option-input-green:checked {
            border: 2px solid #33a474;
        }

        .option-input-green-SE:checked {
            background: #33a474;
        }

        .option-input-red:checked {
            border: 2px solid #b84747;
        }

        .option-input:checked::before {
            height: 40px;
            width: 42px;
            position: absolute;
            display: inline-block;
            font-size: 26.66667px;
            text-align: center;
            line-height: 40px;
        }

        .option-input-green-S:checked::before {
            margin-top: -11px;
            content: "S";
        }

        .option-input-green-Y:checked::before {
            margin-top: -8px;
            content: "Y";
        }

        .option-input-red-TS:checked::before {
            margin-top: -2.5px;
            content: "TS";
        }

        .option-input-red-T:checked::before {
            margin-top: -8px;
            content: "T";
        }

        .option-input-green-1:checked::before {
            margin-top: -8px;
            color: #fff;
            content: "1";
        }

        .option-input-green-2:checked::before {
            margin-top: -8px;
            color: #fff;
            content: "2";
        }

        .option-input-green-3:checked::before {
            margin-top: -8px;
            color: #fff;
            content: "3";
        }

        .option-input-green-4:checked::before {
            margin-top: -16px;
            color: #fff;
            content: "4";
        }

        .option-input-green-5:checked::before {
            margin-top: -8px;
            color: #fff;
            content: "5";
        }

        .option-input-green-6:checked::before {
            margin-top: -8px;
            color: #fff;
            content: "6";
        }

        .option-input-green-7:checked::before {
            margin-top: -8px;
            color: #fff;
            content: "7";
        }

        .option-input.radio {
            border-radius: 50%;
        }

        .option-input.radio::after {
            border-radius: 50%;
        }

        /* Self-estimate */
        .option-input-SE {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            height: 30px;
            width: 30px;
            transition: all 0.15s ease-out 0s;
            background: none;

            cursor: pointer;
            display: inline-block;
            outline: none;
            position: relative;
            z-index: 1000;
        }

        .option-input-SE::before {
            height: 40px;
            width: 30px;
            position: absolute;
            display: inline-block;
            font-size: 20.66667px;
            text-align: center;
            line-height: 40px;
            margin-top: -3px;
            color: #000;
        }

        .option-input-SE.radio {
            border-radius: 50%;
        }

        .option-input-SE.radio::after {
            border-radius: 50%;
        }

        .option-input-green-1::before {
            margin-top: -18px;
            color: #33a474;
            content: "1";
        }

        .option-input-green-2::before {
            margin-top: -18px;
            color: #33a474;
            content: "2";
        }

        .option-input-green-3::before {
            margin-top: -18px;
            color: #33a474;
            content: "3";
        }

        .option-input-green-4::before {
            margin-top: -18px;
            color: #33a474;
            content: "4";
        }

        .option-input-green-5::before {
            margin-top: -18px;
            color: #33a474;
            content: "5";
        }

        .option-input-green-6::before {
            margin-top: -18px;
            color: #33a474;
            content: "6";
        }

        .option-input-green-7::before {
            margin-top: -18px;
            color: #33a474;
            content: "7";
        }

        .text-center {
            text-align: center !important;
        }

        .text-start {
            text-align: start !important;
        }

        .border-none {
            border: 0px !important;
        }

        .my-30 {
            margin: 30px 0px 30px 0px;
        }

        .ms-20 {
            margin-left: 20px;
        }

        /* .option-input-green:hover::before {
            color: #fff;
        } */
    </style>

</head>

<body>
    <div class="container">
        <div class="row my-5">
            <div class="col-6 col-xl-6 d-flex align-items-center text-center">
                <h1 class="display-6 mb-3">Lembar Jawaban SDS Holland</h1>
            </div>
            <hr class="my-30">


            <table style="border: 0px; text-align:start; width: auto;">
                <tr>
                    <td>Nama</td>
                    <td>: <?= $biodata['nama_lengkap']; ?></td>

                    <td style="padding-left: 30px;">Pendidikan</td>
                    <td>: <?= $biodata['pendidikan']; ?></td>


                    <td style="padding-left: 30px;">Pekerjaan Ayah</td>
                    <td>: <?= $biodata['pekerjaan_ayah']; ?></td>
                </tr>
                <tr>
                    <td>Nim</td>
                    <td>: <?= user()->nim; ?></td>

                    <td style="padding-left: 30px;">Umur</td>
                    <td>: <?= $biodata['umur']; ?></td>


                    <td style="padding-left: 30px;">Pekerjaan Ibu</td>
                    <td>: <?= $biodata['pekerjaan_ayah']; ?></td>
                </tr>
                <tr>
                    <td">Jurusan</td>
                        <td>: <?= $biodata['jurusan']; ?></td>

                        <td style="padding-left: 30px;">Jenis Kelamin</td>
                        <td>: <?= $biodata['jenis_kelamin']; ?></td>
                </tr>
            </table>


        </div>
        <div class="row">
            <div class="col">
                <p class="my-0">Tanggal pengerjaan : <?= $tanggal; ?></p>
            </div>
        </div>
        <hr class="">

        <div class="row ">
            <div class="col">
                <p class="fs-5 my-0">Total Skor : <?= ($status_skor == 'Tidak tampil') ? '-' : $skor; ?></p>
                <p class="fs-5">3 Skor Tertinggi (Kode Huruf) : <?= $tiga_skor_kode; ?></p>
            </div>
        </div>

        <table style="border: 0px; text-align:start; width:100%;">
            <tr>
                <?php foreach ($hollandIndex as $h) : ?>
                    <td>
                        <p style="padding-left: 30px;"><?= $h; ?> : <?= $skor_RIASEC[$h]; ?></p>
                    </td>
                <?php endforeach; ?>
            </tr>
        </table>



        <!-- start main content -->
        <!-- Bagian 1 -->
        <hr class="my-30">


        <h3>Bagian 1 - Kegiatan</h3>
        <p>- Huruf <cite>S</cite> untuk kegiatan yang Anda suka lakukan. </p>
        <p>- Huruf <cite>T</cite> untuk kegiatan yang Anda tidak suka lakukan.</p>




        <table class="table">
            <tr class="tr">
                <th class="px-2 th">
                    No.
                </th>
                <?php foreach ($hollandIndex as $h) : ?>
                    <th class="px-3 th">
                        <p class="h3">
                            <?= $h; ?>
                        </p>
                    </th>
                <?php endforeach; ?>
            </tr>
            <?php for ($i = 0; $i < count($record_jawaban['B1-R']); $i++) : ?>
                <tr>
                    <td class="px-2 td"> <?= $i + 1; ?>.</td>
                    <?php foreach ($hollandIndex as $h) : ?>
                        <td class="px-3 td">
                            <?php if ($record_jawaban['B1-' . $h][$i] == 'S') {; ?>
                                <input type="radio" class="mx-2 option-input option-input-green option-input-green-S  radio " checked disabled value="S" />
                            <?php } else { ?>
                                <input type="radio" class="mx-2 option-input option-input-red option-input-red-T  radio " checked disabled value="S" />
                            <?php }; ?>

                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor;    ?>
        </table>

        <!-- Bagian 2 -->
        <hr class="my-30">

        <h3>Bagian 2 - Keahlian</h3>
        <p>- Huruf <cite>Y</cite> untuk kegiatan yang dapat Anda lakukan dengan baik atau terampil.</p>
        <p>- Huruf <cite>T</cite> untuk kegiatan yang tidak dapat Anda lakukan dengan baik.</p>


        <table class="table">
            <tr class="tr">
                <th class="px-2 th">
                    No.
                </th>
                <?php foreach ($hollandIndex as $h) : ?>
                    <th class="px-3 th">
                        <p class="h3">
                            <?= $h; ?>
                        </p>
                    </th>
                <?php endforeach; ?>
            </tr>
            <?php for ($i = 0; $i < count($record_jawaban['B2-R']); $i++) : ?>
                <tr>
                    <td class="px-2 td"> <?= $i + 1; ?>.</td>
                    <?php foreach ($hollandIndex as $h) : ?>
                        <td class="px-3 td">
                            <?php if ($record_jawaban['B2-' . $h][$i] == 'Y') {; ?>
                                <input type="radio" class="mx-2 option-input option-input-green option-input-green-Y  radio " checked disabled value="S" />
                            <?php } else { ?>
                                <input type="radio" class="mx-2 option-input option-input-red option-input-red-T  radio " checked disabled value="S" />
                            <?php }; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor;    ?>
        </table>


        <!-- Bagian 3 -->
        <hr class="my-30">

        <h3>Bagian 3 - Pekerjaan</h3>
        <p>Dibawah ini merupakan inventori mengenai perasaan dan sikap Anda dalam berbagai macam Pekerjaan.</p>
        <p>- Huruf <cite>Y</cite> untuk Pekerjaan yang menarik bagi Anda.</p>
        <p>- Huruf <cite>T</cite> untuk Pekerjaan yang tidak menarik atau tidak Anda sukai.</p>

        <table class="table">
            <tr class="tr">
                <th class="px-2 th">
                    No.
                </th>
                <?php foreach ($hollandIndex as $h) : ?>
                    <th class="px-3 th">
                        <p class="h3">
                            <?= $h; ?>
                        </p>
                    </th>
                <?php endforeach; ?>
            </tr>
            <?php for ($i = 0; $i < count($record_jawaban['B3-R']); $i++) : ?>
                <tr>
                    <td class="px-2 td"> <?= $i + 1; ?>.</td>
                    <?php foreach ($hollandIndex as $h) : ?>
                        <td class="px-3 td">
                            <?php if ($record_jawaban['B3-' . $h][$i] == 'Y') {; ?>
                                <input type="radio" class="mx-2 option-input option-input-green option-input-green-Y  radio " checked disabled value="S" />
                            <?php } else { ?>
                                <input type="radio" class="mx-2 option-input option-input-red option-input-red-T  radio " checked disabled value="S" />
                            <?php }; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endfor;    ?>
        </table>


        <!-- Self Estimate -->
        <hr class="my-30">

        <h3>Self Estimate</h3>
        <p>- Penilaian tentang karakteristik yang sesuai dengan yang Anda pikirkan bila dibandingkan dengan orang lain seusia dengan Anda.</p>
        <p>- Angka yang dipilih merupakan angka yang sesuai dengan Anda dan tidak memberikan nilai yang sama untuk karakteristik yang berbeda.</p>

        <table style="border: 0px; text-align:center; width: 100%;">
            <tr>
                <td>
                    <p><span>Kemampuan Mekanik</span></p>
                    <p>(R)</p>

                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE1-R'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Kemampuan Sains</span></p>
                    <p class="h5 mb-3">(I)</p>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE1-I'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Kemampuan Artistik</span></p>
                    <p class="h5 mb-3">(A)</p>

                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE1-A'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Kemampuan Mengajar</span></p>
                    <p class="h5 mb-3">(S)</p>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE1-S'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Kemampuan Menjual</span></p>
                    <p class="h5 mb-3">(E)</p>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE1-E'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Kemampuan Administratif</span></p>
                    <p class="h5 mb-3">(C)</p>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE1-C'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
            </tr>
        </table>
        <br class="my-30">

        <table style="border: 0px; text-align:center; width: 100%;">
            <tr>
                <td>
                    <p><span>Keterampilan Manual</span></p>
                    <p>(R)</p>

                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE2-R'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Kemampuan Matematik</span></p>
                    <p class="h5 mb-3">(I)</p>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE2-I'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Kemampuan Musik</span></p>
                    <p class="h5 mb-3">(A)</p>

                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE2-A'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Keramahtamahan</span></p>
                    <p class="h5 mb-3">(S)</p>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE2-S'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Kemampuan Manajerial</span></p>
                    <p class="h5 mb-3">(E)</p>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE2-E'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
                <td>
                    <p class="h5 mb-2"><span>Keterampilan Perkantoran</span></p>
                    <p class="h5 mb-3">(C)</p>
                    <?php for ($i = 1; $i <= 7; $i++) { ?>
                        <?php if ($record_jawaban['SE2-C'][0] == $i) { ?>
                            <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?> checked radio " checked disabled value="" />
                        <?php }; ?>
                    <?php }; ?>
                </td>
            </tr>
        </table>


</body>

</html>