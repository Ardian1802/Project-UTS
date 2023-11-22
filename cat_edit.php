<?php

$id = $_GET['id'];
$cat = new App\Kategori();

$row = $cat->edit($id);
?>

<h1 class="h3 mb-2 text-gray-800">Data Kategori</h1> 
<!-- konten -->
<div class="col-md-7">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Kategori</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="cat_proses.php" method="post">
                    <input type="hidden" name="category_id" value="<?php echo $row['category_id']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Kategori</label>
                            <input type="text" class="form-control" name="category_name" value="<?php echo $row['category_name']; ?>">
                        </div>
                        <input type="submit" name="btn_update" value="Update" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
