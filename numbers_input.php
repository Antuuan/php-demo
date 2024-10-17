<html>
<head>

</head>
<body>
    
    <form action="average_calculation.php" method="POST">
        
    <?php

    for ($i=0; $i<$_POST["count"]; $i++){
        echo("Number: <input type='number' name='$i'><br>");
    }
    ?>
    
    <!-- posts count to the next page -->
    <input type="hidden" name="count"<?php 
        echo("value=".$_POST["count"])
    ?>>
    
    <input type="submit">
    </form>


</body>
</html>