<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$pseudoIDIndex = array_search('PseudoID', $header);
$actionIndex = array_search('dp001_record_plus_view_action', $header);

$filteredValues = [];

foreach ($csvData as $row) {
    if ($row[$pseudoIDIndex] == 71 && $row[$actionIndex] == 'paused') {
        $filteredValues[] = $row;
    }
}

$filteredCount = count($filteredValues);

echo $filteredCount;

?>
