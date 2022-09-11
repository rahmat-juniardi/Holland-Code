<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>

    <!-- <link href="<?= base_url(); ?>/css/style-survey.css" rel="stylesheet"> -->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>/css2/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <style>
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
            width: 36px;
            position: absolute;
            display: inline-block;
            font-size: 26.66667px;
            text-align: center;
            line-height: 40px;
        }

        .option-input-green-S:checked::before {
            margin-top: -3px;
            content: "S";
        }

        .option-input-green-Y:checked::before {
            margin-top: -2px;
            content: "Y";
        }

        .option-input-red-TS:checked::before {
            margin-top: -2.5px;
            content: "TS";
        }

        .option-input-red-T:checked::before {
            margin-top: -2px;
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
            margin-top: -8px;
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
            width: 26px;
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
            margin-top: -8px;
            color: #33a474;
            content: "1";
        }

        .option-input-green-2::before {
            margin-top: -8px;
            color: #33a474;
            content: "2";
        }

        .option-input-green-3::before {
            margin-top: -8px;
            color: #33a474;
            content: "3";
        }

        .option-input-green-4::before {
            margin-top: -8px;
            color: #33a474;
            content: "4";
        }

        .option-input-green-5::before {
            margin-top: -8px;
            color: #33a474;
            content: "5";
        }

        .option-input-green-6::before {
            margin-top: -8px;
            color: #33a474;
            content: "6";
        }

        .option-input-green-7::before {
            margin-top: -8px;
            color: #33a474;
            content: "7";
        }

        /* .option-input-green:hover::before {
            color: #fff;
        } */
    </style>

</head>

