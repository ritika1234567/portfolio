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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '}jg#F%rcJO)C,^!aA}4wJ9&,`f V;F@@qAgqCJJEbaRvj.K^Zbb{;)=DGg+=DZ~*' );
define( 'SECURE_AUTH_KEY',  '+J[1:`=L=3 MrU2vpwiX[R3<y(lMI=i8v62Gj:N9X6]XgWFjw13j6&T(e.56Ik1$' );
define( 'LOGGED_IN_KEY',    'vUy|-v2`ToeRh2RXe(LgwHO%y7)Pe?e&k{dg_&h$Y|HZ1vSMn>Z*UXa:!U66pN$Z' );
define( 'NONCE_KEY',        'uK*jS;b63!7e=+WuAj+tbPo(Hc!#(Kq.?vh9$Swk!hTDAqn~H>;x^qJh` W<.[8A' );
define( 'AUTH_SALT',        '80:59ZapKa:/p_nC<AxjV}`QhZOt0/`*q5(&0.>|Ar@dNj>)FFPYnP}U+AhfBt6Q' );
define( 'SECURE_AUTH_SALT', '$gcF/-{lsbG`/f|-`c4j8e~Tytxp2^OPrE|ZD_{&r&Z<nL1cw`]]^&Jgf^=RmmxW' );
define( 'LOGGED_IN_SALT',   'C^gp&<=e3sMQZ(3758-[Hh4jhcX2R3^`0Fm+SN;Hkk%6!mPrc0u<#/x4Yr<VoKNJ' );
define( 'NONCE_SALT',       'bqO70MnfV(i12ozF3~cl5xDED(ygL2Dr8r&72~w+uYU*IwM%wR<vX`}F(M=;)*zx' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
