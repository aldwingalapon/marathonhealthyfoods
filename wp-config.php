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
define( 'DB_NAME', 'marathonhealthyfoodsdb' );

/** MySQL database username */
define( 'DB_USER', 'mhf_user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SV^fJ36ECgk*!$C@cs74' );

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
define( 'AUTH_KEY',         'V:7OvZAZHD2?[(=C-N=nTxmvlJ)`SFwn-A+/GFH~Z08vH/cpw1ApGxAS@sGf<>u*' );
define( 'SECURE_AUTH_KEY',  'UeIeMj&.O50FP6k4_Ynz*8GV)mR@:9|Ie(htQcAL2o0V_fK;TPNZWWtIPnnuQm1Q' );
define( 'LOGGED_IN_KEY',    '+bIXL>Gw3Xy>eJ72;wI13^#;eygF}PIX93TrdKLP.C%~FBp[K`s7E>=U-G<%a~8>' );
define( 'NONCE_KEY',        'JRG=Q1D,fay~G8q )/Ou}BqHt#4A1Qmx%#rzj~=:h04 j]AU77Vn$G&F(N*dm&m_' );
define( 'AUTH_SALT',        ',2n$?Yc0 KoZHSxEe1#HDGA0Ch$:ORzE`}K~2]7)xtFD#=6k=JiI}W,hrT[>RP2W' );
define( 'SECURE_AUTH_SALT', ':r@Giq7Z%4TaU9ma7v^u`aTBvsCJtN:ksu_970OLa9b[N{Ek`+$~`j^# t;,[RlX' );
define( 'LOGGED_IN_SALT',   'z/Q<lvbghgoDw1 ]@ID^ {_c)>,1H-.T_P]MnlQ5p=sbb3B`rey1I6weTo]JHq>9' );
define( 'NONCE_SALT',       '_AH<D;B_i|jJieWg[|x3=#575$|R*hk YaY)n$;ap?U`-umua/5~TaD%mHxd3q^^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mhf_';

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
