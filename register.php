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




            <select name="cars">
                <?php
                foreach ($brands['data'] as $key => $val){
                echo '<option value="'
                .$brands['data'][$key]['brand_id']
                .'"'
                ."onClick=getSummary('"
                .$brands['data'][$key]['brand_id']
                ."','summary','models.php')"
                .'>'
                .$brands['data'][$key]['brand_name']
                ."</option>";
                }
                ?>
            </select>
        <a onclick="getSummary('models.php','summary','1')">View Text</a>
        <div id="summary">Please Select product Brand</div>
    </body>
</html>