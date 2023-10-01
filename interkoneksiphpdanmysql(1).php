<html>
    <head>
        <title>koneksi Database Mysql</title>
    </head>
    <body>
        <h1>Demo koneksi Database Mysql</h1>
        <?php

        $conn=mysqli_connect("localhost","root","");
        if($conn)
        {
            echo "server terkoneksi";
        }else
        {
            echo "server tidak terkoneksi";
        }
        ?>
            </body>
</html>