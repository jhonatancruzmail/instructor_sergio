<?php
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];
    $elecion=$_POST['operacion'];
    $resultado=0;
    if ($elecion=="1"){
        $resultado=$numero1+$numero2;
        echo "<h1 style=color:red>Resultado de la suma de $numero1 + $numero2 es de $resultado</h1>";
    }
    if ($elecion=="2"){
        $resultado=$numero1-$numero2;
        echo "<h1 style=color:red>Resultado de la resta de $numero1 - $numero2 es de $resultado</h1>";
    }
    ?>