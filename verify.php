<?php
//print_r($_POST);
$ch = curl_init();


curl_setopt($ch, CURLOPT_URL, 'http://marcomtrade.com/sr_new/controllers/products?_method=validate&brand_id='.$_POST["brand"].'&type_id='.$_POST["type"].'&model_id='.$_POST["model"].'&serial='.$_POST["serial"]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Host: marcomtrade.com';
$headers[] = '_token: AUTH_TOKEN';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
$result=json_decode($result, true);
//print_r($result);
echo $result['errors'][0];
?>