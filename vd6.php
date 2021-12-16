<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .c1{background-color:red;}
        .c1{background-color:yellow;}
        #id1 div .c3{width: 180 px;height:180px;}
    </style>
</head>
<body>
    <?php
    $n=6;
    ?>

    <table border=1>
        <?php
        for($i=1;$i<=10;$i++)
        {
            echo"<tr><td>$n</td><td>$i</td>";
            echo "<td>".($n*$i) ."</td></tr>";
        }
        ?>
    </table>
    <hr>
    <table border=1>
        <?php
        for($i=1;$i<=10;$i++)
        {
            //$c=$i%2==0?'c2':'c1';
            if($i%2) $c='c1';
            else $c='c2';
            ?>
                <tr class="<?php echo $c ?>">
                    <td><?php echo $n ?> </td>;
                    <td><?php echo $i ?> </td>;
                    <td><?php echo $n*$i ?> </td>;
                </tr>
            <?php
        }
        ?>
    </table>
    <hr>
    <div id="id1">
        <?php
            $i=1;
            while($i<=10)
            {
                //include './subpage/a.php';//sai chạy 1 lan
                //require './subpage/a.php';//sai van chạy het
                include_once './subpage/a.php';//nap 1 lan
                $i++;
            }
        ?>

    </div>


</body>
</html>