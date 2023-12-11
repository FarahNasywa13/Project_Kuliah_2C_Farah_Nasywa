<?php
session_start();
include "connect.php";
$kode_order = (isset($_POST['kode_order'])) ? htmlentities($_POST['kode_order']) : " ";
$no_hp= (isset($_POST['no_hp'])) ? htmlentities($_POST['no_hp']) : " ";
$pelanggan = (isset($_POST['pelanggan'])) ? htmlentities($_POST['pelanggan']) : " ";
$catatan = (isset($_POST['catatan'])) ? htmlentities($_POST['catatan']) : " ";
$produk = (isset($_POST['produk'])) ? htmlentities($_POST['produk']) : " ";
$jumlah = (isset($_POST['jumlah'])) ? htmlentities($_POST['jumlah']) : " ";

if (!empty($_POST['input_orderitem_validate'])) {
    $select = mysqli_query($conn, "SELECT * FROM tb_list_order WHERE produk = '$produk' && kode_order ='$kode_order'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Item yang dimasukkan telah ada");
        window.location="../?x=orderitem&order='.$kode_order.'&no_hp='.$no_hp.'&pelanggan='.$pelanggan.'"</script>';
    }else {
$query = mysqli_query($conn, "INSERT INTO tb_list_order (produk,kode_order,jumlah,catatan) values 
('$produk', '$kode_order', '$jumlah', '$catatan')");
    if ($query) {
            $message = '<script>alert("Data Berhasil Dimasukkan");
            window.location="../?x=orderitem&order='.$kode_order.'&no_hp='.$no_hp.'&pelanggan='.$pelanggan.'"</script>';
        } else {
            $message = '<script>alert("Data Gagal Dimasukkan");
            window.location="../?x=orderitem&order='.$kode_order.'&no_hp='.$no_hp.'&pelanggan='.$pelanggan.'"</script>';
        }
    }
}echo $message;
?>