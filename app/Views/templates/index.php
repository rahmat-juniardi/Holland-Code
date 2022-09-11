<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/vendors/feather/feather.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/vendors/typicons/typicons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/public2/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url(); ?>/public2/images/favicon.png" />

    <link rel="stylesheet" href="<?= base_url(); ?>/public2//css/css-profile-pic.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">





    <style>
        .upload {
            width: 125px;
            position: relative;
            margin: auto;
        }

        .upload img {
            border-radius: 50%;
            border: 8px solid #DCDCDC;
        }

        .upload .round {
            position: absolute;
            bottom: 0;
            right: 0;
            background: #00B4FF;
            width: 32px;
            height: 32px;
            line-height: 33px;
            text-align: center;
            border-radius: 50%;
            overflow: hidden;
        }

        .upload .round input[type="file"] {
            position: absolute;
            transform: scale(2);
            opacity: 0;
        }

        input[type=file]::-webkit-file-upload-button {
            cursor: pointer;
        }
    </style>

</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_navbar.html -->
        <?= $this->include('templates/topbar'); ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            <?= $this->include('templates/sidebar'); ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="home-tab">
                                <div class="d-sm-flex align-items-center justify-content-between border-bottom"></div>
                                <div class="tab-content tab-content-basic">
                                    <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">


                                        <?= $this->renderSection('page-content'); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                    <!-- partial:partials/_footer.html -->
                    <!-- <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash.</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2021. All rights reserved.</span>
        </div>
      </footer> -->
                    <!-- partial -->
                </div>
                <!-- main-panel ends -->
            </div>
        </div>
        <!-- plugins:js -->
        <script src="<?= base_url(); ?>/public2/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="<?= base_url(); ?>/public2/vendors/chart.js/Chart.min.js"></script>
        <script src="<?= base_url(); ?>/public2/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
        <script src="<?= base_url(); ?>/public2/vendors/progressbar.js/progressbar.min.js"></script>

        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="<?= base_url(); ?>/public2/js/off-canvas.js"></script>
        <script src="<?= base_url(); ?>/public2/js/hoverable-collapse.js"></script>
        <script src="<?= base_url(); ?>/public2/js/template.js"></script>
        <script src="<?= base_url(); ?>/public2/js/settings.js"></script>
        <script src="<?= base_url(); ?>/public2/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page-->
        <script src="<?= base_url(); ?>/public2/js/jquery.cookie.js" type="text/javascript"></script>
        <script src="<?= base_url(); ?>/public2/js/dashboard.js"></script>
        <script src="<?= base_url(); ?>/public2/js/Chart.roundedBarCharts.js"></script>
        <!-- End custom js for this page-->

        <script>
            $(document).ready(function() {
                $('#submit').DataTable({
                    scrollX: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                });
            });

            $(document).ready(function() {
                $('#user').DataTable({
                    scrollX: true,
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ],
                });
            });
        </script>
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>


        <!-- <form class="form" id="form" action="User/updateImage" enctype="multipart/form-data" method="post">
            <div class="upload">
                <img src="<?= base_url(); ?>/public2/image_user/<?= user()->user_image; ?>" width=125 height=125 title="<?= user()->user_image; ?>">
                <div class="round">
                    <input type="hidden" name="id" value="<?= user()->id; ?>">
                    <input type="hidden" name="name" value="<?= user()->nama_lengkap; ?>">
                    <input type="file" name="image" id="image" accept=".jpg, .jpeg, .png">
                    <i class="mdi mdi-camera-party-mode" style="color: #fff;"></i>
                </div>
            </div>
        </form>
        <script type="text/javascript">
            document.getElementById("image").onchange = function() {
                document.getElementById("form").submit();
            };
        </script> -->


</body>

</html>