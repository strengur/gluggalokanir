<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '42_glugga');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'es;j#wBfP(F]&fJ91CRcxs|Ja)?!G):R.+_DyOS:OH$x}$H{~iw(U^IscYX^5eYY');
define('SECURE_AUTH_KEY',  '|KC0Ikqm]n|94T-?5~: Y}VJd$}{<?IZfbz6!Jks~zaxlK23cb)^L8IFk[iTcUkd');
define('LOGGED_IN_KEY',    'nlzpj|n.TM_j2k`gwX_kaw_3G#+63OXSl7Cm:QyBPM-<DIb-hSynf*ETzuWb#NSU');
define('NONCE_KEY',        'kM#8o;7ci->U?7:~YulaEH[fx)fCJ45Ry|8rK/Wo+1$v?9rkVm&Khw5a=G(#ECM)');
define('AUTH_SALT',        'toI-5j><V@||jdm9#>$fJ$r^c61I+Mo+!r-VN&BC>~;h$AaPK>a`eV}fFp*(E2Uf');
define('SECURE_AUTH_SALT', '2O7]Rg)SB_{+amr-,Hp|L9>AQHykS+2<znzedS)T-=cPqjRb_D*O`e|[-UcFddN+');
define('LOGGED_IN_SALT',   'j(OVO(@]> AjXxvfYyQtD-QM;r&i2v(pyEEsX#uiAPf2I?tT,^3m-0$]`!y NSV;');
define('NONCE_SALT',       ']?rz`U56lrZwQv>u+|%pQzPSZ#WT5 A0?@YsqUX[}q`A%e-7SoQMQpwK9fR,x!w[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
