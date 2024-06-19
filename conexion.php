<?php
    $dbuser = 'daragonp';
    $dbpassword = 'Saranicolle8+';
    $dbconnect = new PDO('mysql:localhost;dbname=adso', $dbuser, $dbpassword);

    if($dbconnect){
        echo "Conexión exitosa";
    }else{
        die("Error en la conexión; revise los datos");
    } 
?>