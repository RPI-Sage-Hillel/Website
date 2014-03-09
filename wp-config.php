<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'hillel');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '=<;gWltKQaECr?Vr*]iSb.KM(.W509!1pU]S|_MF+Kgf)/H9t2N/+W8ettQJ._H_');
define('SECURE_AUTH_KEY',  'zYg|e^bz|aom)!uZjJr*KbhfF[{#RxmE(Q<=Cu!jXcTk,&<J@eC59?3~npV88@nD');
define('LOGGED_IN_KEY',    'U{7]o/E8HX}#>,O`v;%x a)&N~d/&lNvi^AaTx9EJ%T;/f:d Dm)d*=zm}l(+1ZR');
define('NONCE_KEY',        '*In5DIft924XfJzY1bGLlrI<|?%lCA<hb- ?7n,6sk1yu/_f>m7QB95^bZdAGa-F');
define('AUTH_SALT',        'O7]ey3JY~?d8J#|;}!5BTW zwqIKQ#C%wK{caZh=8E`p`gPUafrIB:c~:zoB_X#C');
define('SECURE_AUTH_SALT', ')Oq&tpH0}vb2}<m:6px]_~(m/*p-Syp/dQm0^Aa=L,gb{/|!Hnl,ga34+2Yz*.Dk');
define('LOGGED_IN_SALT',   'j PpWIdsZ+cB6Ez, FTp{^_G^_$[?hh4k+)6%*u x!^j&SGwB8Clgf)hj~_PWm`5');
define('NONCE_SALT',       '3K=eWCCOfrC!5!0(d4DaP>4uua+y9#f7{bakJ/0[&PY,kHqE=^6 Ky^jbGRgu#kS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
