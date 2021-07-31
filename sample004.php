<?php

//$arrayBuah = array("nis","name","pob", dob, gender, created_at);
$arrayPelajar = [
    [
        "nis" => 123,
        "name" => "Zaki",
        "pob" => "Jakarta",
        "dob" => "2004/05/20",
        "usia" => 18,
        "gender" => true,
        "created_at" => "2021/07/18 21:06"
    ],
    [
        "nis" => 124,
        "name" => "Raihan",
        "pob" => "Bekasi",
        "dob" => "2004/05/21",
        "usia" => 17,
        "gender" => true,
        "created_at" => "2021/07/18 21:08"
    ],
    [
        "nis" => 125,
        "name" => "Amin",
        "pob" => "Bekasi",
        "dob" => "2004/05/21",
        "usia" => 37,
        "gender" => true,
        "created_at" => "2021/07/18 21:08"
    ],
];
echo '<pre>';

$batasUsia = 40;

$status = 'non eligible';

$tmpArray = [];
foreach ($arrayPelajar as $k => $pelajars) {
    foreach ($pelajars as $key => $value) {
        if ($key == 'usia') {
            if ($value <= $batasUsia) {
                $pelajars['status'] = 'eligible';
            } else {
                $pelajars['status'] = $status;
            }
        }
    }
    $tmpArray[$k] = $pelajars;
}
print_r((object)$tmpArray);
// echo '</pre>';
