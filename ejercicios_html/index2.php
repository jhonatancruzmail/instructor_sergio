<html>
    <head></head>
        <body>
            <?php
            echo $_POST['nombre']."   "."practica ";
            //verificacion de selecion de la opcion futbol//
            if (isset($_POST['opcion1'])){
                echo "<br><br> futbol ";
        
            }
            //verificacion de selecion de la opcion basketball//
            if (isset($_POST['opcion2'])){
                echo "<br><br> basketball ";
            }
            //verificacion de selecion de la opcion tennis//
            if (isset($_POST['opcion3'])){
                echo "<br><br> tennis ";
            }
            //verificacion de selecion de la opcion ping pong//
            if (isset($_POST['opcion4'])){
                echo "<br><br> ping pong ";
            }


            ?>
        </body>
</html>