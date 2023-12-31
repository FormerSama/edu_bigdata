<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$pseudoIDIndex = array_search('PseudoID', $header);
$videoItemSNIndex = array_search('dp001_video_item_sn', $header);
$indicatorIndex = array_search('dp001_indicator', $header);

$uniqueValues = [];

foreach ($csvData as $row) {
    if ($row[$pseudoIDIndex] == 281) {
        $uniqueValues[] = [$row[$videoItemSNIndex], $row[$indicatorIndex]];
    }
}

$uniqueValues = array_map("unserialize", array_unique(array_map("serialize", $uniqueValues)));

foreach ($uniqueValues as $row) {
    echo implode(', ', $row) . PHP_EOL;
}

?>
