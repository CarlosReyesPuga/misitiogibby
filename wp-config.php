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
define( 'DB_NAME', 'misitiogibby' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '066a5591165c7520e9f8fe87919f7d218a2dbbfe3c5f67a1' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'qEp1N-;#RtQp^J:h,b&w-$Xh:+{B/2e_eiXt(+N_!(.3rH3iCqH%9tMy<@Dy_z=;' );
define( 'SECURE_AUTH_KEY',  '9Q}:#3bXYS`9ZI:5U4dX/,_E}_X*x:Y;K3vkIIlCb]4|UE_WEKIHB-Y;uj69g4l%' );
define( 'LOGGED_IN_KEY',    'Yy/I|)TS|kPt&V%Vc>73M0)0#uW:yqgOf></B&kP@IP83Xy(+q=eV<oRwfKP (G,' );
define( 'NONCE_KEY',        '&IOWasMDU]zMoaM+1TKGkC+RTcRor7c$K-Cx*uVV9)0Hci,D5y %uWL}R~^j9fL#' );
define( 'AUTH_SALT',        '^589EaHH7pE=$[*uUlrsoGLtSfE;;g<k wDNqv .hqRO;YftB:?0BpyVriA^b?^(' );
define( 'SECURE_AUTH_SALT', '6?,8)_t+zaxhmu>^3zty:@C_|_X/oNQUJ&#Ie2]g*/Jt,H=^pL`;EX6hRes&xl3O' );
define( 'LOGGED_IN_SALT',   'dmSX4u/>@vy4%~$N+?>GDT!]9-RGl/MrGHv-kb/e;r`!jdK_?zAH_d{,?zIGF,6e' );
define( 'NONCE_SALT',       'R}b?H;@*[EJ,#JerBP^*@+mZSH,O6ZNRg~CXa/bVHO`h#=(<F`U<]!IAsZ5;#_,O' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
