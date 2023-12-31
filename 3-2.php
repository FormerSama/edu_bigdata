<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$pseudoIDIndex = array_search('PseudoID', $header);
$startTimeIndex = array_search('dp001_review_start_time', $header);
$endTimeIndex = array_search('dp001_review_end_time', $header);

$filteredValues = [];

foreach ($csvData as $row) {
    if ($row[$pseudoIDIndex] == 71 && isset($row[$startTimeIndex]) && isset($row[$endTimeIndex])) {
        $filteredValues[] = [$row[$startTimeIndex], $row[$endTimeIndex]];
    }
}

$filteredValues = array_map("unserialize", array_unique(array_map("serialize", $filteredValues)));

foreach ($filteredValues as $row) {
    echo implode(', ', $row) . PHP_EOL;
}

?>
