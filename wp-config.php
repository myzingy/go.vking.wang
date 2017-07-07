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
define('DB_NAME', 'go.vking.wang');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'myzingy@vking.wang');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define("FS_METHOD","direct");

define("FS_CHMOD_DIR", 0777);

define("FS_CHMOD_FILE", 0777);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~pa4D^DxzW1[8*(n).Tx@fWjB488$}/7;T(=s+DVbt`+@ QV_H>V|KIkF{&vst2t');
define('SECURE_AUTH_KEY',  '>N:CXg^x_k%6Jtz4S@6SI]iftJl4mY*u6|T#a0Du8kSMs?sOio7HD(dYR:<3+APJ');
define('LOGGED_IN_KEY',    'Gc6X}D]>N5n8C KZGg}RmrA`=}1U#L5f~I6!3&]!(eJ_xk-q3cr,Dd}N`gk1_D[;');
define('NONCE_KEY',        '^*h+SV{Aq;whd[X{>ce0)~ |?RYa`LirkN/;#P_<66a{/L-Cjls]#?PLJSSde!$f');
define('AUTH_SALT',        'j!W}<B9*&&uF}`y+k]GLudGCBy]6#ydIQL38ld,q{2wDAGG(_W_y/Ery7nIgn-Ox');
define('SECURE_AUTH_SALT', 'm#0K:MlbI&v-Vt8B-ba@rm%Qw6n<dodr}{QvuPG$,enIF*#ltk[jst(=S;r@W?$L');
define('LOGGED_IN_SALT',   'JT`Onl3GiV%GoXg`5^sjLSID,U8m@*o@!u<3gDeTjh1R7b6lZuOkV2N$Pg)s(v>Q');
define('NONCE_SALT',       '4h48ieM-<>xK.m}ZjIrgeH dB VSoLaE^ZK)DpR$<Jx(xb<J4r#ZY y>l{,caA$E');

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

