<?php
$a=10;
define("a",100);
?>
<h1>
    <?php
    if(isset($a))
        {
            echo "bien a da ton tai va co gia tri la:".$a;
        }
    echo "<br>";
    if(isset($b))
        {
            echo "bien a da ton tai ";
        }
    else echo "bien b chưa ton tai";
    if(define("a"))
        echo "da dinh nghia hang so a,a co gia tri la:".a;
    else echo "chua dinh nghia a";
    echo "<br>";
    
    ?>

</h1>