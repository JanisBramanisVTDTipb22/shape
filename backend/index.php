<?php
header("Access-Control-Allow-Origin: *");
$data = ["message" =>"hello from backend"];

echo json_encode($data);