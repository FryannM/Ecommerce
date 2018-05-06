<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'fmr_electronic_shop');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'FryannM');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'FUee,.&fqRVxNE8G!5JUGg}G:d%i&gWZW%)H)|3Cq+O<x2?F|}/,18Z9X5(F`{:a');
define('SECURE_AUTH_KEY', '](Y5~f#|;jceedXvH=B!C5<D/w3$mz)]?#}w%hw$M-`eK)k*1ik)>=D{TyME7/#V');
define('LOGGED_IN_KEY', '8:nb]Q;_dmCk7eM5s43MOlngB>i<oLtufhghneZjSI^aAAmv1^5)X;0CS?+Rzg3@');
define('NONCE_KEY', '0LwO`>Odu k[c3,srud~8?R9lIA66ZR)kg,b@LrCnebAs<G;/2Z^pj0uUo3@.`1x');
define('AUTH_SALT', 'fWDbo>MIBNa{GES4K/qI#*|mc+Xb?E.Fz4{:e_yk0z@vYT; MXq{yn+7/GT*(Dj<');
define('SECURE_AUTH_SALT', 'C;&A=l<Z@&:C-MJ+kAoFOt`Z[)9lxJ0y$SI.:YA^lzXSDJQWl?xSO=cn:4w,K+vT');
define('LOGGED_IN_SALT', 'Nn:dL6BP&Fkvs6T9;X(y*l[qOJ%?L1|[sT0kR5h}qLB[HHIld%_C8MJo-V$R3r1l');
define('NONCE_SALT', '?#/#Xrh[f(k}l8fVo-[@uY!^aXNGltG1z,?D`J[Tf$Z,fDz6#uWm7PG6*ggPI6r)');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

