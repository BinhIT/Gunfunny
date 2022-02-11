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
define( 'DB_NAME', 'db_gunfunny' );

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
define( 'AUTH_KEY',         'avn[d]l=^Ta.@Ww4,H2aG%]2_iqQDl].;t1zB_.3:!>/KO6#_#+Uz% # i6ZufQo' );
define( 'SECURE_AUTH_KEY',  '>-3T[j-Wrnb2n2[jc =X)-KWvQ*Iz~ gu)SesLYI<&=J.w/yk8uA;JSVriQCocym' );
define( 'LOGGED_IN_KEY',    '[8ACXgN[Qg_R}$~<OM83YIH1c6|$6Sl!uPB$23&ynC@+[`oax*M#1MF>{:x!}Mp[' );
define( 'NONCE_KEY',        '&Gja$iS<$.=!:&|ZigpRB9_ZHJKNAlM;t`A0w/<RCu0dqz5R]%ro%Ktl;I~*+FL{' );
define( 'AUTH_SALT',        '-h=$DV[hzv7;Y.ui(N!-14$yUz2Z9vFz+2@Q-v0BZ..ZrOz-6#bZ7?h!haLMqio^' );
define( 'SECURE_AUTH_SALT', 'gXNv;q0cS4;MPA ;9U+!-USn$v>sfqC+<!?$XKyZ_#7+5wUljGS]0DvB|97Xu`H3' );
define( 'LOGGED_IN_SALT',   'z[9O-|OA-jGVp[iM~{/98^}H6$%TUD#<hdb{v>?Qq->ocKGGQ<hj?n{8Fo8dw|Dt' );
define( 'NONCE_SALT',       'D<(Jlb74xn{;<4RH+=OF]N]h8qy_U}f;B]^-RYMoG8SzV3IWVLA{w`Gt,f8,q9t+' );

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
