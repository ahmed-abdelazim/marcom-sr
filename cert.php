<?php include ('functions.php');
$types = array("ais","ecdis","epirb","gmdssb","gmdssr","gyro","osr","sart","sbm","ssas");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Blank HTML5</title>
         <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 
<style>
</style>


    </head>
    <body>
    <div class="form-group">
        <form action="cert-verify.php" method="POST">

            <select  id="list" name="type"  class="form-control">
                <option value="0" selected="selected">Please Select product type</option>
                <?php
                foreach ($types as $val){?>
                    <option value="<?php echo $val;?>"><?php echo $val;?></option>
    
                    <?php } ?>
            </select>

            <label for="myserial" class="mt-2">Enter Certificate number </label>
                <input type="text" name="serial"  id="myserial" class="form-control">
                <input type="submit" value="Submit"  class="btn btn-secondary mt-3">
            </div>
        </form>
    </body>

</html>