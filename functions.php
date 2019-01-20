<?php
function brands(){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, 'http://marcomtrade.com/sr_new/controllers/products?_method=brands');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


    $headers = array();
    $headers[] = 'Host: marcomtrade.com';
    $headers[] = '_token: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJhcGkiOiJjb250cm9sbGVycy9kYXRhIiwibmFtZSI6IlByb2R1Y3QgUmVnaXN0cmF0aW9uIiwiaWF0IjoxNTE2MjM5MDIyfQ.2w8y2yAisHwc90PB3KnXbbT-3HCrcs3XBaLG674R870';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result = curl_exec($ch);
    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch);
    }
    curl_close ($ch);
    $brands = json_decode($result, true);
    return $brands;
}
?>
