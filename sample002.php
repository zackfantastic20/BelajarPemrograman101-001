<?php

$partData = ["g","h"];
$data = ["a","b","c","d","e","f",...$partData,"i","j",12];
$data = 'A';
$data = 45.5;

class SampleObject{
	function getNama($nama){
		return "ini adalah nama: $nama";
	}
}


$instanData = new SampleObject();
$data = $instanData->getNama("Zaki");

$data = true;

$data = "50 tahun";
var_dump($data);
