<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dibujando</title>
</head>

<body>
    <?php
    $asterisco = ""; #declaro el string para ir acumulando los asteriscos para generar la figura
#prueba git
    #el primer for es para el nivel en donde se dibujara, para esto utilice el limite 
    for ($i = 0; $i < $_REQUEST['limite']; $i++) {
        #este segundo for es para el el numero de asteriscos que se agregaran en el string, para esto utilice el incremento 
        for ($j = 0; $j < $_REQUEST['incremento']; $j++) {
            #aqui se concatena 
            $asterisco = $asterisco . "*";
        }
        #aca se dibuja en el navegador los asteriscos por nivel
        echo $asterisco;
        #salto de linea para pasar a otra parte
        echo "<br>";
    }
    // echo $asterisco;
    #aplique la misma logica para la parte de los niveles de arriba
    for ($i = 0; $i < $_REQUEST['limite']; $i++) {
        #aqui es para eliminar los asteriscos dependiendo de la variable D
        for ($j = 0; $j < $_REQUEST['incremento']; $j++) {
            #utilice la funcion substr para crear un substring quitando un elemento a la derecha por cada iteracion del for
            $asterisco = substr($asterisco, 0, -1);
        }
        #con esto dibujo la nueva substring con los asteriscos ya eliminados por nivel con cada iteración
        echo $asterisco;
        echo "<br>";
    }


    ?>
</body>

</html>