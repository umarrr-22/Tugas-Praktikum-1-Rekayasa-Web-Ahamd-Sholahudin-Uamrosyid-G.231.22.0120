<?php
// Membuat variabel JSON
$jsonData = '{"Nama":"Ahmad Sholahudin Umarosyid","Nim":"G.231.22.0120","TanggalLahir":"22 Desember 2004","Hobi":["Olahraga","Bermain Game","Menggambar"]}
';

// Decode JSON ke Objek
$jsonObject = json_decode($jsonData);

// Mengakses Objek JSON
echo "Mengakses nilai dari PHP Objek:" . "<br>";
echo "Nama: " . $jsonObject->Nama . "<br>";
echo "NIM: " . $jsonObject->Nim . "<br>";
echo "Tanggal Lahir: " . $jsonObject->TanggalLahir . "<br><br>";

// Mengakses Array Hobi
echo "Mengakses Nilai dari PHP Array:" . "<br>";
echo "Hobi:" . "<br>";
echo "<br>";
foreach ($jsonObject->Hobi as $key => $hobi) {
    echo "<li>" . $hobi . "</li>";
}
echo "</br>";