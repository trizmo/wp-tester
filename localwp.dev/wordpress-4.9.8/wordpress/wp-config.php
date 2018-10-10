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
define('DB_NAME', 'localwp');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin123!yes');

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
define('AUTH_KEY',         'ITc$N4W0dtvyu;:?/+di*`/-MJ~`zpNzBK~RH99Qkv7f [tJ50fK48A98G5C@NgB');
define('SECURE_AUTH_KEY',  '5=710R!4N#5eNGtnunvqB0w46H&31./C!FWemX%nZy0CpCmbEC?}1zI^vnjP-2UK');
define('LOGGED_IN_KEY',    '$M8=pj<^7}Jk_E!#G[D_o,!)V9inL+~SuHFYSji 2ldL+dJx[,]6[`2]>LJDkS}a');
define('NONCE_KEY',        'l<a^W6N$r+f?R]S]?hl=N((V{mFO*5*#TRw8tu X`qA(!bsewiJ$a`D#x=WN?1$-');
define('AUTH_SALT',        '>5yll}hv|+Xfk)hq#ADe$sE61S=MKm*wVm>fa(OrcqaCV@0LRD>rR4{e6_,WO [^');
define('SECURE_AUTH_SALT', '{fM#-@>Fcz[)Nq`,+~A8(gz]%Q lM`N)ht!W6kR:~35S2jt_%$/DP;39wF.j*=<>');
define('LOGGED_IN_SALT',   '9&``L iFeQND}o->PGY>AN,bk u)|;Q G3*uHUt4kvHydSiAPkwoE0SS^:bT(kYb');
define('NONCE_SALT',       '&Ta@^_!.QW9jJ.sJ?[+n}?gga_M;MY[Mz5Lw1#0YNo~i_);}()GS+A>Dw8Gw2HPw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test1';

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
