<?php 
$data = ["name" => "Tom", "age" => 30]; 
$json = json_encode($data); echo $json; 
$decoded = json_decode($json, true); echo $decoded["name"]; 
?> 