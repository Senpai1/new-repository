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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         'fb|re{b;1lO7E7fKcVOoV./<7KT]02[?)N.rqdGoi`nIw]BNYCLmF;ILW&c|8z++');
define('SECURE_AUTH_KEY',  'sj}P|DoSjTCL])*iT8B/kP3 -zRvWJ;<rS5_tEml+W&s]|b`JfS50Wa+9eA]/^_B');
define('LOGGED_IN_KEY',    '|2)>8+KOt;JFtF**n3aXB@wRTR!W5bW7acs5SL-N&$P>2Fvt8=X5aUzf:vZ)|Tqn');
define('NONCE_KEY',        'qerInU@e+a19-g{zt:tgyE:}pXZ^@: {r2%+I}q;HJ{Bxz7j-Ioi<}|QJXzU/$f%');
define('AUTH_SALT',        'cO`b/%*W>x%~M5lt~}pt$rtaRzyfq$g0LO~ddYPLImX=I-2+QE,hv.<p!r<|czj*');
define('SECURE_AUTH_SALT', '<xd5kQX~|GSHR$I1;9T;]fzKloMLi]5wm9}kZ[1#DAH)j9y,E}7d[YgPdd5)J+q;');
define('LOGGED_IN_SALT',   'C|CdX[?.$s^^@q+$>D~5.FdEFmWx}4i(-<KlA{up9(!7Hwg-K]zypb0#:_fd(GZ[');
define('NONCE_SALT',       'P|eU:fml|VX#vuJw4;_LRjEL|Ja5By,f$,e4||n%f6O6UIehyqYPsjqEt5`voxXs');

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
