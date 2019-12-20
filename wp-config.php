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
define( 'DB_NAME', 'wp_dpp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'eL`{(6,$e>bH?gu+F <@ZJzST*kgWA4NMB-xQvU(N|IvG<K8ScV*nLh`J2!3i@m3' );
define( 'SECURE_AUTH_KEY',  'v2Pm~%7{2,ARumb=v44e>A$]18{vM$}A2548jsR^CFW,Nt?KTpe7n4)7Zm^[m@{)' );
define( 'LOGGED_IN_KEY',    'pnL:0p5Q(`F<kUCSxRUUf&2@+/8Z)v_aU)C2{e55+pcgui8{A_uv)Xr+!T-~+*a#' );
define( 'NONCE_KEY',        'r9(R0fLr7:Ki1]k}bFA<Y,BZ{b}6Jt~{:~jiF#@2b.;PF:gFrt(b0:[&9^qloaUI' );
define( 'AUTH_SALT',        'tl]x:A5`2|]}PLlX~/:#kNL1@PHx](/m[6u92Ce&U6{I:`5{UTe5SCs,6Hi+-O2a' );
define( 'SECURE_AUTH_SALT', 'kZ!]JvC^_2-(2=Oz{4@TD4Oc5+V@6IrgOZ,=4:**BO 1PF-~OOx]qvrd-jNtE!6n' );
define( 'LOGGED_IN_SALT',   'v&5iMX4i|U/ER~xjp2mP8bCA3Z7VT>+L]]u*a0E3$n=jw]{i,eDSc&@TqB+SMcdJ' );
define( 'NONCE_SALT',       ']&2|xkX=~)m*@f|iJ jqWQkM(ngjRQSoMRhOXkX/=03{LlaNM*,:9@vE&-%:NKHA' );

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
