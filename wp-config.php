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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         '}o%L#E3()H2vU7m_SsA[s$r4Tn~K&@{AU1mfyA[0Z@xY+Q)16#fD]kb@|^bEP0;i' );
define( 'SECURE_AUTH_KEY',  'Iz[ k`V=Q0PcUb!lKz2I4+DpRN/Pfb2s)nh~}.)~WRW47wn5dlyN!/L]CC/e;~fX' );
define( 'LOGGED_IN_KEY',    '776.TD>%+Kud?`[+T!A=$)6 6MAs?[*ged;%/6(_KFp0kx=%ldh;{Jxu)u|U[}X{' );
define( 'NONCE_KEY',        '!|+b]hG#Q1;>5|oI-*O_ZxRGH^+RGtWAY*zp[|XLNK>5F9XYN>@KBIoK((bN6aj_' );
define( 'AUTH_SALT',        '&U}Z3za[KEkihVM8X,,osj<*-4!g2(94KROP;PJkb{pHvC8v<%~}!Y1gUOGb<60K' );
define( 'SECURE_AUTH_SALT', 'PFdZ&iN(eV/@bWWv9RR*kk(O5?c{<;0}AJGXMS_WnAG9?99i[r7dV[x)WlK62;]U' );
define( 'LOGGED_IN_SALT',   'VZhyzQ4LU;cHS4zSQ:tY7]QHj/,2tIq6h;gDiBMI6^_mi%u4I|Ehw$x9fir}V@89' );
define( 'NONCE_SALT',       ']igb:Qt1)?eL:04hd-].#]B!;zU*^5GGw#1l-G=.arF#:l? #0svU~Hv/+z^zNb^' );

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
