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
define( 'DB_NAME', 'portfolio-test' );

/** Database username */
define( 'DB_USER', 'jayne' );

/** Database password */
define( 'DB_PASSWORD', 'jayne=jumah' );

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
define( 'AUTH_KEY',         'pkzn^d6./7XOl[XI`lu)Mas2jn1$f5iUF%*.cWp6P[d(d{#mPuKLZdfT4fuyw<l=' );
define( 'SECURE_AUTH_KEY',  '{]p*d_-U$h@Q9i(XgPSF5GHU1-r?yf(-l=F?q*xzu>m-=|-hc&VR!N~{Half2_6,' );
define( 'LOGGED_IN_KEY',    'W&0,=Q8 Ntbi$cuWWh@`Q]=UN0TG6=h61W7.p@FA]6,Cz5y_?T1Y90,83Z.0g=0w' );
define( 'NONCE_KEY',        '&F+8o#|,aF*fV(j`v>sMtr$-D;pmat-@*8x~UCI< Ex^`Pb?0,E.*,]l5phn<6.5' );
define( 'AUTH_SALT',        '`o,GWZX<KN6=I4Oq5I0.?Of:L%W?RB8q7[ NPWY>Vq2#Ie-0HgGQkX-#r)0N[dfw' );
define( 'SECURE_AUTH_SALT', '3d+vkJ};K$S@qE/Vvg]0gM+rM@s&-zQ5q4*$%wy~AH3q1~MJD5g]=W6#U?9pMmI@' );
define( 'LOGGED_IN_SALT',   '.9MczuvO(&#r^VLTM7kUtPp,fuwA@U&hIcWUby}We3%2w0o<$n``(GHS8TCsk>`?' );
define( 'NONCE_SALT',       'V1auX,}3;_=1UZ=))D?C!?^{lI3TD1,2kw_nVuLc{g&88}xF!*d$Dn))1=Z9C%r-' );

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
