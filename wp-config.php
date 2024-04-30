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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          '>;78*<(p2=^!=sSD7h4(n;n48+$DfBt5ky1^(XlA`D{-rS>1I%^[Grx~&!AvmcUC' );
define( 'SECURE_AUTH_KEY',   'DJU[&L{+Mdr?r97[PHaTg#q#>j23/-bHk)%M6L|ugXlI4 Lok3L$@;M]lpc8Ue7>' );
define( 'LOGGED_IN_KEY',     'Q@TB`!Rmx+RivDRXEeFBj1e%tBOUOH7>,)WMPCNZ:td`[R!adm?h[B!).o-Y~H%G' );
define( 'NONCE_KEY',         ';}SkyITfV#{G)`d^VmSrYpyT-mb<]zjwr{8=wn_d **VJd@UE54BZePWA^W<Sm7y' );
define( 'AUTH_SALT',         '@^aY=KwGmz{}uR1Q2-CB30~,<ekB7)_=lS0vE:EhooD]#O$Lo@,cCthHQC>,OGo1' );
define( 'SECURE_AUTH_SALT',  'jXp$yW^0VHWN2Jk54/i8%&yM6|jYTP?[Q%%ss(0XauiHl>%P/_&Up0`Q9uNhrJXG' );
define( 'LOGGED_IN_SALT',    'W^j5(JzD*/IrpM0H5cl{B>VAX-4{Yh)~s5ES~l*d:2pEm>a^/(5M[P/uOspMNZ$|' );
define( 'NONCE_SALT',        '*neZ|)Tl8(O2obnEfdC3SpeWlJ[f|PIQcs,,@TtHDgQQzHlcI)RtZ6d{bY xAh)9' );
define( 'WP_CACHE_KEY_SALT', 'Qz,4)V(kh}JqVv3!bRFQMF{,P2@}~>6^StuepirsdVS9ifhzZNr1qN= >l^)x$86' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
