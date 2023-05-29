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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'initial-wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '4cSM@G832c&eZQks7EGp*nsJfzH(1}}0U8Kk*bWKa1rFGkdX-t&vCpLTu=G,Q&tY' );
define( 'SECURE_AUTH_KEY',  'XAcYvHli*BFzp|hjr{`juji}]m2cjz[MM7xQdd%.zU@k3x%RCR-3H8(BhwNCld(&' );
define( 'LOGGED_IN_KEY',    'h|wb>=3eFoYaTTWw0LZ9haR;7B8aA(O-d,N@7bWpA`_|QJ;LRjvv*&h=Rl>8n`W2' );
define( 'NONCE_KEY',        '.%rM^OKEEzx5+s=b#/$xnyzAA9)0<fa,?EBm,=@i44pDRS@h!2X9(KiISjYn*QNi' );
define( 'AUTH_SALT',        '`oY3.E<mJvx]DpUU%5f:1~D&T]qB)-3M^,2{9EH>PC3l@y:,c-B{:>$)`zC^|8sS' );
define( 'SECURE_AUTH_SALT', 'r;Y<j2XwoXM|z,jw GqH,gg0w!r4AsoEDs4N^[KvcE]|e$V{Wx&,}Bj/rSCP/wSt' );
define( 'LOGGED_IN_SALT',   'J^M(sLjw^0E3l*kPF%h`w*mb{m_1M7OK:a7Od%=Lhaa?D`z|x:b/8#(JYQ&ROC1:' );
define( 'NONCE_SALT',       'Tr>y-^Ns+7Ba4NT]QH@dN?hSq#gu)=6kGASD+))N/ mHHeLZFB,x#4A<BfXBcKB ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
