<?php
$nilai = 2;

switch ($nilai) {
    case 3:
        $nilaiHuruf = 'A';
        break;
    case 2:
        $nilaiHuruf = 'B';
        break;
    case 1:
        $nilaiHuruf = 'C';
        break;

    default:
        $nilaiHuruf = 'Salah';
        break;
}

echo $nilaiHuruf;
