<?php

// JSON dosyasının yolunu belirtelim
$jsonFile = 'data.json';

// JSON dosyasını okuyalım
$jsonData = file_get_contents($jsonFile);

// JSON verisini PHP dizisine dönüştürelim
$data = json_decode($jsonData, true);

// JSON verisini işleyelim
if ($data !== null) {
    // Çalışanları döngü ile yazdıralım
    echo "<h2>Employees:</h2>";
    foreach ($data['employees'] as $employee) {
        echo "Name: " . $employee['firstName'] . " " . $employee['lastName'] . "<br>";
        echo "Email: " . $employee['email'] . "<br><br>";
    }
} else {
    echo "JSON verisi okunamadı veya geçerli değil.";
}

?>
