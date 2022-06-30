<?php
    require_once ("../config/connetion.php");
    class modeloUsuarios{
        public function login ($correo, $contrasena) {
            $con        =   new claseConectar ();
            $con        =   $con->procedimientoConectar ();
            $consulta   =   "SELECT * FROM usuarios 
                            WHERE correo_usuario = '$correo' 
                            AND contrasena_usuario = '$contrasena'";
            $datos      =   mysqli_query($con, $consulta);
            return $datos;
        }
    }
?>