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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'xSCrG|;7Fd!*3U54~N|4`~?`wfwa{|<@Wd+K:5d7>Za,IKlwj0kBMWmMKc`#~FKc');
define('SECURE_AUTH_KEY',  'k{ffp!aa:/u%:7Q$_}>l``16m=XEn`pkHG([L~9nQ&l>6hABh$$erZUU6}}q<Jnr');
define('LOGGED_IN_KEY',    's~dr)k[a[0=;[DgKZQPb;FZ.gI*cFDIZ$N}a`5~YM!Uq?-gyQFjC.!!)&8!?j52>');
define('NONCE_KEY',        'o:R6C(Sh@U#ZW.(EWk7P>,g/W|gZ0YC_ci$0a?Cif/Rl6xx&z5.zo;(&;mwA;vpQ');
define('AUTH_SALT',        'pKUM^jku]ZorAbU+17e:`OM[EZ@R@l1]O,$%A+;67b2^?XVk(D{OzS;B}r._dzHr');
define('SECURE_AUTH_SALT', ' b8Z-[o%$Wh=%{BO)o20i:!E>{0N$u}NUkwV0G=8Y/-[!cEoo|ZmAwNifD+6]P0x');
define('LOGGED_IN_SALT',   '}fiXNS%F&[s<E-:7nSrU2Zz(>x[h&O*U8_xhM-wBbeUY20V`EZfwFPQnF C T`mK');
define('NONCE_SALT',       'r:{;,*Rarl9XlBnc=G,vfgc!9U/4?P<$m{OOa9&xi`SZ`FfK[Tj>0v[Z|QOE2^*|');

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
