<?php

#los arrreglos se crean usando el operador ´array´ ó con la notacion de ´[]´
$arreglo = array('Cadena', 1234, 3.1416, true);

sort($arreglo);
for($i = 0; $i < count($arreglo); $i++)
{
    echo $arreglo[$i] . '<br>';
}
echo '<br>';
rsort($arreglo);

echo '<ul>';
foreach($arreglo as $elemento)
{
    echo '<li>' . $elemento . '</li>';
}
echo '</ul>';

?>