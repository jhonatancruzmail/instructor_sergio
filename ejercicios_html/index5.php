<?php
    $numero1=$_POST['numero1'];
    $numero2=$_POST['numero2'];
    $elecion=$_POST['operacion'];
    $resultado=0;
    if ($elecion=="suma"){
        $resultado=$numero1+$numero2;
        echo $resultado;
    }
    if ($elecion=="resta"){
        $resultado=$numero1-$numero2;
        echo $resultado;
    }



?>