<?php

// Caminho para salvar a imagem
$imageSavePath = 'imagesNumeros/';

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

// Loop no array de 10 cores, de 1 a 99
for ($n = 1; $n <= 99; $n++) {

    // Loop no array de cores
    $color = $arrayColors[($n - 1) % count($arrayColors)];

    // Monta a Url
    $imageUrl = $baseUrl . $n . '|' . $color . '|000000';

    // Download da imagem
    $imageData = file_get_contents($imageUrl);

    // Salva a imagem
    $imageName = 'pin_' . $n . '.png';
    file_put_contents($imageSavePath . $imageName, $imageData);

    // Console output
    echo "Imagem $n baixada e salva como $imageName\n";
}

?>