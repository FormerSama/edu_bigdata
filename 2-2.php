<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$pseudoIDIndex = array_search('PseudoID', $header);
$questionSNIndex = array_search('dp001_question_sn', $header);
$pracScoreRateIndex = array_search('dp001_prac_score_rate', $header);

$filteredValues = [];

foreach ($csvData as $row) {
    if ($row[$pseudoIDIndex] == 281 && $row[$pracScoreRateIndex] == 100) {
        $filteredValues[] = [$row[$questionSNIndex], $row[$pracScoreRateIndex]];
    }
}

$filteredCount = count($filteredValues);

echo $filteredCount;

?>
