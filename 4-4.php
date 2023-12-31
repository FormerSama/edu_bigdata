<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$alignmentIndex = array_search('dp002_extensions_alignment', $header);

$filteredValues = [];

foreach ($csvData as $row) {
    if ($row[$alignmentIndex] == '["校園職業安全"]') {
        $filteredValues[] = $row;
    }
}

$filteredCount = count($filteredValues);

echo $filteredCount;

?>
