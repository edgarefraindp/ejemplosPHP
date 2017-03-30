<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos 2</title>
</head>
<body>
    <ul>
        <?php
        $arreglo = array(
            array('Cadena', 1234), 
            array(3.1416, true), 
            array('falso')
            );
        echo '<table style= "border: solid 1px black;">';
        for($i = 0; $i < count($arreglo); $i++)
        {
            echo '<tr>';
            for($j = 0; $j < count($arreglo[$i]); $j++)
            {
                 echo '<td style= "border: solid 1px red;">' . $arreglo[$i][$j] . '<td>';
            }
            echo '</tr>';
        }
        echo '</table><br><br>';
        rsort($arreglo);
        echo '<table style= "border: solid 1px black;">';
        foreach($arreglo as $renglon)
        {
            echo '<tr>';
            foreach($renglon as $elemento)
            {
                echo '<td style= "border: solid 1px red;">' .  $elemento . '<td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </ul>
</body>
</html>