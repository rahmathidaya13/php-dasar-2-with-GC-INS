<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>

<body>
    <h1>Berlatih Function</h1>
    <?php
    echo "<h3>Soal No 1 Greeting</h3>";
    // Soal No 1
    // Greetings 
    // Buatlah sebuah function greetings() yang menerima satu parameter berupa string.
    // contoh: greetins("abduh");
    // output: "Hallo Abduh, Selamat Datang di Garuda Cyber Institute";

    // code function disini
    function greetings($value)
    {
        echo "Hallo $value Selamat Datang di Garuda Cyber Institute";
        echo "<br>";
    }
    // Hapus komentar untuk menjalankan code!
    greetings("Bagas");
    greetings("Wahyu");
    greetings("Rahmat Hidaya");
    echo "<br>";

    echo "<h3>Soal No 2 Reverse String</h3>";
    // Soal No 2
    // Reverse String
    // Buatlah sebuah function reverseString() untuk mengubah string berikut menjadi kebalikannya menggunakan function dan looping (for/while/do while).
    // Function reverseString menerima satu parameter berupa string;
    // NB: DILARANG menggunakan built-in function PHP seperti strrev(), HANYA menggunakan LOOPING!
    // reverseString('abdul');
    // output:ludba
    // code function disini

    function reverseString($value)
    {
        $reverse = '';
        $length = strlen($value);
        for ($i = $length - 1; $i >= 0; $i--) {
            $reverse .= $value[$i];
        }
        return $reverse . "<br>";
    }
    echo reverseString('Rahmat Hidaya');
    echo reverseString('Garuda Cyber Institute');
    echo reverseString('We Are GC-Ins Developer');

    echo "<br>";

    echo "<h3>Soal No 3 Palindrome</h3>";

    // Soal No 3
    // Palindrome 
    // Buatlah sebuah function yang menerima parameter berupa string yang mengecek apakah string tersebut sebuah palindrome atau bukan. 
    // Palindrome adalah sebuah kata atau kalimat yang jika dibalik akan memberikan kata yang sama contohnya: katak, civic. 
    // Jika string tersebut palindrome maka akan mengembalikan nilai true, sedangkan jika bukan palindrome akan mengembalikan false.
    // NB: 
    // Contoh: 
    // palindrome("katak") => output : "true" 
    // palindrome("jambu") => output : "false" 
    // NB: DILARANG menggunakan built-in function PHP seperti strrev() dll. 
    // Gunakan looping seperti biasa atau gunakan function reverseString dari jawaban no.2!

    // Code function di sini
    function palindrome($value)
    {
        $reversed = "";
        $length = strlen($value);
        for ($i = $length - 1; $i >= 0; $i--) {
            $reversed .= $value[$i];
        }
        if ($reversed == $value) {
            return "true";
        } else {
            return "false";
        }
    }
    // Hapus komentar di bawah ini untuk jalankan code
    echo palindrome("civic"); // true
    echo "<br>";
    echo palindrome("nababan"); // true
    echo "<br>";
    echo palindrome("jambaban"); // false
    echo "<br>";
    echo palindrome("racecar"); // true
    echo "<br>";

    echo "<h3>Soal No 4 Tentukan Nilai </h3>";
    /*Soal 4
    buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar sama
    dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang” */
    // Code function di sini
    function tentukan_nilai($nilai){
        if($nilai >= 85 && $nilai <=100){
            return "Sangat Baik";
        }else if($nilai >= 70 && $nilai < 85){
            return "Baik";
        }else if($nilai >= 60 && $nilai < 70){
            return "Cukup";
        }else{
            return "Kurang";
        }
    }
    // Hapus komentar di bawah ini untuk jalankan code
    echo tentukan_nilai(98); //Sangat Baik
    echo "<br>";
    echo tentukan_nilai(76); //Baik
    echo "<br>";
    echo tentukan_nilai(67); //Cukup
    echo "<br>";
    echo tentukan_nilai(43); //Kurang
    echo "<br>";



    ?>
</body>

</html>