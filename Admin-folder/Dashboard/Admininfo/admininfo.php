<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "idiscuss-forum";

//for generating a connection
$conn = mysqli_connect($servername, $username, $password, $database);
if ($conn) {

    // echo "con successful";
} else {
    //  echo "not success"; 
}

// $sql = "SELECT * FROM `admin`";

// $sql = "SELECT * FROM `admin` WHERE `Admin-id` =  " .  $_SESSION['Admin-id'] . "";

// $result = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($result);



// $name = $row['ad-username'];
// $country = $row['Admin_Position'];
// $Email = $row['Admin_Email'];


?>

<html lang="en" class="" style="height: auto;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Discussion Forum Site</title>
    <link rel="icon" href="">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <!-- <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="http://localhost/odfs/dist/css/adminlte.css">
    <link rel="stylesheet" href="http://localhost/odfs/dist/css/custom.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="http://localhost/odfs/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- BOOTSTRAP-LINK -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!-- Data-tables-link -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css.">
    <style type="text/css">
        /* Chart.js */
        @keyframes chartjs-render-animation {
            from {
                opacity: .99
            }

            to {
                opacity: 1
            }
        }

        .chartjs-render-monitor {
            animation: chartjs-render-animation 1ms
        }

        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1
        }

        .chartjs-size-monitor-expand>div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0
        }

        .chartjs-size-monitor-shrink>div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0;
            top: 0
        }

        #myTable {
            margin-left: auto;
            margin-right: auto;
            border-spacing: 10px;
            /* border-collapse: separate; */
        }


        .form-group.note-form-group.note-group-select-from-files {
            display: none;
        }
    </style>

    <!-- jQuery -->
    <script src="http://localhost/odfs/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="http://localhost/odfs/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="http://localhost/odfs/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- Toastr -->
    <!-- <script src="http://localhost/odfs/plugins/toastr/toastr.min.js"></script> -->

</head>

<body class="sidebar-mini layout-fixed control-sidebar-slide-open layout-navbar-fixed sidebar-mini-md sidebar-mini-xs text-sm sidebar-collapse" data-new-gr-c-s-check-loaded="14.991.0" data-gr-ext-installed="" style="height: auto;">
    <div class="wrapper">
        <style>
            .user-img {
                position: absolute;
                height: 27px;
                width: 27px;
                object-fit: cover;
                left: -7%;
                top: -12%;
            }

            .btn-rounded {
                border-radius: 50px;
            }
        </style>
        <?php
        include('../adminheader/adminheader.php')
        ?>



        <!-- Main Sidebar Container -->
        <aside class="main-sidebar main-sidebar-custom sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="http://localhost/Forum2/index.php" class="brand-link">
                <img src="../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">iDiscuss</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../userdeafult.jpg" class="img-circle elevation-2 my-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="./commenthandel.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Comments
                                    <span class="right badge badge-success">New</span>

                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./threadhandel.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Thread
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../category/category.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Categories
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="../post/posthandel.php" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Posts
                                    <span class="right badge badge-success">New</span>
                                </p>
                            </a>
                        </li>

                </nav>
                <!-- /.sidebar-menu -->
            </div>

        </aside>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Admin Reccord</h1>


                        </div>




                        <div class="col-12 mx-auto">
                            <div class="container my-4">
                                <div class="card rounded-0 shadow">
                                    <div class="card-header">

                                        <h5 class="card-title">Admin Reccord</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <form action="" id="post-form" method="post">
                                                <input type="hidden" name="id" value="">
                                                <div class="form-group">
                                                    <label for="title" class="control-label my-2">Username</label>
                                                    <input type="text" class="form-control rounded-0" name="title" id="title" value="">
                                                </div>




                                        </div>

                                        <div class="form-group">
                                            <label for="content" class="control-label my-3">Email</label>
                                            <input type="text" class="form-control rounded-0" name="title" id="title" value="">


                                        </div>

                                        <button class="btn btn-flat btn-sm btn-primary bg-gradient-success rounded-0 my-3" form="post-form" type="submit"><i class="fa fa-save"></i> Updated</button>



                                    </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>






                </div>
        </div>
    </div>
    </container-fluid>
    </section>




    <!-- /.card-footer-->
    </div>
    <!-- /.card -->
    </div>
    </div>
    </div>
    </section>
    <!-- /.content -->
    </div>





    <!-- /.content -->
    <!-- <footer class="main-footer text-sm"> -->
    <!-- <strong>Copyright © 2023. -->
    <!-- <a href=""></a> -->
    <!-- </strong> -->
    <!-- All rights reserved. -->

    <!-- </footer> -->

    <!-- ./wrapper -->

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="http://localhost/odfs/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="http://localhost/odfs/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="http://localhost/odfs/plugins/sparklines/sparkline.js"></script>
    <!-- Select2 -->
    <script src="http://localhost/odfs/plugins/select2/js/select2.full.min.js"></script>
    <!-- JQVMap -->
    <script src="http://localhost/odfs/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="http://localhost/odfs/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="http://localhost/odfs/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="http://localhost/odfs/plugins/moment/moment.min.js"></script>
    <script src="http://localhost/odfs/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="http://localhost/odfs/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="http://localhost/odfs/plugins/summernote/summernote-bs4.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="http://localhost/odfs/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <!-- AdminLTE App -->
    <script src="http://localhost/odfs/dist/js/adminlte.js"></script>

    <!-- <script>
        <?php
        echo isset($_GET['successMsg']) ? "Swal.fire('Done!','" . $_GET['successMsg'] . "')" : "";

        ?>
        $("body").on("click", ".btn-delete-post", function() {
            const id = $(this).attr("data-id");
            Swal.fire({
                title: 'Are you sure?',
                text: 'You are about to delete this Post.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Get the thread ID from the page
                    var threadID = id

                    // Send an AJAX request to deleteThread.php
                    $.ajax({
                        url: 'postdelete.php',
                        type: 'POST',
                        data: {
                            postid: threadID
                        },
                        success: function(response) {
                            console.log(response);
                            response = JSON.parse(response);
                            // Check the response code
                            if (response.code == 200) {
                                // Show the success popup
                                Swal.fire({
                                    title: 'Thread Deleted!',
                                    text: 'The Post has been successfully deleted.',
                                    icon: 'success'
                                }).then(res => {
                                    window.location.reload();
                                });
                            } else {
                                // Show an error popup
                                Swal.fire({
                                    title: 'Error!',
                                    text: 'An error occurred while deleting the Post.',
                                    icon: 'error'
                                });
                            }
                        },
                        error: function() {
                            // Show an error popup
                            Swal.fire({
                                title: 'Error!',
                                text: 'An error occurred while deleting the thread.',
                                icon: 'error'
                            });
                        }
                    });
                }
            });
        })
    </script> -->

</body>

</html>