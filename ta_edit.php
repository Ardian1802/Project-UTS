<?php

$id = $_GET['id'];
$ta = new App\Tugas();
$pro = new App\Projek();

$row = $ta->edit($id);
$projects = $pro->tampil();
?>

<h1 class="h3 mb-2 text-gray-800">Data Tugas</h1> 
<!-- konten -->
<div class="col-md-7">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Kategori</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="ta_proses.php" method="post">
                <input type="hidden" name="task_id" value="<?php echo $row['task_id']; ?>">
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" name="title" value="<?php echo $row['title']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deskripsi</label>
                        <input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Deadline</label>
                        <input type="date" class="form-control" name="deadline" value="<?php echo $row['deadline']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <input type="text" class="form-control" name="status" value="<?php echo $row['status']; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Project</label>
                        <select name="project_id" class="form-control">
                            <option value="">-Pilih Project-</option>
                                <?php foreach ($projects as $project) { ?>
                                    <option value="<?php echo $project['project_id']; ?>" <?php echo ($row['project_id'] == $project['project_id']) ? 'selected' : ''; ?>>
                                        <?php echo $project['project_name']; ?>
                                    </option>
                                <?php } ?>
                        </select>
                    </div>
                    <input type="submit" name="btn_update" value="Simpan" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
