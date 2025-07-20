<?php
// Configuración de la base de datos
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'tech_store');

// Configuración de la aplicación (versión mejorada)
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', 'http://'.$_SERVER['HTTP_HOST'].'/nw/proyectofinal_p3/public');
define('SITE_NAME', 'Tech Store');
define('URL_SUBFOLDER', '/nw/proyectofinal_p3/public');  // Nuevo - para rutas consistentes