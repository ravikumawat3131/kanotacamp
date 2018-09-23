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
define('DB_NAME', 'hotel_ks');

/** MySQL database username */
define('DB_USER', 'dsoft2');

/** MySQL database password */
define('DB_PASSWORD', 'bs[hUn{uSovk');

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
define('AUTH_KEY',         'O;9<j0W)+`L]?onv>j0Q/!`^|ngp,}q)5 ZR+k>AP={+8r+h>-Cst&0`j_{%[ tN');
define('SECURE_AUTH_KEY',  'Rr&=n @d-5C1K8cO;c1&W(QzWw778cYO)&%9R!:<9=np__rn[TSD4@4!shIdVQLw');
define('LOGGED_IN_KEY',    'SNdM-ra::(r4Q6o/=j./[<jN8TtqeeP#2:-Fi;+eG ]zCBNn$s094WdW}$3La1nY');
define('NONCE_KEY',        'yAE$7pP2.,u103`T?Rjux-YE~]$ 22<][Z$;0mB:Bn#i@+A/txG2{#-i|%P{SP>|');
define('AUTH_SALT',        '|yT0W%xN;e[k64OpSfX0 z[b[_AN(M8=i?Cg!/aZ^c+jGJ~~M!;0b6:>~GhSBWkS');
define('SECURE_AUTH_SALT', '3S=XW2wvC--Ix9<AgZF<v!b)Wz>RxTvwPJk/-r_-j=]Oni=IMC3hrhBe7je.Eu+L');
define('LOGGED_IN_SALT',   '/@&CwD?>Hh6nBcI>bdqKJ>O4As<*C%]RY$#ZY14Q3s}IB+ld`/_$L<Z]t;mEMW&W');
define('NONCE_SALT',       'EA8|-c3y&v$uuB~(:^;~29oY>tKE~?{`QYaHfRd3m44|UGg!X2#kp{>gYpO43_dB');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ht_';

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
