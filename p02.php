<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <!---------------------------Part individual -------------------------->
        <?php
        //creación de array y con la ayuda de un for se rellena la misma array. 
        $taules = array();
        for ($i = 0; $i <= 9; $i++) {
            $randomNum = rand(0, 5);
            array_push($taules, $randomNum);
        }
        ?>

        <!-- para imprimir todo en una caja se hace un div y luego con la ayuda de un for y
                condicionales-->
        <div style="border:2px solid black; width:20% ">
            <?php
            for ($i = 0; $i <= 9; $i++) {
            ?>
                <ul>
                    <li>
                        <?php
                        if ($taules[$i] == 0) {
                            echo "La taula " . $i . " està buida.";
                        } elseif ($taules[$i] == 5) {
                            echo "La taula " . $i . " està plena.";
                        } else {
                            echo "La taula " . $i . " té" . $taules[$i];
                        }
                        ?>
                    </li>
                </ul>
            <?php }
            ?>
        </div>

        <!-----------------------------------Part Grupal ------------------>

        <?php
        // declaración de las variables 
        $hotel = array();
        $randomNum = array();
        for ($i = 0; $i <= 4; $i++) {
            for ($j = 0; $j <= 9; $j++) {
                $x = rand(0, 4);
                array_push($randomNum, $x);
            }
            array_push($hotel, $randomNum);
        }
        var_dump($hotel);
        ?>

        <!-- imprimir los datos-->
        <!-- he usado dos for, el primero para la planta y el otro para las habitaciones-->
        <div style="border:2px solid black; width:20% ">
            <?php
            for ($i = 0; $i <= 4; $i++) {
                for ($j = 0; $j <= 9; $j++) {
            ?>
                    <ul>
                        <li>
                            <?php
                            if ($hotel[$j] == 0) {
                                echo "A l'habitació " . $j . " de la planta" . $i . " está buida";
                            } elseif ($hotel[$j] == 4) {
                                echo "A l'habitació " . $j . " de la planta" . $i . " está plena";
                            } else {
                                echo "A l'habitació " . $j . " de la planta " . $i . " té " . $hotel[$j] . " persones";
                            }
                            ?>

                        </li>
                    </ul>

            <?php }
            }
            ?>
        </div>
    </body>
</html>