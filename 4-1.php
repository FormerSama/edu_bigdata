<?php

$filename = 'pandas/edu_bigdata_imp1.csv';

$csvData = array_map('str_getcsv', file($filename));
$header = array_shift($csvData);

$reviewSNIndex = array_search('dp001_review_sn', $header);

$reviewSNValues = [];

foreach ($csvData as $row) {
    if (isset($row[$reviewSNIndex])) {
        $reviewSNValues[] = $row[$reviewSNIndex];
    }
}

$reviewSNCount = array_count_values($reviewSNValues);
arsort($reviewSNCount);
$mostFrequentReviewSN = array_slice($reviewSNCount, 0, 1);

foreach ($mostFrequentReviewSN as $reviewSN => $count) {
    echo $reviewSN . ': ' . $count;
}

?>
