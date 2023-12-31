<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$verbDisplayIndex = array_search('dp002_verb_display_zh_TW', $header);

$filteredValues = [];

foreach ($csvData as $row) {
    if (isset($row[$verbDisplayIndex]) && $row[$verbDisplayIndex] !== '') {
        $filteredValues[] = $row[$verbDisplayIndex];
    }
}

$filteredCount = array_count_values($filteredValues);
arsort($filteredCount);
$top3Values = array_slice($filteredCount, 0, 3, true);

foreach ($top3Values as $value => $count) {
    echo $value . ': ' . $count . PHP_EOL;
}

?>
