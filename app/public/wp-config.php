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
define( 'AUTH_KEY',          'DRH61lB(>XTPqbl8:_|vX9@%P23Afx(mo?GXH2HYehdZ3h`VAOErRRM)-A!kl;Bd' );
define( 'SECURE_AUTH_KEY',   '!DP*{Lug%X3LmPE]4tk!mVfR6/%D;vvd$;;mr4L*ak3PXO<DXPagDJSQ@lEtJT_0' );
define( 'LOGGED_IN_KEY',     '<|=*WJk_g~bB[!#F!sLIeSG1]Uz}?<&7;#u4t{4#6Ve)BJi,n(q}Gw;J^7c!!{X1' );
define( 'NONCE_KEY',         'jB#t!nP:r?1;Vl1W`Ank3_upZBbz:|y&)_cx5Qo[6P8it-ot)9SOXQ4R?EPm{4-*' );
define( 'AUTH_SALT',         'wwsI*(CC&2)Y=Ilb0TjylGmsL0f?>SGD$KjoBgHedc~2D3A8:yeR>=1~A[V6c_*/' );
define( 'SECURE_AUTH_SALT',  'Q&n`h]9jr9Fk.?!#4c7Y3TRe~{/>&pUpzpDb!E5V DgJUZtU]x@L=QV0;+7;MR9E' );
define( 'LOGGED_IN_SALT',    '|%Q2( :CB.WSA/g3flNA2m_3]SFOWeYB/nY[<v/yP.2#;RnPy+~i`;9gt>9;Fb9]' );
define( 'NONCE_SALT',        '^A5o26=A*+UK$9T~BLb1,DNq2KXu <:slH)Fj,&jO*k$lIH@f*tsAyXI<9NdONFp' );
define( 'WP_CACHE_KEY_SALT', 'EPv:;#qOh#>3Le+pH978&>.4Q&!gB8ngBiahOk8gk`>?dbI::[AN%(:<jB_KZ X$' );


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
