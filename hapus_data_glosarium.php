<?php
    include"koneksi.php";

    if (isset($_GET['id'])) {
        $id_admin = $_GET['id'];

        echo "ID data yang diterima: ". $id_admin;

        $sql = "DELETE FROM tabel_data_kpi WHERE id_admin = $id_admin";

        if ($conn->query($sql) === TRUE) {
            header ("Location: dashboard.php");
            exit();
        } else {
            echo "Error: ". $sql. "<br>". $conn->error;
        }
    } else {
        echo "ID data tidak di temukan";
    }
    $conn->close();
    ?>