<?php

$a = true;
$b = false;
$c = false;

if ($a and $b || $c) {
    die('masuk');
}

//echo "ngga masuk\n";

//echo PHP_VERSION."\n";

$session = [
    'user' => 'Jokowi Widodo',
    'addressAll' => [
        'address' => 'Jl. Kampung Salak avenue',
        'city' => 'Bekasi',
        'province' => 'West Java',
        'country' => 'Indonesia'
    ],
];
echo "<pre>";
$session = json_encode($session);
$session = json_decode($session);
var_dump($session);
// print_r($alamatLengkap->address);

if ($session !== null) {
    echo "Nama: " . $session->user . "\n";
    if ($session->user !== null) {
        $alamatLengkap = $session->addressAll;
        if ($alamatLengkap->address !== null) {
            echo "Alamat: " . $alamatLengkap->address . "\n";
            echo "Kota: " . $alamatLengkap->city . "\n";
            echo "Provinsi: " . $alamatLengkap->province . "\n";
            echo "Negara: " . $alamatLengkap->country . "\n";
        }
    }
}
