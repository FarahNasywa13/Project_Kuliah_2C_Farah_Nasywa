<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$katproduk = (isset($_POST['katproduk'])) ? htmlentities($_POST['katproduk']) : "";

if(!empty($_POST['input_katproduk_validate'])){
    $select = mysqli_query($conn, "SELECT kategori_produk FROM tb_kategori_produk WHERE kategori_produk = '$katproduk'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Kategori Produk yang dimasukkan telah ada")
        window.location="../katproduk"</script>';
    } else {
    $query = mysqli_query($conn, "UPDATE tb_kategori_produk SET jenis_produk='$jenisproduk', kategori_produk='$katproduk' WHERE id_kat_produk='$id'");
    if($query){
        $message = '<script>alert("Data berhasil diupdate")
                    window.location="../katproduk"</script>';
    }else{
        $message = '<script>alert("Data gagal diupdate")
                    window.location="../katproduk"</script>';
    }
}
}echo $message;
?>