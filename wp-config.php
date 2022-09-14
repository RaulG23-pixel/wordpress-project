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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'CA3+ M9q0GmA)If!0,Q`vbaVBIT2TD(Os4x?^hIQZ4Cn//WUqz?FspPwg0NL,I`N' );
define( 'SECURE_AUTH_KEY',  'Py1&VQ[_;(%h1OQ-xN>Qx[*~/VPR<z8VKS$Oko 7~nlmfYIa2q[+Ze5`iU/6]Lz3' );
define( 'LOGGED_IN_KEY',    'nN15P#E;?Fn(J(B~<G^mmxk94-,JJ7w!y1VA}=]CTMtU9> f|b|rd,y-&^XmudM-' );
define( 'NONCE_KEY',        'L|JXw%C(.PA~dFuJ,-f+<arOoyjT Rpszab09s4/~0:>^14Mlxin|_X4/*9e!a s' );
define( 'AUTH_SALT',        '*Vey^ec_jgZ3^Q7(Ia6HDll2eEJ@j:RjN{}A0gDEs2s1Zcd}AhO!8f@ZXcJyy9Dd' );
define( 'SECURE_AUTH_SALT', 'bjNUA5@7.%+BEOu@COYk,H;dvSW2c`/;pOU2QAE:$h1=qvTD,-KG[F(b_lA7tzNV' );
define( 'LOGGED_IN_SALT',   'n3_$m&>SJ-]L*#7~*Bl6W<~40.Q8Y-QVn+?wX1^u;t;Cw.IxU9%ooa==%EHk- X>' );
define( 'NONCE_SALT',       'R/236{lJ_.G3M(kgDV#<ekoNp)e(9e5;65QxOrW|?s[mE,;{6t:f>ic|=+U#9sc7' );
define('JWT_AUTH_SECRET_KEY', 'kiwi');
define('JWT_AUTH_CORS_ENABLE', true);
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

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
