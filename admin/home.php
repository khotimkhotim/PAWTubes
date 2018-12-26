<?php
include "config/koneksi.php";

$data = mysql_query("SELECT COUNT(*) AS jumlah FROM data_siswa_pkl");
   
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../layout_admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../layout_admin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../layout_admin/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../layout_admin/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="../layout_admin/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../layout_admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

</head>
<html lang="en">
<div class="col-lg-8">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Selamat Datang di Halaman Administrator
                        </div>
                        <div class="panel-body">
                            <p>Di halaman ini ada beberapa kumpulan data </p>
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
    
    <!-- /#wrapper -->

    <script src="../layout_admin/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../layout_admin/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../layout_admin/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../layout_admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../layout_admin/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../layout_admin/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../layout_admin/dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
