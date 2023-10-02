<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        $val1 = 0;
        $val2 = 0;

        echo "operasi $val1 and $val2 adalah = ";
        echo $val1 && $val2;
        echo "<br>";
        echo "operasi $val1 or $val2 adalah = ";
        echo $val1 || $val2;
        echo "<br>";
        echo "operasi $val1 xor $val2 adalah = ";
        echo $val1 xor $val2;
        echo "<br>";

        $val1 = 0;
        $val2 = 1;
        echo "operasi $val1 and $val2 adalah =";
        echo $val1 && $val2;
        echo "<br>";
        echo "operasi $val1 or $val2 adalah =";
        echo $val1 || $val2;
        echo "<br>";
        echo "operasi $val1 xor $val2 adalah =";
        echo $val1 xor $val2;
        echo "<br>";

        $val1 = 1;
        $val2 = 0;
        echo "operasi $val1 and $val2 adalah =";
        echo $val1 && $val2;
        echo "<br>";
        echo "operasi $val1 or $val2 adalah =";
        echo $val1 || $val2;
        echo "<br>";
        echo "operasi $val1 xor $val2 adalah =";
        echo $val1 xor $val2;
        echo "<br>";

        $val1 = 1;
        $val2 = 1;
        echo "operasi $val1 and $val2 adalah =";
        echo $val1 && $val2;
        echo "<br>";
        echo "operasi $val1 or $val2 adalah =";
        echo $val1 || $val2;
        echo "<br>";
        echo "operasi $val1 xor $val2 adalah =";
        echo $val1 xor $val2;
        echo "<br>";
    ?>
</body>
</html>