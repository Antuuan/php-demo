<html>
<body>

    <?php

        $total=$_POST["Analysis"]+$_POST["Design"]+$_POST["Implementation"]+$_POST["Evaluation"];

        switch ($total){
            case $total>=80:
                echo("score:".$total." grade:A*");
            break;

            case $total>=67:
                echo("score:".$total." grade:A");
            break;

            case $total>=54:
                echo("score:".$total." grade:B");
            break;

            case $total>=41:
                echo("score:".$total." grade:C");
            break;

            case $total>=31:
                echo("score:".$total." grade:D");
            break;

            case $total>=22:
                echo("score:".$total." grade:E");
            break;

            case $total>=13:
                echo("score:".$total." grade:F");
            break;

            case $total>=4:
                echo("score:".$total." grade:G");
            break;

            case $total>=0:
                echo("score:".$total." grade:U");
            break;
            
        }

    ?>

</body>
</html>