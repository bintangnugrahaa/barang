<?php 
include('library.php');
$lib = new Library();
if(isset($_POST['tombol_tambah'])){
    $kd_barang = $_POST['kd_barang'];
	$nm_barang = $_POST['nm_barang'];
	$jns_barang = $_POST['jns_barang'];
	$hrga_barang = $_POST['hrga_barang'];
	$stok_barang = $_POST['stok_barang'];

    $add_status = $lib->add_data($kd_barang, $nm_barang, $jns_barang, $hrga_barang, $stok_barang);
    if($add_status){
    header('Location: index.php');
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
                <h3>Tambah Barang</h3>
            </div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="form-group row">
                        <label for="nama_siswa" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-10">
                            <input type="text" name="kd_barang" class="form-control" id="kd_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kelas" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text" name="nm_barang" class="form-control" id="nm_barang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Jenis Barang</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="jns_barang" id="jns_barang"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Harga Barang</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="hrga_barang" id="hrga_barang"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label">Stok Barang</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="stok_barang" id="stok_barang"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="alamat" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <input type="submit" name="tombol_tambah" class="btn btn-primary" value="Tambah"
                                onclick="alert('Data Berhasil Ditambahkan')">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</style>   