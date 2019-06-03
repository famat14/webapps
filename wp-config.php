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
define( 'DB_NAME', 'webarqub_wp_cleaning' );

/** MySQL database username */
define( 'DB_USER', 'webarqub_cleaning' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Lin%kJb0mP;{' );

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
define( 'AUTH_KEY',         'Tu.Nu5@Lg`!E9L6.mW(qC/tT1(|aX*`XmRp`f(N8j&ZD]LA*J(,~3`sCt=$hA|od' );
define( 'SECURE_AUTH_KEY',  'I<#yGL9GvUTom4Lj11~LxL.C4+^)c{E!KdDghd7NT^4.eq$t B]YEf5WjzjLC@~b' );
define( 'LOGGED_IN_KEY',    'U$/C(PAM0/xPmCCg@UL2cL,PTSuU2+.d;y]/SuK`,e0D( H%ZYl3DnT@vs9yi4r<' );
define( 'NONCE_KEY',        'xp^> lKlBk<h^NS|lK)P6&>K;odvP^kZOqo87pK)}FL Fpw?<;4Uy!ga]1}3B,*2' );
define( 'AUTH_SALT',        'IA[ *_^>>n6~IDOIVYC_9SClI9O^ fu[_PiaG2WLnxmYwstU|xkc[c87mFOWDj.:' );
define( 'SECURE_AUTH_SALT', 'lAA+SIT r#axiO_%B}.J*3=0:]!`h3jUnN7CTk2k$)N_X<~?2!V:J`eD@s`z+x& ' );
define( 'LOGGED_IN_SALT',   'bifJUr]Y22+T)9=SnFDR2X/H?J $;~0#?7}L9{~+ey>%27ap=|OlmM2_ S|/nw$:' );
define( 'NONCE_SALT',       ';c:F=^Cy=~y1}]exUPOJ^#SnX:`m3J QZ>#TuB+{<0LVG{<CzWQpFR4=9C[!/q80' );

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
