<html>
    <body>
        <?php
            $presupuesto=$_POST['presupuesto'];
            $areaginecologia=$presupuesto*0.4;
            $areatraumatologia=$presupuesto*0.3;
            $areapadiatria=$presupuesto*0.3;
    ///////////////////////////////////////////inicio de taba/////////////////////////////////
    echo "<h1 style=color:crimson>". "El presupuesto queda repartido asi:"."</h1>";
    echo "<table cellspacing=0>";
    echo "<tr>";
    echo "  <td style=color:crimson> <strong> Area  </strong> </td>";
    echo "  <td style=color:crimson> <strong>  Presupuesto Asignado  </strong></td>";
    echo "</tr>";
    ///////////////////////////////////////////area ginecologia///////////////////////////////
    echo "<tr>";
    echo "<td width=150> " . "Ginecologia" . "</td>";
    echo "<td width=150> " . $areaginecologia . "</td>";
    echo "</tr>";
    ////////////////////////////////////////////area traumatologia////////////////////////////
    echo "<tr>";
    echo "<td width=150> " . "Traumatologia" . "</td>";
    echo "<td width=150> " . $areatraumatologia . "</td>";
    echo "</tr>";
    /////////////////////////////////////////////area pedratria///////////////////////////////
    echo "<tr>";
    echo "<td width=150> " . "Pedriatria" . "</td>";
    echo "<td width=150> " . $areapadiatria . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td width=150 colspan=2 > " . "<strong>--------------------------------------------------------</strong>" . "</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td width=150 style=color:crimson>"."<strong>" . "Presupuesto Total"."</strong>" . "</td>";
    echo "<td width=150 style=color:crimson>"."<strong>" . $presupuesto ."</strong>". "</td>";
    echo "</tr>";
    echo "</table>";

        ?>
    </body>
</html>