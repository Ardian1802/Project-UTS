<?php

$id = $_GET['id'];
$pro = new App\Projek();
$cat = new App\Kategori();

$row = $pro->edit($id);
$categories = $cat->tampil();
?>

<h1 class="h3 mb-2 text-gray-800">Data Project</h1> 
<!-- konten -->
<div class="col-md-7">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Project</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="pro_proses.php" method="post">
                    <input type="hidden" name="project_id" value="<?php echo $row['project_id']; ?>">
                        <div class="mb-3">
                            <label class="form-label">Nama Project</label>
                            <input type="text" class="form-control" name="project_name" value="<?php echo $row['project_name']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Deskripsi</label>
                            <input type="text" class="form-control" name="project_description" value="<?php echo $row['project_description']; ?>">
                        </div>
                        <div class="mb-3">
                        <label class="form-label">Kategori</label>
                        <select name="category_id" class="form-control">
                            <option value="">-Pilih Kategori-</option>
                                <?php foreach ($categories as $category) { ?>
                                    <option value="<?php echo $category['category_id']; ?>" <?php echo ($row['category_id'] == $category['category_id']) ? 'selected' : ''; ?>>
                                        <?php echo $category['category_name']; ?>
                                    </option>
                                <?php } ?>
                        </select>
                        </div>
                        <input type="submit" name="btn_update" value="Update" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div> 
</div>
