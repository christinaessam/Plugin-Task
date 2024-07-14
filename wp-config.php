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
define( 'AUTH_KEY',          '-HiNDCW([Vb-(_x=0_#rE<3$|D_7SU6jSMC{Pn4as^AE:dkLyX!f79#=L05AzNU+' );
define( 'SECURE_AUTH_KEY',   'l9xQU?}@7qlZL#WL3x<>OMf2+Q;mz4~SW.fG@,#@pck:5ft0)0=Et12~|d@9@,PF' );
define( 'LOGGED_IN_KEY',     '0j2TcI1!c#|,w-.Q_KqW@gai;=2aL!=FNR@x%5?4K~1qC6USvm{Ocmku&P?9dMB)' );
define( 'NONCE_KEY',         'g;W<=r(v%[piVJ|/{-/+JiIVqZ6 ALJ<E&o<,.-gU]QTpE:aP4ob[`![+Q*vFj<>' );
define( 'AUTH_SALT',         ':&+2{H!@7vRUErHUs=2E]y=t;C8[zH7,s5AMKssnoK~Mx4rk&srq`C;4F)GQpDzP' );
define( 'SECURE_AUTH_SALT',  'a3=tig{;.BWA.IZ;B]xbJ`[}K;27pqwKDC?=N]4|d^0wDr:JMxA&Y&$uz*c]@Wm2' );
define( 'LOGGED_IN_SALT',    '(3VaS34qXh05cjDnH0.Ap,3YgVJ|EW8~[rTj%.YHQ,tY01<ND,; 0}8rkhE)H*]B' );
define( 'NONCE_SALT',        '6qM^#3vK;]bcl~/c$k?ae{eRSm7akjwk+&BRc9&kM3/*pCeJ)ihwGj<sr@U=;&3)' );
define( 'WP_CACHE_KEY_SALT', 'l`?bKuD_Pb?Vi/3khXiI|InV_zSXR,%j:#&lfQ?fY^ylO)W@!h~DQ,alcO U{6RX' );


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
