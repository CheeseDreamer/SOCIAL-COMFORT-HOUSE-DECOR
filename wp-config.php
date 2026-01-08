<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_shop' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         't#7yC.[z3AU(d{*]*smE=z^Dw;q(X$Lw= ;9lcU_6-k4t$Ji?&TH]0XvO^){2_F3' );
define( 'SECURE_AUTH_KEY',  'n<>d##@^rygSAo(w>i,< {U9H./PUzLmMu;QUVXfNS+(U0tRWLQpO$guX~B7!)e8' );
define( 'LOGGED_IN_KEY',    'smB:<^LPgw&&WDQFK>MU_SlsV0$H0<mj:l11L$v^ek2cv*_xO=w(;LV^ $i5PXNV' );
define( 'NONCE_KEY',        'N[PJc8/_Xo%7FAJ%>7c=g@UL+A&~@i,>1,yYsiRQJmn9|,AdUd>tt{?)b.GPw<B$' );
define( 'AUTH_SALT',        'RbL{]425x2CGt^)0U#!.PMdii+3]GdA55#Q2B|][rw]{t{.gSr|m w<,E#/dqxP4' );
define( 'SECURE_AUTH_SALT', 'we,HrKY.U7kNz ZIy1 IiNLJ6h(J+i_bUKH^4[n@hbWRUhlUj|;%I-_!!XL,;x;q' );
define( 'LOGGED_IN_SALT',   'qpnScx^R}zLcfYyOl0}n54Seq|bJiO1jUNn+o7SFTD*mb#8*+[zyosy(:KabCPHM' );
define( 'NONCE_SALT',       'bD(2yr?fVlan|X61j8LC$0{)=XoT#WJ&A]?6]~$`O&Hn3Ku~fdIQ}aA5+REuOJL1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
