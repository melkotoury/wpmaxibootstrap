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
define('DB_NAME', 'wp_maxibootstrap');

/** MySQL database username */
define('DB_USER', 'melkotoury');

/** MySQL database password */
define('DB_PASSWORD', 'BAllSHit073783');

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
define('AUTH_KEY',         'SZFf7?J^La)ob_d0M0`v`.{gao+};A5T#&e[6oF>}N,&;_PMI8t<g:49)x2;s3H|');
define('SECURE_AUTH_KEY',  '-0F+;Do_?Hd4Yy,VQ8AI,2h/@r[)^7CKJDuuaYh(r8p-dXBv(=XZ7~Bxg+-okiKt');
define('LOGGED_IN_KEY',    'uD&0@9ggA|>F:%Y!p+}Oue6QjT#}at_g12B*:w%[-?~[aY5To8?Qp:LdHX++(,F,');
define('NONCE_KEY',        'AF#RJk%#sg|A[6_GYS;i136IU2gsnLNjm-Cf#W(>>?/Qu0$c]+XKp6sMijj7j{)t');
define('AUTH_SALT',        '-t[QICS,)=|+[.ya Yc#BpdOeTGpfHJd,AB }csd0R<7P8RC_aIlh=82Qf6zB|4K');
define('SECURE_AUTH_SALT', '+JRe^A_^uEoOUt8Ny>x<m3xN?*xu]qdlTZwL@X0M*Lvi-qf6!.rb!wVu{lVlR88l');
define('LOGGED_IN_SALT',   '1l9WM2/->-Tb7!-P+okd,U:V,/v<C4U9Z@u2iQ-9_-3Xt 1(|V*-X%ujh-Q}S_+R');
define('NONCE_SALT',       'i{w0nee/eb~u33J-Y`L6AP3g+*!Z vqkI!3?WO1PdO{b>a9@}tP*[3|epGsJaQy:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbmaxi_';

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
