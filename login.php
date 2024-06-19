<?php
    session_start(); 

    require_once('conexion.php');

    if(ISSET($_POST['loginform'])){
        if($_POST['email'] !="" || $_POST['password'] !=""){ // Debe ser igual a la propiedad 'name' del formulario.
           $useremail = $_POST['email']; 
           $userpassword = $_POST['password']; 

           $consulta = "SELECT * FROM usuario WHERE correo_user=? AND password_user=?";
           $verificar = $dbconnect->prepare($consulta); // $dbconnect es la variable del archivo de conexión que contiene los datos para conectar a la BD
           $verificar->execute(array($useremail, $userpassword));

           $registro = $verificar->rowCount();

           $fetch = $verificar->fetch();

           if($registro>0){
            echo "Usuario encontrado";
           }else{
            echo "El usuario no existe";
           }
        }else{
            echo "Verifique los datos";
        }
    }else{
        echo "Ingrese los datos solicitados";
    }
?>