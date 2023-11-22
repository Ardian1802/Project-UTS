<?php

$ta = new App\Projek;
$rows = $ta->tampil();

?>

<h1 class="h3 mb-2 text-gray-800">Data Tugas</h1> 
<!-- konten -->
<div class="col-md-7">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Input Tugas</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="ta_proses.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="description">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deadline</label>
                        <input type="date" class="form-control" name="deadline">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" name="status">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Project</label>
                        <select name="project_id" class="form-control">
                            <option value="">-Pilih Project-</option>
                                <?php foreach ($rows as $row) { ?>
                                    <option value="<?php echo $row['project_id']; ?>"><?php echo $row['project_name']; ?></option>
                                <?php } ?>
                        </select>
                    </div>
                    <input type="submit" name="btn_simpan" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
