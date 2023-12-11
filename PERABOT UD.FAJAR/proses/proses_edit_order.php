<?php
session_start();
include "connect.php";
$kode_order = (isset($_POST['kode_order'])) ? htmlentities($_POST['kode_order']) : "";
$no_hp = (isset($_POST['no_hp'])) ? htmlentities($_POST['no_hp']) : "";
$pelanggan = (isset($_POST['pelanggan'])) ? htmlentities($_POST['pelanggan']) : "";

if (!empty($_POST['edit_order_validate'])) {
    
        $query = mysqli_query($conn, "UPDATE tb_order SET no_hp='$no_hp',pelanggan='$pelanggan' WHERE id_order = $kode_order");
        
        if ($query) {
            $message = '<script>alert("Data berhasil dimasukkan");
                        window.location="../order"</script>';
        } else {
            $message = '<script>alert("Data gagal dimasukkan")
                        window.location="../order"</script>';
        }
    }
echo $message;
?>