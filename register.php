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
<script>

    function getSummary(id,divId,myUrl)
    {
       $.ajax({

         type: "GET",
         url: myUrl,
         data: "id=" + id, // appears as $_GET['id'] @ backend side
         success: function(data) {
               // data is ur summary
              $('#'+divId).html(data);
         }
    
       });
    
    }
    </script>
    </head>
    <body>



        <div >Please Select product Brand</div>
            <select name="brands">
                <?php
                foreach ($brands['data'] as $key => $val){
                echo '<option value="'
                .$brands['data'][$key]['brand_id']
                .'"'
                ."onClick=getSummary('"
                .$brands['data'][$key]['brand_id']
                ."','summary','type.php')"
                .'>'
                .$brands['data'][$key]['brand_name']
                ."</option>";
                }
                ?>
            </select>

        <div id="summary"></div>
        <div id="type"></div>
        <div id="model"></div>
    </body>
</html>