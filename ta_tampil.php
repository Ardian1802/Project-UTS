<?php

$ta = new App\Tugas;
$rows = $ta->tampil();

?>

<h1 class="h3 mb-2 text-gray-800">Data Tugas</h1> 
<!-- konten -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tugas</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

    <a href="index.php?hal=ta_input" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a><br><br>

            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>Title</th>
                        <th>Deskripsi</th>
                        <th>Deadline</th>
                        <th>Status</th>
                        <th>Project</th>
                        <th>AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $no = 1;
                    foreach ($rows as $row) { 
                    ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['deadline']; ?></td>
                        <td><?php echo $row['status']; ?></td>
                        <td><?php echo $row['project_name']; ?></td>
                        
                        <td>
                            <a href="index.php?hal=ta_edit&id=<?php echo $row['task_id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?hal=ta_delete&id=<?php echo $row['task_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>