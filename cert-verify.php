<?php include ('functions.php');
//print_r ($_POST);
$response = mycert ($_POST["type"],$_POST['serial']);
//print_r($response);
if ($response["errors"][0]){
    echo "ERROR : ".$response["errors"][0];
}
else {
    echo $response["msg"];
}


?>
<br>
<a href="cert.php">Back</a>