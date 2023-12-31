<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$alignmentIndex = array_search('dp002_extensions_alignment', $header);

$filteredValues = [];

foreach ($csvData as $row) {
    if ($row[$alignmentIndex] == '["十二年國民基本教育類"]') {
        $filteredValues[] = $row;
    }
}

$filteredCount = count($filteredValues);

echo $filteredCount;

?>
