<?php

$cat = new App\Kategori;
$rows = $cat->tampil();

?>

<h1 class="h3 mb-2 text-gray-800">Data Kategori</h1> 
<!-- konten -->
<div class="card shadow mb-4" >
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">

    <a href="index.php?hal=cat_input" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Data</a><br><br>

            <table class="table">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
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
                        <td><?php echo $row['category_name']; ?></td>
                        <td>
                            <a href="index.php?hal=cat_edit&id=<?php echo $row['category_id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?hal=cat_delete&id=<?php echo $row['category_id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
        </div>
    </div>
</div>