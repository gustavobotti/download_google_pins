<?php

// Caminho para salvar a imagem
$imageSavePath = 'imagesLetras/';

// Url base da imagem
$baseUrl = 'https://chart.apis.google.com/chart?chst=d_map_pin_letter&chld=';

// Array de cores usadas nos pins
$arrayColors = [
    'FF9800',
    '8292ff',
    '0AC500',
    'F44336',
    '03A9F4',
    'df67f5',
    'FF5722',
    '0a9b10',
    'FFDF00',
    'FF0BAA',
];

// Inicializando o alfabeto em A
$i = 'A';

// Loop no array de 10 cores, de A-Z (alfabeto de 26 caracteres)
for ($n = 1; $n <= 26; $n++ && $i++) {

    // Itera o array de cores
    $color = $arrayColors[($n - 1) % count($arrayColors)];

    // Monta a Url
    $imageUrl = $baseUrl . $i . '|' . $color . '|000000';

    // Download da imagem
    $imageData = file_get_contents($imageUrl);

    // Salva a imagem
    $imageName = 'pin_' . $i . '.png';
    file_put_contents($imageSavePath . $imageName, $imageData);

    // Console output
    echo "Imagem '$i' baixada e salva como $imageName\n";
}

?>