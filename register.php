<?php include ('functions.php');
$brands = brands();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blank HTML5</title>
<style>
</style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    </head>
    <body>

        <form action="verify.php" method="POST">

            <select  id="list" name="brand">
                <option value="0">Please Select product Brand</option>
                <?php
                foreach ($brands['data'] as $key => $val){
                echo '<option value="'
                .$brands['data'][$key]['brand_id']
                .'"'
                .'>'
                .$brands['data'][$key]['brand_name']
                ."</option>
                ";
                }
                ?>
            </select>

            <div id="summary"></div>
            <div id="type"></div>
            <div id="model"></div>
            <div id="showSn" style = "display: none;">
            <div> Enter serial number </div>
                <input type="text" name="serial">
                <input type="submit" value="Submit">
            </div>
        </form>
    </body>

    <script src="script.js"></script>
</html>