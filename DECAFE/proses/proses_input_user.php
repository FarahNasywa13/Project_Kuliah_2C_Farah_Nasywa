<?php
include "connect.php";
$name = (isset ($_POST['nama'])) ?  htmlentities($_POST['nama']) : "" ;
$username = (isset ($_POST['username'])) ?  htmlentities($_POST['username']) : "" ;
$level = (isset ($_POST['level'])) ?  htmlentities($_POST['level']) : "" ;
$nohp = (isset ($_POST['nohp'])) ?  htmlentities($_POST['nohp']) : "" ;
$alamat = (isset ($_POST['alamat'])) ?  htmlentities($_POST['alamat']) : "" ;
$password = md5('password');

if(!empty($_POST['input_user_validate'])){
<<<<<<< HEAD
    $select = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    if(mysqli_num_rows($select) > 0){
        $message = '<script>alert("Username yang dimasukkan telah ada");
        window.location="../user"</script>
        </script>';
    }else{ 
=======
>>>>>>> 52da1c7c436b5b12c17cdf71efe0037dcb912666
    $query = mysqli_query($conn, "INSERT INTO tb_user (nama,username,level,nohp,alamat,password) 
    VALUES('$name','$username','$level','$nohp','$alamat','$password')");
    if(!$query){
        $message = '<script>alert("Data gagal dimasukkan")</script>';
    }else{
        $message = '<script>alert("Data berhasil dimasukkan");
        window.location="../user"</script>
        </script>';
    }
<<<<<<< HEAD
}
}echo $message;
?>
=======
}echo $message;
?>
>>>>>>> 52da1c7c436b5b12c17cdf71efe0037dcb912666
