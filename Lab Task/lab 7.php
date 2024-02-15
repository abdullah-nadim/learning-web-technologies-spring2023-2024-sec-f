<?php
    echo "<table cellpadding='0' cellspacing='0' border='1' align='center' width='50%' height='100px'>";
    echo "<tr >";
    echo "<td>";
    for($i=1;$i<=3;$i+=1)
    {   
        for($j=1;$j<=$i;$j+=1)
        {
            echo "* ";
        }
        echo "<br>";
    }
    echo "</td>";
    echo "<td>";
    for($i=1;$i<=3;$i+=1)
    {   
        for($j=1;$j<=(3-$i+1);$j+=1)
        {
            echo $j." ";
        }
        echo "<br>";
    }
    echo "</td>";
    echo "<td>";
    $c = 'A';
    for($i=1;$i<=3;$i+=1)
    {   
        for($j=1;$j<=$i;$j+=1)
        {
            echo $c++." ";
        }
        echo "<br>";
    }
    echo "</tr>";
    echo "</table>";

?>

