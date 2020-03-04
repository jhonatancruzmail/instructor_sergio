<html>
    <body>
        <?php
        $cal1=$_POST['calificacion1'];
        $cal2=$_POST['calificacion2'];
        $cal3=$_POST['calificacion3'];
        $promedio=($cal1+$cal2+$cal3)/3;
        if ($promedio>=70)
        {
            echo "<h1 style=color:greenyellow>Usted aprobo el curso :D con un promedio de <style=color:crimson> $promedio</h1>";
        }
        else
        {
            echo "<h1 style=color:crimson>Usted reprobo el curso :( con un promedio de  $promedio </h1>";
        }
        ?>
    </body>
</html>