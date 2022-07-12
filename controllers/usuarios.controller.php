<?php
    require_once("../models/usuarios.model.php");
    $usuarios   =   new modeloUsuarios();
    switch ($_GET["opcion"]) {
        case "login":
            $correo     =   $_POST['correo'];
            $contrasena =   $_POST['contrasena'];
            if (empty($correo) or empty($contrasena)) {
                header("Location:index.php?opcion=1");
                exit();
            }
            $datos = array();
            $datos  =   $usuarios->login($correo, $contrasena);
            $info   =   mysqli_fetch_assoc($datos);
            if (is_array($info) and count($info) > 0) {
                $_SESSION['nombre_usuario'] = $info['nombre_usuario'];
                $_SESSION['apellido_usuario'] = $info['apellido_usuario'];
                $_SESSION['correo_usuario'] = $info['correo_usuario'];
                $_SESSION['rol_usuario'] =  $info['fk_id_rol'];
                header("Location:../views/dashboard");
                exit();
            } else {
                header("Location:index.php?opcion=2");
                exit();
            }
        break;
    }
?>