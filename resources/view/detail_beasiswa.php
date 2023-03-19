<?php
require_once PATH_VIEW . 'Layout/header.php';
require_once PATH_FUNCTION . 'connection.php';

$id = $_GET['id'];
$pilihan_beasiswa = $connect->query("SELECT * from pilihan_beasiswa where id='$id'");
$row = mysqli_fetch_assoc($pilihan_beasiswa);
?>

<div class="container mt-5">
    <div class="row d-flex justify-content-center text-center">
        <div class="col-md-8">
            <img src="<?= PATH_IMAGE . $row['image']?>" alt="" class="img-thumbnail img-custom"> 
        </div>
    </div>
</div>


<div class="container">
    <div class="row d-flex justify-content-center">
   
    <div class="col-md-8 offset-md-4 mt-4" style="color: white;">
        <h4 class="ms-3" style="color: white;">Ketentuan & Syarat</h4>
        <b>
            <?=$row['ketentuan']?>
        </b>
    </div>
    
    </div>
</div>
<?php
require_once PATH_VIEW . 'Layout/footer.php'
?>