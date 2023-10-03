<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proses.php" method="post">
        <label for="">Nilai1</label>
        <input type="text" name="nilai1">
        <br>
        <label for="">Nilai2</label>
        <input type="text" name="nilai2">
        <br>
        <input type="submit" name="submit" value="Proses">
    </form>
</body>
</html>

<!-- <?php
echo $_GET['nilai1']. "<br>";
echo $_GET['nilai2'];
?> -->

<?php
echo $_REQUEST['nilai1']. "<br>". $_GET['nilai2'];
?>



