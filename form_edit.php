<?php 
include('library.php');
$lib = new Library();
if(isset($_GET['kd_barang'])){
    $kd_barang = $_GET['kd_barang']; 
    $data_barang = $lib->get_by_id($kd_barang);
}
else
{
    header('Location: index.php');
}

if(isset($_POST['tombol_update'])){
    $kd_barang = $_POST['kd_barang'];
    $nm_barang = $_POST['nm_barang'];
    $jns_barang = $_POST['jns_barang'];
    $hrga_barang = $_POST['hrga_barang'];
    $stok_barang = $_POST['stok_barang']; 
    $status_update = $lib->update($kd_barang,$nm_barang,$jns_barang,$hrga_barang,$stok_barang);
    if($status_update)
    {
        header('Location:index.php');
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3>Update Data Barang</h3>
            </div>
            <div class="card-body">
            <form method="post" action="">
                <input type="hidden" name="kd_barang" value="<?php echo $data_barang['kd_barang']; ?>"/>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="nm_barang" class="form-control" id="nm_barang" value="<?php echo $data_barang['nm_barang']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_siswa" class="col-sm-2 col-form-label">Jenis Barang</label>
                    <div class="col-sm-10">
                    <input type="text" name="jns_barang" class="form-control" id="jns_barang" value="<?php echo $data_barang['jns_barang']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Harga Barang</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="hrga_barang" id="hrga_barang"><?php echo $data_barang['hrga_barang']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">Stok Barang</label>
                    <div class="col-sm-10">
                    <textarea class="form-control" name="stok_barang" id="stok_barang"><?php echo $data_barang['stok_barang']; ?></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                    <input type="submit" name="tombol_update" class="btn btn-primary" value="Update">
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    </body>
</html>