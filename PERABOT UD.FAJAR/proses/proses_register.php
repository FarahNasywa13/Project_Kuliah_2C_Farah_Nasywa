<?php
if (isset($_POST['submit_register']) && $_POST['submit_register'] === 'register') {
    // Collect user input data
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = (isset($_POST['password'])) ? md5(htmlentities($_POST['password'])) : "" ;
    
    try {
        $pdo = new PDO("mysql:host=localhost;dbname=u837952942_perabotudfajar", "u837952942_perabotudfajar", "EyTIe;;5^n");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT * FROM tb_user WHERE nama = :nama");
        $stmt->bindParam(':nama', $nama);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $message = '<script>alert("Data berhasil dimasukkan")
            window.location="../login"</script>';
        }
        $stmt = $pdo->prepare("INSERT INTO tb_user (nama, username, password) VALUES (:nama, :username, :password)");
        $stmt->bindParam(':nama', $nama);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();
        $message = '<script>alert("Register berhasil")
        window.location="../login"</script>';
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
echo $message;
?>