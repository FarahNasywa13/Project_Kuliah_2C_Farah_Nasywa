<?php
include "connect.php";
$katproduk = (isset($_POST['katproduk'])) ? htmlentities($_POST['katproduk']) : "";


if (!empty($_POST['input_katmenu_validate'])) {
    $select = mysqli_query($conn, "SELECT kategori_produk FROM tb_kategori_produk WHERE kategori_produk = '$katproduk'");
    if (mysqli_num_rows($select) > 0) {
        $message = '<script>alert("Kategori yang dimasukkan telah ada")
                    window.location="../katproduk"</script>';
    } else {
        $query = mysqli_query($conn, "INSERT INTO tb_kategori_produk (kategori_produk) values('$katproduk')");
        if ($query) {
            $message = '<script>alert("Data berhasil dimasukkan")
                        window.location="../katproduk"</script>
        </script>';
        } else {
            $message = '<script>alert("Data gagal dimasukkan")
                        window.location="../katproduk"</script>';
        }
    }
}
echo $message;
?>