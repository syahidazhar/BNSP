<?php 
include PATH_VIEW . 'Layout/header.php';
?>

<div class="container">
    <div class="row mt-4 d-flex justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">FORM PEMESANAN</h4>
                    <form action="insert" method="post">
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Masukkan Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" required="true" name="nama">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Masukkan Email</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="email" required="true" name="email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="no_hp" required="true" name="no_hp" minlength="8">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Semester saat ini</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-select" id="semester" name="semester" required="true">
                                    <option value="1">Semester 1</option>
                                    <option value="2">Semester 2</option>
                                    <option value="3">Semester 3</option>
                                    <option value="4">Semester 4</option>
                                    <option value="5">Semester 5</option>
                                    <option value="6">Semester 6</option>
                                    <option value="7">Semester 7</option>
                                    <option value="8">Semester 8</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">IPK Terakhir</label>
                            <div class="col-sm-10">
                                <input readonly value="" type="text" class="form-control" id="ipk" required="true" name="ipk">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Pilihan Beasiswa</label>
                            <div class="col-sm-10">
                                <select type="text" class="form-select" id="pilihan_beasiswa" name="pilihan_beasiswa" required="true">
                                <option value="sa">Yes</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-2">
                                <label for="file">Upload berkas:</label>
                            </div>
                            <div class="col">
                                <input type="file" id="file" name="file">
                            </div>
                            
                        </div>

                        

                        <div class="row d-flex justify-content-between">
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-outline-warning" id="submit" name="submit">Submit</button>
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="btn btn-outline-warning" >Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include PATH_VIEW . 'Layout/footer.php';
?>