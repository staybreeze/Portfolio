<?php

// function isImageValid($url) {
//     $imageInfo = @getimagesize($url);
//     return $imageInfo !== false;
// }

$location = isset($_GET['location']) ? $_GET['location'] : '';

$url = 'https://data.moa.gov.tw/Service/OpenData/TransService.aspx?UnitId=QcbUEzN6E6DL';
$data = file_get_contents($url);
$decodedData = json_decode($data, true);

$filteredData = [];

if ($decodedData !== null) {
    foreach ($decodedData as $item) {
        if ($item['animal_kind'] === '貓' && $item['animal_area_pkid'] == $location) {
            // if (isImageValid($item['album_file'])) {
                $filteredData[] = $item;
            // }
        }
    }
}

echo json_encode($filteredData);
?>
