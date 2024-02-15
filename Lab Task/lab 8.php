<?php
echo "<table cellpadding='0' cellspacing='0' border='1' align='center' width='50%' height='100px'>";
echo "<tr>
                <td align='center' rowspan='1' colspan='2'>
                    The array to declare
                </td>
                <td align='center' rowspan='1' colspan='2'>
                    Shapes to print
                </td>     
     </tr>";
echo "<tr>";

echo "<td rowspan='1' colspan='2'>";
echo "<table cellpadding='0' cellspacing='0' border='1' align='center' width='80%' height='20px' style='background-color: #f2f2f2;'>";

    $arr = [
            [1,2,3,'A'],
            [1,2,'B','C'],
            [1,'D','E','F'],
        ];
    foreach( $arr as $i)
    {
        echo "<tr align='center'>";
        foreach($i as $j)
        {
            echo "<td>";
            echo $j;
            echo "</td>";
        }
        echo "</tr>";

    }
echo"</table>";
echo "</td>";

echo "<td>";           
echo "<table cellpadding='0' cellspacing='0' border='1' align='center' width='80%' height='20px' style='background-color: #f2f2f2;'>";
echo "<tr>";
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
echo "</tr>";
echo"</table>";
echo "</tr>";
echo "</table>"
?>

