<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u211132314_XsvAs' );

/** Database username */
define( 'DB_USER', 'u211132314_aZb1Z' );

/** Database password */
define( 'DB_PASSWORD', 'k1jBknpfms' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'oxtq##~JxwF+5r{g*%~RW6oSP=]</n&YA5m7G5Dv+n|}E Ee?eKWU,Fo?Gn`Ci17' );
define( 'SECURE_AUTH_KEY',   'bn~t2&cnu@qFTxgDlBCdi?ELI,8/}tx1<J{[On0&LMe `*5*2a*%rmsr~ZS:MzG-' );
define( 'LOGGED_IN_KEY',     'SRw3E:H8l`.v3s]qL;3-1*C)xfkSOi{>bllErD /J-F[_E4(!0!dlC`u,bsC$~5B' );
define( 'NONCE_KEY',         'j|)DXF;v:j^*6zSuJgv9ajZZ<[~Dw9H:t{qZmr6|$m*D{bvR7<NRAj2jg{6v)ZN3' );
define( 'AUTH_SALT',         ':_a6}^;?Ubj ;50msjdZ^e4H)v4V/2W$ei27*kxFxEWs|+A}pdFl]NQ&E`4Ei.*a' );
define( 'SECURE_AUTH_SALT',  'R@-m077lu.5wZVm2/E tn(We<@3EqYc8S$G$yF|j{J;&^A$mu1]FY%DuAk(@oV=!' );
define( 'LOGGED_IN_SALT',    '_ l|C_ID7mii2z[ gz7)o&7G<!i9p^P3SoUO{s-{xm%2p?L>EJ+a1l^:5de?qFJ7' );
define( 'NONCE_SALT',        'Oy(CrtWI35n9`FPD5EQLu`@0QZtqys!k&jMXmv<Ud=x~[ QB#7]Zp+|w-0]+e CB' );
define( 'WP_CACHE_KEY_SALT', '8HqA4X6YmSTk+Lm0sUele=:D0|UZk,{WX@L{}3<5$)(3yq~$DE6*ax|HF8zLbb,J' );


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '287a346a44cac68616a3487f3a2e03bd' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
