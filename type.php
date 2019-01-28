<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'http://marcomtrade.com/sr_new/controllers/products?_method=types&id='.$_GET['id']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');


$headers = array();
$headers[] = 'Host: marcomtrade.com';
$headers[] = '_token: AUTH_TOKEN';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);

//print_r($result);
$result=json_decode($result, true);
?>

            <select id="list1" name="type">
                <option value="0">Please Select product Type</option>
                <?php
                foreach ($result['data'] as $key => $val){
                echo '<option value="'
                .$result['data'][$key]['type_id']
                .'"'
                .'>'
                .$result['data'][$key]['type_name']
                ."</option>";
                }
                ?>
            </select>

    <script src="script.js"></script>
            
