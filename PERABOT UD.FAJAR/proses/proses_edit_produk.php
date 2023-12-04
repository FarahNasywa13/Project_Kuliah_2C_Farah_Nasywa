<?php
include "connect.php";
$id = (isset($_POST['id'])) ? htmlentities($_POST['id']) : "";
$nama_produk = (isset($_POST['nama_produk'])) ? htmlentities($_POST['nama_produk']) : "";
$keterangan = (isset($_POST['keterangan'])) ? htmlentities($_POST['keterangan']) : "";
$kat_produk = (isset($_POST['kat_produk'])) ? htmlentities($_POST['kat_produk']) : "";
$harga = (isset($_POST['harga'])) ? htmlentities($_POST['harga']) : "";

$stok = (isset($_POST['stok'])) ? htmlentities($_POST['stok']) : "";
$kode_rand = rand(10000, 99999) . "-";
$target_dir = "../assets/img/" . $kode_rand;
$target_file = $target_dir . basename($_FILES["foto"]["name"]);
$imageType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));


if (!empty($_POST['input_produk_validate'])) {
    //cek apakah gambar atau bukan?
    $cek = getimagesize($_FILES['foto']['tmp_name']);
    if ($cek === false) {
        $message = "ini bukan file gambar";
        $statusUpload = 0;
    } else {
        $statusUpload = 1;
        if (file_exists($target_file)) {
            $message = "Maaf File yang Dimasukkan Telah Ada";
            $statusUpload = 0;
        } else {
            if ($_FILES['foto']['size'] > 500000) { //500kb
                $message = 'file foto yang diupload terlalu besar';
                $statusUpload = 0;
            } else {
                if ($imageType != "jpg" && $imageType != "png" && $imageType != "jpeg" && $imageType != "gif") {
                    $message = "maaf, hanya diperbolehkan gambar dengan format JPG, JPEG, PNG dan GIF";
                    $statusUpload = 0;
                }
            }
        }
    }

    if ($statusUpload == 0) {
        $message = '<script>alert("' . $message . ',Gambar tidak dapat diupload")
    window.location="../katalog"</script>
    </script>';
    } else {
        $select = mysqli_query($conn, "SELECT * FROM tb_daftar_produk WHERE nama_produk = '$nama_produk'");
        if (mysqli_num_rows($select) > 0) {
            $message = '<script>alert("Nama produk yang dimasukan telah ada")
        window.location="../katalog"</script>';
        } else {
            if (move_uploaded_file($_FILES['foto']['tmp_name'], $target_file)) {
                $query = mysqli_query($conn, "UPDATE tb_daftar_produk SET foto='" . $kode_rand . $_FILES["foto"]["name"] . "', nama_produk='$nama_produk', keterangan='$keterangan', kategori='$kat_produk', harga='$harga', stok='$stok' WHERE id='$id'");
                if ($query) {
                    $message = '<script>alert("Data berhasil diedit")
            window.location="../katalog"</script>';
                } else {
                    $message = '<script>alert("Data gagal diedit")
            window.location="../katalog"</script>';
                }
            } else {
                $message = '<script>alert("maaf, terjadi kesalahan file tidak dapat diupload")
        window.location="../katalog"</script>';
            }
        }
    }
}
echo $message;
?>