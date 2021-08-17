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
define( 'DB_NAME', 'cardzz_db' );

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
define( 'AUTH_KEY',         'hswH=RepIE9?S_5M2$Y**Fr$WLOxS Qe{q^Rw6{G|#N+[6|n9Lme8uOv+p2FV:5o' );
define( 'SECURE_AUTH_KEY',  'bSK<7LHr[:z^S?J9]<x]vN<BVLIC(/!^.gKwN9UJDv1s3c8?27uD:Cz_,ZX~MsmA' );
define( 'LOGGED_IN_KEY',    'KrYXA8Vh<1SYhcl-oLOGRJ[Q==Boq}bW#%<T_qcx0m*{fG00 n9;M?!9)|=R8RhD' );
define( 'NONCE_KEY',        'zLr)N,lTc32z1Hvxex*PA*(b?=i;L!Ap1U;kQ;Qdu]ws%vh]1+2$t~s*[ }{=1uO' );
define( 'AUTH_SALT',        'drX$Eh/4OB_iI&7KD9Fuusc:?@w^{2,:15O)6[L?<m TF$8CTJ89o=cRIQuKrO`a' );
define( 'SECURE_AUTH_SALT', ')s!AE{q*-8WD4kN:Ag7%{k]UTctTiw%,FsNQ$Tq[#)`= P8r#f9K_:~JDG4iK?w+' );
define( 'LOGGED_IN_SALT',   ' [i+$t:$S8]3Sp_OgM^mUoO.4,wuxF8r(7TWpxNW1~#j`c&z58*no<8FUzxk].rS' );
define( 'NONCE_SALT',       'RO;ilTWB7]o0MfOa&^vV[Q P^}^wuh#iE-`Cn;]nV~GNW_!Gl&v@@_N)Qr)$l#@L' );

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
