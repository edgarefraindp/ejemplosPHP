<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            #todas las variables se declaran con'$'
            $num1 = 10;
            $num2 = 20;
            $suma = $num1 + $num2;

            #echo "La suma es: $suma";

            #La concatenación de cadenas se hace con '.'; no con '+'
            echo 'La suma es:' . $suma;
        ?>
    </h1>
</body>
</html>