<body>


    <div class="container">
        <div class="row my-5">
            <div class="col-6 col-xl-6 d-flex align-items-center">

                <h1 class="display-6 mb-3">Lembar Jawaban SDS Holland</h1>
            </div>
            <div class="col-1	d-md-none d-xxl-block"></div>
            <div class=" col-xl-6 col-xxl-5">
                <div class="row">

                    <div class="col-12 col-sm-6">
                        <table>
                            <tr class="align-top">
                                <td>Nama</td>
                                <td class=" px-2">:</td>
                                <td><?= $biodata['nama_lengkap']; ?></td>
                            </tr>
                            <tr class="align-top">
                                <td class="pe-5 pe-sm-0">Pendidikan</td>
                                <td class=" px-2">:</td>
                                <td><?= $biodata['pendidikan']; ?></td>
                            </tr>
                            <tr class="align-top">
                                <td>Jurusan</td>
                                <td class="px-2">:</td>
                                <td><?= $biodata['jurusan']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-12 col-sm-6">
                        <table>
                            <tr class="align-top">
                                <td>Umur</td>
                                <td class="px-2">:</td>
                                <td><?= $biodata['umur']; ?></td>
                            </tr>
                            <tr class="align-top">
                                <td>Jenis Kelamin</td>
                                <td class="px-2">:</td>
                                <td><?= $biodata['jenis_kelamin']; ?></td>
                            </tr>
                            <tr class="align-top">
                                <td class="pe-3 pe-sm-0">Pekerjaan Ayah</td>
                                <td class="px-2">:</td>
                                <td><?= $biodata['pekerjaan_ayah']; ?></td>
                            </tr>
                            <tr class="align-top">
                                <td>Pekerjaan Ibu</td>
                                <td class="px-2">:</td>
                                <td><?= $biodata['pekerjaan_ayah']; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class="my-0">Tanggal pengerjaan : <?= $tanggal; ?></p>
            </div>
        </div>
        <hr class="">

        <div class="row ">
            <div class="col">
                <p class="fs-5 my-0">Total Skor : <?= $skor; ?></p>
                <p class="fs-5">3 Skor Tertinggi (Kode Huruf) : <?= $tiga_skor_kode; ?></p>

            </div>
        </div>
        <div class="row">
            <?php foreach ($hollandIndex as $h) : ?>
                <div class="col-2 d-flex justify-content-evenly ">
                    <p class="fs-4 my-0"><?= $h; ?> : <?= $skor_RIASEC[$h]; ?></p>
                </div>
            <?php endforeach; ?>
        </div>


        <!-- start main content -->
        <!-- Bagian 1 -->
        <hr class="">
        <div class="row">
            <div class="col-auto">
                <!-- <p class="h4">Kegiatan : huruf 'S' untuk kegiatan yang Anda suka </p> -->
                <figure class="text-start my-0">
                    <blockquote class=" my-0">
                        <p class="h5">Bagian 1 - Kegiatan</p>
                    </blockquote>
                    <figcaption class="blockquote-footer my-1">
                        Huruf <cite>S</cite> untuk kegiatan yang Anda suka lakukan.
                    </figcaption>
                    <figcaption class="blockquote-footer my-1">
                        Huruf <cite>T</cite> untuk kegiatan yang Anda tidak suka lakukan.
                    </figcaption>
                </figure>
            </div>
        </div>
        <hr class="">
        <div class="row ">
            <?php foreach ($hollandIndex as $h) : ?>
                <div class="col-2 ">
                    <h3 class="text-star ps-3"><?= $h; ?></h3>
                    <table class="d-flex justify-content-evenly">


                        <?php for ($i = 0; $i < count($record_jawaban['B1-' . $h]); $i++) : ?>

                            <tr>
                                <td>
                                    <p class="h5 mx-2 d-none d-md-block"><?= $i + 1; ?></p>
                                </td>
                                <?php if ($record_jawaban['B1-' . $h][$i] == 'S') {; ?>

                                    <td>
                                        <input type="radio" class="mx-2 option-input option-input-green option-input-green-S  radio " checked disabled value="S" />
                                    </td>

                                <?php } else { ?>

                                    <td>
                                        <input type="radio" class="mx-2 option-input option-input-red option-input-red-T  radio " checked disabled value="S" />
                                    </td>

                                <?php }; ?>
                            </tr>

                        <?php endfor;    ?>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Bagian 2 -->
        <hr class="">
        <div class="row">
            <div class="col-auto">
                <!-- <p class="h4">Kegiatan : huruf 'S' untuk kegiatan yang Anda suka </p> -->
                <figure class="text-start my-0">
                    <blockquote class="blockquote my-0">
                        <p class="h5">Bagian 2 - Keahlian</p>
                    </blockquote>
                    <figcaption class="blockquote-footer my-1">
                        Huruf <cite>Y</cite> untuk kegiatan yang dapat Anda lakukan dengan baik atau terampil.
                    </figcaption>
                    <figcaption class="blockquote-footer my-1">
                        Huruf <cite>T</cite> untuk kegiatan yang tidak dapat Anda lakukan dengan baik.
                    </figcaption>
                </figure>
            </div>
        </div>
        <hr class="">
        <div class="row ">
            <?php foreach ($hollandIndex as $h) : ?>
                <div class="col-2 ">
                    <h3 class="text-star ps-3"><?= $h; ?></h3>
                    <table class="d-flex justify-content-evenly">
                        <?php for ($i = 0; $i < count($record_jawaban['B2-' . $h]); $i++) : ?>
                            <tr>
                                <td>
                                    <p class="h5 mx-2 d-none d-md-block"><?= $i + 1; ?></p>
                                </td>
                                <?php if ($record_jawaban['B2-' . $h][$i] == 'Y') {; ?>

                                    <td>
                                        <input type="radio" class="mx-2 option-input option-input-green option-input-green-Y  radio " checked disabled value="S" />
                                    </td>

                                <?php } else { ?>

                                    <td>
                                        <input type="radio" class="mx-2 option-input option-input-red option-input-red-T  radio " checked disabled value="S" />
                                    </td>

                                <?php }; ?>
                            </tr>

                        <?php endfor;    ?>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Bagian 3 -->
        <hr class="">
        <div class="row">
            <div class="col-auto">
                <!-- <p class="h4">Kegiatan : huruf 'S' untuk kegiatan yang Anda suka </p> -->
                <figure class="text-start my-0">
                    <blockquote class="blockquote my-0">
                        <p class="h5">Bagian 3 - Pekerjaan</p>
                    </blockquote>
                    <figcaption class="blockquote-footer my-1">
                        Dibawah ini merupakan inventori mengenai perasaan dan sikap Anda dalam berbagai macam Pekerjaan.
                    </figcaption>
                    <figcaption class="blockquote-footer my-1">
                        Huruf <cite>Y</cite> untuk Pekerjaan yang menarik bagi Anda.
                    </figcaption>
                    <figcaption class="blockquote-footer my-1">
                        Huruf <cite>T</cite> untuk Pekerjaan yang tidak menarik atau tidak Anda sukai.
                    </figcaption>
                </figure>
            </div>
        </div>
        <hr class="">
        <div class="row ">
            <?php foreach ($hollandIndex as $h) : ?>
                <div class="col-2 ">
                    <h3 class="text-star ps-3"><?= $h; ?></h3>
                    <table class="d-flex justify-content-evenly">
                        <?php for ($i = 0; $i < count($record_jawaban['B3-' . $h]); $i++) : ?>
                            <tr>
                                <td>
                                    <p class="h5 mx-2 d-none d-md-block"><?= $i + 1; ?></p>
                                </td>
                                <?php if ($record_jawaban['B3-' . $h][$i] == 'Y') {; ?>

                                    <td>
                                        <input type="radio" class="mx-2 option-input option-input-green option-input-green-Y  radio " checked disabled value="S" />
                                    </td>

                                <?php } else { ?>

                                    <td>
                                        <input type="radio" class="mx-2 option-input option-input-red option-input-red-T  radio " checked disabled value="S" />
                                    </td>

                                <?php }; ?>
                            </tr>

                        <?php endfor;    ?>
                    </table>
                </div>
            <?php endforeach; ?>
        </div>

        <!-- Self Estimate -->
        <hr class="">
        <div class="row">
            <div class="col-auto">
                <!-- <p class="h4">Kegiatan : huruf 'S' untuk kegiatan yang Anda suka </p> -->
                <figure class="text-start my-0">
                    <blockquote class="blockquote my-0">
                        <p class="h5">Self Estimate</p>
                    </blockquote>
                    <figcaption class="blockquote-footer my-1">
                        Penilaian tentang karakteristik yang sesuai dengan yang Anda pikirkan bila dibandingkan dengan orang lain seusia dengan Anda.
                    </figcaption>
                    <figcaption class="blockquote-footer my-1">
                        Angka yang dipilih merupakan angka yang sesuai dengan Anda dan tidak memberikan nilai yang sama untuk karakteristik yang berbeda.
                    </figcaption>
                </figure>
            </div>
        </div>
        <hr class="">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Mekanik</span></p>
                <p class="h5 mb-3">(R)</p>

                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE1-R'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>

            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Sains</span></p>
                <p class="h5 mb-3">(I)</p>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE1-I'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>

            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Artistik</span></p>
                <p class="h5 mb-3">(A)</p>

                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE1-A'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>

            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Mengajar</span></p>
                <p class="h5 mb-3">(S)</p>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE1-S'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Menjual</span></p>
                <p class="h5 mb-3">(E)</p>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE1-E'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Administratif</span></p>
                <p class="h5 mb-3">(C)</p>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE1-C'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>
            </div>
        </div>
        <hr class="">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Mekanik</span></p>
                <p class="h5 mb-3">(R)</p>

                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE2-R'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>

            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Sains</span></p>
                <p class="h5 mb-3">(I)</p>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE2-I'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>

            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Artistik</span></p>
                <p class="h5 mb-3">(A)</p>

                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE2-A'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>

            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Mengajar</span></p>
                <p class="h5 mb-3">(S)</p>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE2-S'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Menjual</span></p>
                <p class="h5 mb-3">(E)</p>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE2-E'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>
            </div>
            <div class="col-12 col-md-6 col-xl-4 my-4 text-center border-dark">
                <p class="h5 mb-2"><span>Kemampuan Administratif</span></p>
                <p class="h5 mb-3">(C)</p>
                <?php for ($i = 1; $i <= 7; $i++) { ?>
                    <label class="mx-1">
                        <input type="radio" class="option-input-SE  option-input-green-SE option-input-green-<?= $i; ?>  radio " <?= ($record_jawaban['SE2-C'][0] == $i) ? 'checked' : ''; ?> disabled value="" />
                    </label>
                <?php }; ?>
            </div>
        </div>
        <hr class="">


    </div>

    <script src="<?= base_url(); ?>/js2/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
<!-- dd($data['record_jawaban']['B1-R']['3']); -->
<!-- 'title' => 'Hasil Survey',
            'tanggal'   => $hasil['tanggal'],
            'skor' => $hasil['skor'],
            'record_jawaban' => json_decode($hasil['record_jawaban'], true),
            'skor_RIASEC' => json_decode($hasil['skor_RIASEC'], true),
            'tiga_skor_kode' => json_decode($hasil['tiga_skor_kode'], true),
            'hollandIndex' => $this->hollandIndex['tabel'],
            'columnName' => $this->columnName -->

</html>