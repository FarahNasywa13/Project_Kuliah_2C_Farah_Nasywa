<html>

<body>

    <?php

    echo "Mencari jumlah huruf vokal dalam suatu kata";
    echo "<br>"; // ganti baris

    $jumlah = 0;
    $kata = "Belajar PHP"; // suatu kata
    $huruf = "aeiuo"; // huruf vokal yang dicari bisa huruf a, e, i, u, o

    for ($i = 0; $i < strlen($kata); $i++) {
        if (strpos($huruf, strtolower(substr($kata, $i, 1))) !== false) {
            $jumlah++;
        }
    }

    echo "Jumlah huruf vokal dalam kata: ";
    echo $jumlah;
    echo "<br>";
    echo $kata;

    ?>

</body>

</html>
