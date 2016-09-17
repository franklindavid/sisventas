<?php

ob_start();

// Variables para la conexión

global $Usuario;                     /*root*/

global $Password;

global $Servidor;                    /*localhost*/

global $BaseDeDatos;

$Usuario="u286997763_root";        /* nombre de usuario de la base de datos */

$Password="pesa@peru";               /* Contraseña de la base de datos */

$Servidor="mysql.hostinger.es";              /* Servidor , generalmente localhost*/

$BaseDeDatos="u286997763_siven";   /* Nombre de la base de datos */

$Passwordtabla ="margarita";

$usuarios_sesion="factu";

$sql_tabla="user_list";

ob_end_clean();

?>