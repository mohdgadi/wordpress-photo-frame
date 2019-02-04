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
define('DB_USER', 'wp');

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
define('AUTH_KEY',         'xnSia5spzO<.0zv,/9I+V0SFi|Q>5~E5hDhqn^Yg6s4[=3@U!n[ejl{UNuN5&mkG');
define('SECURE_AUTH_KEY',  '[JN]g4,fVhFNONqp5(_Jrzd <Hoz..s%$VIZ&%aCUKZ1~EGb<|^xD/&e7-Xu?_%f');
define('LOGGED_IN_KEY',    '9ew! }(d>.0aqKtQIzts(oma_nPg;P0IIl_s~Pi][!3*{d&6@ZB_20jHx::7x%Qj');
define('NONCE_KEY',        'kop[F/onU!^jOI0r0:?*)5%N@u08N ;KIeK38$ykIVE`KqS7iexeXTO0:L]r$>((');
define('AUTH_SALT',        'KbOI.{dYzB2ThOWqR.uk86rn?MTUww<[Wi:(aQzN|^]%YSxvcX]bH(C&@9EAjVDM');
define('SECURE_AUTH_SALT', 'aCAVX;{t8G~vW#,j9!GI0UJWJ|o$z*geVuHqq#Oy3b&cd^{>Qn-9rO:<Yiimh0`!');
define('LOGGED_IN_SALT',   '%U?a]N5}0Cj72,^cX]u*VLg*>sivql(=M@.$n95rNI?cf6wiArY*A`K<>=!4psMT');
define('NONCE_SALT',       'bIo=I1vEMz6ui;f8%dWS^f{x>-am{l~1be$y728KmI^laB&QiPR/RDm?1$QXC2gm');

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
