<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Tambahkan link ke SweetAlert2 CSS dan JS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
            
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body>
        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="assets/js/vendor.min.js"></script>

        <!-- Chart JS -->
        <script src="assets/libs/chart-js/Chart.bundle.min.js"></script>

        <!-- Init js -->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <!-- Required datatable js -->
        <script src="assets/libs/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>
    </body>
</html>

<?php

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM tabel_admin WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (md5($password) == $row["password"]) {
            session_start();
            $_SESSION["username"] = $username;
            header("Location: ".$base_url."dashboard.php");
            exit();
        } else {
            echo "<script>
                    Swal.fire({
                        title: 'Login Gagal',
                        text: 'Periksa kembali username dan password.',
                        icon: 'error',
                        confirmButtonClass: 'btn btn-primary btn-xs',
                        buttonsStyling: false,
                        showConfirmButton: true,
                        onClose: function() {
                            window.location.href = '".$base_url."index.html';
                        }
                    });
                </script>";
        }
    } else {
        echo "<script>
                Swal.fire({
                    title: 'Login Gagal',
                    text: 'Periksa kembali username dan password.',
                    icon: 'error',
                    confirmButtonClass: 'btn btn-primary btn-xs',
                    buttonsStyling: false,
                    showConfirmButton: true,
                    onClose: function() {
                        window.location.href = '".$base_url."index.html';
                    }
                });
            </script>";
    }
} else {
    header("Location: ".$base_url."index.html");
    exit();
}
?>


