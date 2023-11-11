<?php
include('library.php');
$lib = new Library();
$data_barang = $lib->show();

if (isset($_GET['hapus_barang'])) {
    $kd_barang = $_GET['hapus_barang'];
    $status_hapus = $lib->delete($kd_barang);
    if ($status_hapus) {
        header('Location: index.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Bootstraps Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <!-- Data Tables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <title>localhost/bintang_bks</title>
</head>

<div class="container">
    <div class="row my-3">
        <div class="col-md">
            <h2 class="text-uppercase text-center fw-bold">Data Barang</h2>
        </div>
        <hr>
    </div>
    <div class="row">
        <div class="col-md">
            <a href="form_add.php" class="btn btn-primary"><i class="bi bi-file-earmark-plus-fill"></i>&nbsp;Tambah Data Barang</a>
        </div>
    </div>
    <div class="row my-5">
        <div class="col-md">
            <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_barang as $row) {
                        echo "<tr>";
                        echo "<td>" . $no . "</td>";
                        echo "<td>" . $row['kd_barang'] . "</td>";
                        echo "<td>" . $row['nm_barang'] . "</td>";
                        echo "<td>" . $row['jns_barang'] . "</td>";
                        echo "<td>" . $row['hrga_barang'] . "</td>";
                        echo "<td>" . $row['stok_barang'] . "</td>";
                        echo "<td><a class='btn btn-info' href='form_edit.php?kd_barang=" . $row['kd_barang'] . "'>Update</a>
                        <a class='btn btn-danger' href='index.php?hapus_barang=" . $row['kd_barang'] . "'>Hapus</a></td>";
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Close Container -->

<!-- Bootstraps -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- Data Tables -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
</body>

</html>