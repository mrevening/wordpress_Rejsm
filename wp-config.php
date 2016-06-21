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
define('DB_USER', 'rejsm_admin');

/** MySQL database password */
define('DB_PASSWORD', 'VCef8jaaxjvsCZjG');

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
define('AUTH_KEY',         '6BE(co@] ,QjDdLcSg8qCq7Ph+C5`eVjL7st8JNH+s>$cyXnYg1Fi@wB<O?8|9`[');
define('SECURE_AUTH_KEY',  'd<Xmif$;-6{p8o|)ccOLU0_:Zj|{*OayR,e-_!+c[^3H(vq)}&(enHZ~OCC-#@S8');
define('LOGGED_IN_KEY',    '6>y@@2un!7k+6.NyVUUi*|XyQbR?LK|9BWn!F>SN|{k^|x{!Wwl-YuNKFTdFF~I.');
define('NONCE_KEY',        's0]BKzLmB%g[%F!m6vQ|*9e?p5)SBjen3-MNsrX{q+$Hp=BaG,V])baqO|xnNXH#');
define('AUTH_SALT',        'PBM:%4C=ThS8ky^@PXy-y[-<%<?[C)AB`G|$oj{<v}{ZM:.cU>:<sa+]VsWg-`2z');
define('SECURE_AUTH_SALT', '[H#cjlH/69CloHr.FHcc5brT-ng:]Mj;%};*}4=oIXeSt4BiidmESil|EW6>Hlah');
define('LOGGED_IN_SALT',   'q(2@.sh(AjZm=zh9@K:s@E_vH@Xg=RC5_{.|yJUcr.~j4Sb-1+{2cE_umPO+)UB4');
define('NONCE_SALT',       '-KX!sA*S}U(cqd1eQuSB+3&;rs4S^CK[@uAnR!WJuLv-lm**!^uj4/VrZn9*s(uF');


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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
