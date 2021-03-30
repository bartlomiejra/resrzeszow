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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'restor' );

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
define( 'AUTH_KEY',         'A]i]-u^:_j|/ ~1oB3B^@I} %9ELi2p$m]vtAF?b(RV0X%PLtbzJv^>t4ZMI<Z|i' );
define( 'SECURE_AUTH_KEY',  '3w8xH1x:aN4hsKMi:]N%S&9i<O(#K.n,QtZ;g7Wq4wt5ZQ[Q.CZF|ORLz4BO L:|' );
define( 'LOGGED_IN_KEY',    'ePFxqT}:T)BQ R^c!gz(6@0NFPcw%e:Fy#CSx)`$Y`unlz9&$3]4YPp1+`!5X`fo' );
define( 'NONCE_KEY',        '4 {:DaF|mj([qPl|8VUz5Q[ltpIcK~Q}+27o?VwJn2T^VF]4I_4u/Wf/+! 3<.&Y' );
define( 'AUTH_SALT',        'GJD-wQTq%+/ZR0P1YQU9OTe;ca3ZO]ENHc=D#@hy:tLS|GX%ewT*-#G{7er;#e@X' );
define( 'SECURE_AUTH_SALT', '}(RPxqK/hVcL)6,)w8y75K8sa&|4XUtImXg-7LPtFhT-CBju^pM ASDV&EsyE7F|' );
define( 'LOGGED_IN_SALT',   '=71aaue_zQ4E*%vadM8x:S^#`+0e#D@qMttg^&>CjVe^aPIk-:J^]E^$7SIy{ah!' );
define( 'NONCE_SALT',       'XPg{Q/O<Nb4E@N 4(-I},Z{6<g<QOf>+Uv,l#g58B|PyI-1CwzjB@#Dz(@%XrvE2' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
