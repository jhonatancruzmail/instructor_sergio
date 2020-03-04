<html>
    <head></head>
    <body>
        <?php
        $anios=$_POST['edad'];
        echo$_POST['nombre']."   ";

        if ($anios<18){
            echo " es menor de edad ";
    
        }
        if ($anios>=18){
            echo " es mayor de edad ";
    
        }

        ?>
    </body>
    </html>