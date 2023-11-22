<?php

$pro = new App\Kategori;
$rows = $pro->tampil();

?>

<h1 class="h3 mb-2 text-gray-800">Data Project</h1> 
<!-- konten -->
<div class="col-md-7">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Input Project</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="pro_proses.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Nama Project</label>
                        <input type="text" class="form-control" name="project_name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="project_description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="category_id" class="form-control">
                            <option value="">-Pilih Kategori-</option>
                                <?php foreach ($rows as $row) { ?>
                                    <option value="<?php echo $row['category_id']; ?>"><?php echo $row['category_name']; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div> 
    </div>
</div>
