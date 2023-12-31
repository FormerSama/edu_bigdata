<?php

$filename = 'pandas/edu_bigdata_imp1.csv';
$delimiter = ',';
$enclosure = '"';
$escape = '\\';

$file = fopen($filename, 'r');

$data = [];
$header = fgetcsv($file, 0, $delimiter, $enclosure, $escape);

$pseudoIDIndex = array_search('PseudoID', $header);
$reviewSNIndex = array_search('dp001_review_sn', $header);

$uniqueValues = [];

while (($row = fgetcsv($file, 0, $delimiter, $enclosure, $escape)) !== false) {
    if ($row[$pseudoIDIndex] == 39) {
        $uniqueValues[] = $row[$reviewSNIndex];
    }
}

fclose($file);

$uniqueCount = count(array_unique($uniqueValues));

echo $uniqueCount;

?>
