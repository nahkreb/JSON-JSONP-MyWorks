<?php

// Veri oluşturalım (örnek)
$data = array(
    array(
        "name" => "John Doe",
        "email" => "john.doe@example.com"
    ),
    array(
        "name" => "Jane Smith",
        "email" => "jane.smith@example.com"
    ),
    array(
        "name" => "Michael Johnson",
        "email" => "michael.johnson@example.com"
    ),
    array(
        "name" => "Emily Brown",
        "email" => "emily.brown@example.com"
    ),
    array(
        "name" => "David Wilson",
        "email" => "david.wilson@example.com"
    )
);

// JSONP fonksiyon adını alalım (callback parametresi)
$callback = isset($_GET['callback']) ? $_GET['callback'] : 'callback';

// Content-Type'ı JSONP olarak ayarlayalım
header('Content-Type: application/javascript');

// JSONP formatında çıktı oluşturalım
echo $callback . '(' . json_encode($data) . ');';

?>
