<html>

<body>

    <?php
    // Menggunakan for loop dan break statement untuk menghentikan loop ketika $i == 2
    for ($i = 0; $i < 5; $i++) {
        if ($i == 2) {
            break;
        }

        echo "Nilai : $i <br>";
    }

    echo "Loop Selesai";
    ?>

</body>

</html>
