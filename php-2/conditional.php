<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function PHP</h1>
    <?php

    echo "<h3> Soal No 1 Greetings </h3>";

    function greetings($name) {
        echo "Halo " . ucfirst($name) . ", Selamat Datang di Sanbercode!<br>";
    }

    greetings("Bagas");
    greetings("Wahyu");
    greetings("wiwin");

    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";

    function reverseString($string) {
        $result = "";
        for ($i = strlen($string) - 1; $i >= 0; $i--) {
            $result .= $string[$i];
        }
        echo $result . "<br>";
    }

    reverseString("Wiwin Ratna Sari");
    reverseString("Sanbercode");
    reverseString("We Are Sanbers Developers");

    echo "<br>";

    echo "<h3>Soal No 3 Palindrome </h3>";

    function palindrome($string) {
        $original = strtolower($string);
        $reversed = "";
        for ($i = strlen($original) - 1; $i >= 0; $i--) {
            $reversed .= $original[$i];
        }

        if ($original == $reversed) {
            echo "true<br>";
        } else {
            echo "false<br>";
        }
    }

    palindrome("civic");     // true
    palindrome("nababan");   // true
    palindrome("jambaban");  // false
    palindrome("racecar");   // true

    echo "<br>";

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";

    function tentukan_nilai($nilai) {
        if ($nilai >= 85 && $nilai <= 100) {
            return "Sangat Baik<br>";
        } elseif ($nilai >= 70 && $nilai < 85) {
            return "Baik<br>";
        } elseif ($nilai >= 60 && $nilai < 70) {
            return "Cukup<br>";
        } else {
            return "Kurang<br>";
        }
    }

    echo tentukan_nilai(98); // Sangat Baik
    echo tentukan_nilai(76); // Baik
    echo tentukan_nilai(67); // Cukup
    echo tentukan_nilai(43); // Kurang

    ?>
</body>

</html>
