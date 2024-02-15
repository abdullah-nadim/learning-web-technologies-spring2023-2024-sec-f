<?php
echo "<table cellpadding='0' cellspacing='0' border='1' align='center' width='50%' height='00px'>";
echo "<tr>";
    $arr = [
            [1,2,3,'A'],
            [1,2,'B','C'],
            [1,'D','E','F'],
        ];

echo "<td>";           
for($i=0;$i<3;$i+=1)
    {   
        for($j=0;$j<(3-$i);$j+=1)
        {
            echo $arr[$i][$j]." ";
        }
        echo "<br>";
    }
echo "</td>";
echo "<td>";
for($i=0;$i<3;$i+=1)
    {   
        for($j=3-$i;$j<=3;$j+=1)
        {
            echo $arr[$i][$j]." ";
        }
        echo "<br>";
    }
echo "</td>";
?>

