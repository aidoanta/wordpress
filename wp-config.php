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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dschool_wp2' );

/** MySQL database username */
define( 'DB_USER', 'dschool_wp2' );

/** MySQL database password */
define( 'DB_PASSWORD', '1L3as0UMBKa0' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'lSr^s(ImKsV fG4JLt:e`Xm,4QT})_(f`-;.OlL(?6+&H/O;u0Kj8HfWt?Z3Md3P' );
define( 'SECURE_AUTH_KEY',   'o27M;ua4{knPF)f+zxB 1];PI=O2a(/@5@1DN7Ui!dn|Um=Sr,MlMpMgf[ZF[x$J' );
define( 'LOGGED_IN_KEY',     'dDQxj-R[^=yos^~oKmp Ke.8=d}p:b;o;}3d?m01&X=4FHFW7>^[4**P50?eyOU,' );
define( 'NONCE_KEY',         '+?y>fNkA$b>-$]SB|QVwHV}0P%c|OY!<zyxUz?d5{KAZ=;T{>%uHM]NpN]`wRY<!' );
define( 'AUTH_SALT',         'PU91J8IdDFdHh.<2mv?ey^&`BUW5l=$n41&gqwNN?WL?Y2}w*L-Az.yd#psx(0?H' );
define( 'SECURE_AUTH_SALT',  'LuJ,xpj:lgMe&6%n ,Y!2p8H*@?g(RM9Kk :W4Kz[gliJ945]M-,}|LGm>yA3Ho/' );
define( 'LOGGED_IN_SALT',    'O~_H|Rk1Ge=oA8Pp7Tv(NnI!R,jvQ,.)]1(*n-E%Jl(p-g-(jSsif#]Q-#2I9xSA' );
define( 'NONCE_SALT',        'rdnm<X:p-Vb@3KlM0E+_Bm=Ue#R3]uKV(}D4%m(FZ24HRLhoC>)g+E4egoB`)kx1' );
define( 'WP_CACHE_KEY_SALT', ')oCI.A6e2PVA__^8s78|H%!+W!Imij<f6GXLoQ;b:l(vq:atf?2,G l2Ci ]G;!K' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
