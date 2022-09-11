<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->



    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="<?= base_url(); ?>/css/style-survey.css" rel="stylesheet">
    <style type="text/css">
    </style>

</head>

<body class="text-dark">
    <div class="container-fluid container-md">


        <h1 class="text-center text-dark my-5 display-5">Inventory SDS Holland</h1>
        <hr class="border border-dark border-2 opacity-50">
        <div class="row">
            <div class="col-12">
                <table>
                    <tr>
                        <td>Pengisi survey</td>
                        <td> &emsp;: <?= user()->nama_lengkap; ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal mengisi</td>
                        <td> &emsp;: <?= date("d/m/Y");  ?></td>
                    </tr>
                </table>
            </div>

        </div>
        <hr class="border border-dark border-2 opacity-50 mb-5 " id="bagian-1">
        <div class="d-none d-sm-block sticky-top">
            <div class="row  border border-dark   bg-white sticky-top py-3 rounded ">
                <div class="col-3 text-center">
                    <a href="#bagian-1" class="btn btn-outline-primary">Bagian 1</a>
                </div>
                <div class="col-3 text-center">
                    <a href="#bagian-2" class="btn btn-outline-primary">Bagian 2</a>
                </div>
                <div class="col-3 text-center">
                    <a href="#bagian-3" class="btn btn-outline-primary">Bagian 3</a>
                </div>
                <div class="col-3 text-center">
                    <a href="#self-estimate" class="btn btn-outline-primary">Self Estimate</a>
                </div>
            </div>
        </div>
        <div class=" d-block d-sm-none sticky-top">
            <div class="row  border border-dark  bg-white sticky-top py-3 rounded">
                <div class="col-3 text-center">
                    <a href="#bagian-1" class="btn btn-outline-primary">1</a>
                </div>
                <div class="col-3 text-center">
                    <a href="#bagian-2" class="btn btn-outline-primary">2</a>
                </div>
                <div class="col-3 text-center">
                    <a href="#bagian-3" class="btn btn-outline-primary">3</a>
                </div>
                <div class="col-3 text-center">
                    <a href="#self-estimate" class="btn btn-outline-primary">S-E</a>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-12 p-0">
                <div id="content" class="text-dark">




                    <?= $this->renderSection('page-content'); ?>
                </div>
            </div>
        </div>


    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url(); ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url(); ?>/js/sb-admin-2.min.js"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>

    <script>
        $(document).ready(function() {
            $('.survey').click(function(e) {
                e.preventDefault();

                var bagian = $(this).attr('id');

                if (bagian == "bagian1") {
                    document.getElementById("content").innerHTML = "<?= $this->include('templates/topbar'); ?>";
                } else {
                    $('#content').load('bagian2.php');
                }
            });
        });
    </script>

</body>

</html>