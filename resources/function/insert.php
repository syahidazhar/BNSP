<?php
require $_SERVER['DOCUMENT_ROOT']."/BNSP/resources/function/connection.php";

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    $pilihan_beasiswa = $_POST['pilihan_beasiswa'];
    
    $query = "INSERT INTO pendaftaran
        (nama, email, no_hp, semester, ipk, pilihan_beasiswa)
        VALUES ('$nama','$email','$no_hp','$semester','$ipk','$pilihan_beasiswa')";

    // if ($query) {
    //     echo "<script>
    // alert('Berhasil Submit!');
    // window.location.href='home'
    // </script>";
    // } else {
    //     echo "<script>
    // alert('Gagal Submit :(!');
    // window.location.href='pemesanan'
    // </script>";
    // }
    mysqli_query($connect, $query);

    header("Location: http://localhost/BNSP/");
    exit();
    // if ($query) {
    //     echo "<script>
    //         alert('Berhasil Submit');
    //         window.location.href='index.php?page=home'
    //         </script>";
    //     header("Location: http://localhost/buyapps-project2_new/table");
    //     exit();
    // } else {
    //     echo "<script>
    //         alert('Gagal Submit');
    //         window.location.href='index.php?page=pemesanan'
    //         </script>";
    // }
}
