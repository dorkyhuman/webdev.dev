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
define('DB_NAME', 'webdevDBjgsxg');

/** MySQL database username */
define('DB_USER', 'webdevDBjgsxg');

/** MySQL database password */
define('DB_PASSWORD', 'e3FNZhns3C');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '-5KZp~1G[5_5]DWpex]DSi+q*]DTm+#ETm+q*2Ibq.2<6Pfy<AQETm$<EUn$<BIb');
define('SECURE_AUTH_KEY',  'i*Peu.2I6Lbq*Ibq^IXn$<^3MjYr^3MBUn^v>BUJcv,7>FYrgz>F4Ngz>@0JcRk');
define('LOGGED_IN_KEY',    '<Qj$q<AMfUr,y<E7Qnbv<^3MFYrj$>BUMgzr,YQj@0>BUJgzn^7>FcRk@v>BVNg');
define('NONCE_KEY',        '6et#+]DXqex#E2Ley#EbPm*u<A2MjXq<$MATqfy<.7Qjbu<^3MBYrf$QEbuj$3>B');
define('AUTH_SALT',        'Dit.2Laq*]eTmi.]EXm+<ATi$q.3MfTm^3<7Qj$q,7QEXr,y<BUnbv>BIcvj$J7');
define('SECURE_AUTH_SALT', '<Mbvjy>7Qfv,^RgUo!zo!4NcRk@0|8RkZs|8>GZs!w[CVKdw[81KZsh-[G5Oh-p_5');
define('LOGGED_IN_SALT',   'x*]Haixm*2LA2Ifym*2<EXPi$<ATMfyq.7<IbQn^u<B3MjXr>$MBYrfy,bvj$3');
define('NONCE_SALT',       'rIUj$<BQjz>7>BUn^v>B4NgYr,80JcVo!v>F4RkZ-[!4RGZwk~1[CVOh-[_9SGZw');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
