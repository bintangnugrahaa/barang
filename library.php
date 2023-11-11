<?php 
class library 
{
public function __construct()
{
$host = "localhost";
$dbname = "bintang_bks";
$username = "root";
$password = "root";
$this->db = new 
PDO("mysql:host={$host};dbname={$dbname}", $username,$password);
}
pUblic function add_data($kd_barang, $nm_barang, $jns_barang, $hrga_barang, $stok_barang)
{
$data = $this->db->prepare('INSERT INTO barang (kd_barang,nm_barang,jns_barang,hrga_barang,stok_barang) 
VALUES (?,?,?,?,?)');

$data->bindParam(1,$kd_barang);
$data->bindParam(2,$nm_barang);
$data->bindParam(3,$jns_barang);
$data->bindParam(4,$hrga_barang);
$data->bindParam(5,$stok_barang); 

$data->execute();
return $data->rowCount();
}
    public function show()
    {
        $query = $this->db->prepare("SELECT * FROM barang");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

    public function get_by_id($kd_barang){
        $query = $this->db->prepare("SELECT * FROM barang where kd_barang=?");
        $query->bindParam(1, $kd_barang);
        $query->execute();
        return $query->fetch();
    }

    public function update($kd_barang,$nm_barang,$jns_barang,$hrga_barang,$stok_barang){
        $query = $this->db->prepare('UPDATE barang set nm_barang=?,jns_barang=?,hrga_barang=?,stok_barang=? where kd_barang=?');
        
        $query->bindParam(1, $nm_barang);
        $query->bindParam(2, $jns_barang);
        $query->bindParam(3, $hrga_barang);
        $query->bindParam(4, $stok_barang);
        $query->bindParam(5, $kd_barang);

        $query->execute();
        return $query->rowCount();
    }

    public function delete($kd_barang)
    {
        $query = $this->db->prepare("DELETE FROM barang where kd_barang=?");

        $query->bindParam(1, $kd_barang);

        $query->execute();
        return $query->rowCount();
    }

}
?>