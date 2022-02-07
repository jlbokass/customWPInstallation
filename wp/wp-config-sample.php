<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_js' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'dabok1977' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j=NYdB3Y7%M-OS Vxq-pv9ik&N*O$,N}3fl5@pg=!YJT Z!h`_-P$|=bGVjp?I)!');
define('SECURE_AUTH_KEY',  '-u{VaX%ehxX{dlZ955vJ.l)Nhw2pbm8FD%cwtp~?A,c}XZd~6%0/kcN@OJ]7zr~Q');
define('LOGGED_IN_KEY',    '!n/O^de/YB<D)p-+6zxTe_R]lcDW?l2S|hG@WsuY|Imkxq)GpS7*|N6z/ Zb<RB)');
define('NONCE_KEY',        '~!.oP$1SO@dY%!@+#^j6CO,FEiDfO,w(v?A,3PJGcx>@eA|aF>$C*wf:X0]:^&Lh');
define('AUTH_SALT',        'WJ`7BnDkA+YIV[y?Ag_Z~/{ESZT1nn(3/~rjr*l<ZGkEs,fq,JC$9R+&=r31-QVL');
define('SECURE_AUTH_SALT', 'TBM;Q2y`q%{qL-fl?6H`E#=8X3+xx=on99-LjWRjkhZ[!h#F]4xz~e,gH4 ya-i(');
define('LOGGED_IN_SALT',   'dnlg!7]FsTxV-Kn1oUJomP%m!#,X{O*=}T2G=1%#`7>q`7bWe 34^rM$y@rzjv+_');
define('NONCE_SALT',       'O~XcK-|p_Vvoz0 l++A*[j8wd|:c9 +i6(QK[O!},o~^ln7dYNze5^BH.F-Cxm_j');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

define('WP_CONTENT_DIR', dirname(__FILE__). '/wp-content');
define('WP_CONTENT_URL', 'http://localhost/wp_js/wp-content');

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

