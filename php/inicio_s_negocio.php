<!-- Cuenta con los archivos user_session.php y user_negocio.php para saber si hay una sesion abierta o iniciada. Para ello se va a pasar al archivo user_session.php. -->

<?php
include_once 'includes/user_negocio.php';   //Comprueba si el correo y la contraseña ha sido creados
include_once 'includes/user_session.php';   //Incluye el archivo user_empleado (verifica si hay una sesion habierta/iniciada)

$userSession = new UserSession();           // Se crea un objeto sesion
$user = new User();                         // Se crea un objeto usuario


if(isset($_SESSION['user'])){               // evalua si el usuario esta seteado
    //echo "hay sesion";
	$user->setUser($userSession->getCurrentUser());
                                            // Muestra la interfaz de los siguientes archivos en ese orden
    include_once 'perfil_negocio.php';     // aqui va el perfil del empleado que se va a llamara perfil_empleado.php

}else if(isset($_POST["correo_n"]) && isset($_POST["conidcn"])){ // Verificamos si los datos de inicio sesion han sido recibidos correctamente

    $userForm = $_POST["correo_n"];           // Asigna los valores de $_POST["correo"] a $usserForm
    $passForm = $_POST["conidcn"];         // Asigna los valores de $_POST["conidce"] a $usserForm

    $user = new User();
    if($user->userExists($userForm, $passForm)){
        //echo "Existe el usuario";
    	$userSession->setCurrentUser($userForm);
    	$user->setUser($userForm);
                                            // Muestra la interfaz
        include_once 'perfil_negocio.php'; // aqui va el perfil del empleado que se va a llamara perfil_empleado.php
         
    }else{
        //echo "No existe el usuario";
    	$errorLogin = "Nombre de usuario y/o password incorrecto";
        include_once 'login_negocio.php';
    }
}else{
    //echo "login";
	include_once 'login_negocio.php';
}

?>