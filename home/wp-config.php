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
define( 'DB_NAME', 'home' );

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
define( 'AUTH_KEY',         'W+6m<jB)&)zuN5[zW7TPC)7e$CD*/X#V#L7,h_NAygWA j#eXB@-s54ImWfuQm^y' );
define( 'SECURE_AUTH_KEY',  'Yv>VJ]|Kr8tX~vkHa^[LO9<WO` -2F0uDM=n4~k6sl2K ;kf80#u!XCP#O~PuC^2' );
define( 'LOGGED_IN_KEY',    'd8D%=MCFPG2VSb$:[AwG9 UN3z4Wmgg@XN[dC2:M6/r^T>F|uP=HiuzUxH^Gw,TG' );
define( 'NONCE_KEY',        '#RV:ZM[v7QRC1@Y{m^3L/vt(JOLC<zj1m#-./S]UD;]N4T=$)F(wC}<UURd^(yL%' );
define( 'AUTH_SALT',        'IiXlrQTgm-;+{72r-Zq^GAb!;Mg`^XqH4%g+G|7J3h?>Tso(v2!((3>(Ch.dkRQk' );
define( 'SECURE_AUTH_SALT', 'qJ$|{+9!n3:zKTN..!5][srsw|,+F794*HemPrCcaPePF-S`I1R_IJ]Jbm>@0tAl' );
define( 'LOGGED_IN_SALT',   'Wm jE0ut?:r69J:I!e1Q4g%q8#A(uZkQHKX(67.X`r0<$c~(^qZ+cVAg3f$Hr<Oh' );
define( 'NONCE_SALT',       '$rzG5m (oB7=29JXHVFd!,|L<1T(?PCq2`|zzHT}@6w:Q-V%2`^E`0_ATNZ|vn %' );

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
