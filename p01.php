<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $nom = 'Kurt';
        $cognom = 'Cagle';
        $edat = 40;
        $dataNeix = date('1983-05-12');
        $tel = array('654332211', '9333332211');
        $adPostal = 'Carrer de Turin, 15';
        $adElec = 'kurt.cagle@example.com';
        $treballa = true;
        $alt = 1.67;
    ?>
    
    <h1>describint 
        <?php echo $nom, ' ', $cognom  ?>
    </h1>
    <h2>Les dades de  
        <?php echo $nom?>
        son:
    </h2>

    <ul>
        <li>Es diu: <?php echo $nom  ?></li>
        <li>Te <?php echo $edat  ?> anys</li>
        <li>Va neixer l'any: <b><?php echo $dataNeix  ?></b></li>
        <li>Els seus telèfons són: <?php echo $tel[0],'-', $tel[1]  ?></li>
        <li>Viu a: <?php echo $adPostal  ?></li>
        <li>El seu email és: <?php echo $adElec  ?></li>
        <li>Treballa: 
            <?php 
            if($treballa) echo 'Si';
                else {
                    echo 'No';
                }  ?>
            <!--TERNARI:
               echo $traballa ? 'Si' : 'No' 
            -->    
        </li>
        <li>Medeix: <?php echo $alt     ?></li>

    </ul>

    <div style="border:1px solid cyan;">  
    <?php
        define("IVA", 21);

        $cursos = array(
            array("ID", "NOM", "DESC", "PREU"),
            array("1", "PHP", "Introducció a PHP", "15.5"),
            array("2", "Laravel", "Laravel per experts", "30"),
            array("3", "Django", "Dominant Django", "10")
        );

        $curs = array ("a", "b", "c");

        for($i = 0; $i<3; $i++){
            echo $curs[$i];
        };

        for($m = 0; $m<=3; $m++){
            for($n = 0; $n<3; $n++){
                echo $cursos[$i][$m];
            }
        }
    ?>
    </div>

        <h3>Llista de cursos</h3>
        <h4>Numero de cursos apuntados: 
            <?php 
                echo count($cursos)-1;
            ?>
        </h4>

    <div style="border:1px solid purple;">
        <?php

        ?>
    </div>


</body>
</html>