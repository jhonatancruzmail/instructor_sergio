<html>
<body>
  <?php
  $numero=$_POST['numero'];
  $descuento=0;
  $total=0;
  if ($numero>=10000)
  {
      $descuento=$numero*0.2;
      $total=$numero-$descuento;
      echo "felicidades obtuviste un 20% de descuento el total apagar es ".$total;
    }
    else
    {
        $total=$numero;
        echo "Lo sentimos para obtener el 20% de descuento necesitas comprar un un producto con un valor mayor a 10.000 aun asi, el total apagar es ".$numero;
    }
    if (isset($_POST['factura']))
    {
        echo "<br>"."<br>"."factura"."<br>"."<br>"."valor del producto       ".$numero."<br>"."descuento                 ".$descuento."<br>"."---------------------"."<br>"."total apagar               ".$total;
    }


  ?>  

</body>
</html>