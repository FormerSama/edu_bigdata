<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$pseudoIDIndex = array_search('PseudoID', $header);
$questionSNIndex = array_search('dp001_question_sn', $header);

$uniqueValues = [];

foreach ($csvData as $row) {
    if ($row[$pseudoIDIndex] == 39 && isset($row[$questionSNIndex])) {
        $uniqueValues[] = $row[$questionSNIndex];
    }
}

$uniqueCount = count(array_unique($uniqueValues));

echo $uniqueCount;

?>
