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
define('DB_NAME', 'base-10');

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
define('AUTH_KEY',         'naUZC|M/6}{v~d8*j(pkfBnrp$N,U3-w6yYUBa8=HLiA)MlT!I8q-n[;/F(aJ(8p');
define('SECURE_AUTH_KEY',  'pUF@y%T1C4s)tNjoLd9+8@:_5|wxoq~tRcIdr.@rcckD3D8>2?G#^`*{B+<ipJAT');
define('LOGGED_IN_KEY',    '7fW!mhBVHM8)C<GrWSCvu*!(}8sXr5i~L7KO7^P^^XzT ?>?+rz?PWa4b6bHw)f>');
define('NONCE_KEY',        '>cLl.?lt5UrWY@|j{d6[ny,bBbwUpaX|:`*v%}q>=cO9lhc&!ru]fvLVJ!lQ4.E(');
define('AUTH_SALT',        '}Z?2FLzVTz>5GLlA;j4{cFDI#o4GZ3eU(jwg%0``<~aiIY.z0=*cKZ$^/.jT%?=#');
define('SECURE_AUTH_SALT', 'aM{-.m8P:[I9V%P*A9s8}dsxtFuVBQSm;sUA{s:b-q;`==6(p/!#6@/CWp% `wWj');
define('LOGGED_IN_SALT',   'hL1-< 2/1L}vRgNPx6e89Z)_MKH+b!PAqxX_.##)RVHG_:!eEb.~c| ~dvjjJ/}y');
define('NONCE_SALT',       'H)h;2wUN(Iq^bj?I9/<T J-N4?xB*pK.ucfqo~bQ^h4kce|024Y/]tL/%kzd(xK_');

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
