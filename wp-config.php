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
define('DB_NAME', 'theteasers');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'p(~<67<K6s?^s[ i2aB$5DJ0!p}yY94jRZ&(ic2SY.MV-)~vyY?B*dy7P C!c6+)');
define('SECURE_AUTH_KEY',  'W6DQS~6,T.prid_,K!5dZ9#8Ij)n$--;#U%<*p+K45kY1sls`%f~tV@!3/qN|e*x');
define('LOGGED_IN_KEY',    '$2P9C&X!dK +6mQ5kBvwwENYBxCtst8.m:q4-$Tet_k+RVljRUNtG:(7htwv#8KF');
define('NONCE_KEY',        '$w:uWUS Ad]F5g/];}La54{_N$W%KMEv:X!SLrl5X .GM1uH|wFyY|(nS)]<vw;7');
define('AUTH_SALT',        'tL)6T1h0>V.;|<S_l#R&o?HUPJe9+x6r{1KUa28%r}ngO9)[Up8J[:xx.&`4{Jne');
define('SECURE_AUTH_SALT', 'Z43D?o=%tJ  u1kBE3CAnW;.L&Mu>Dh!2{e5Z->~JG@!}|.CY1!eSI0Wq$xG@ULy');
define('LOGGED_IN_SALT',   'Cke0~.kt.y:`+>4Ez}>?pZ1-1JE/S*+5+1!9PV$b{GTIHe@ 0)ATPcPd`?+72M/!');
define('NONCE_SALT',       'V5%ARk@</OO,HN4$rzn1cDA^MC05TKjpruzQa3]lxD9hmt,?%Z_{S%6+R:/7;{Lx');

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
