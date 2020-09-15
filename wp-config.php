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
define( 'DB_NAME', 'theroyalthai_db' );

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
define( 'AUTH_KEY',         '?~:1vjTqOq1f87[VZn.h-`HCb0Cf=NWJ,B~Je3X{(?5?R)N)jbH~sIc{|18yW#6_' );
define( 'SECURE_AUTH_KEY',  'Z]4z[QIIEQ &])cH8~U9/yAX0wtWr/ZhS1=L$`WL4>8G%jtOQB^%1+p)QvqcC$gD' );
define( 'LOGGED_IN_KEY',    ',[bjrw*T#eF,`Vp7cqYMd@k{z!wSVG<1TM_/W-daAZ1;Vnl|B_;-8@+>l;^fS,p_' );
define( 'NONCE_KEY',        '[IdMf+jbG]Ea(u<YN=`R4Z:C3nq)`rE]7/Z_@&adA)@+1=u(,rwF%DuleVb=Eo4C' );
define( 'AUTH_SALT',        'jQNqH_WgpI,C5S.@Fl[f-FdoPWBB<`xR|w^o#qjU{yp.<kf<:(|5;8SrZ)tx1nc&' );
define( 'SECURE_AUTH_SALT', 'Uk-3CX}Fi~/rxLi6g.=7QbsIH=}/0f7&h!!B:EFfyqdJMn,d=Ec?c (s9ODJga:v' );
define( 'LOGGED_IN_SALT',   'iV!#dj7; ~Y9c;Z7xW:F?Mvc2`zs?wWav,0Feuw~c:3^o>{,o_0z$K36-tu|XM2i' );
define( 'NONCE_SALT',       'QbQ|Tm_=kcP*v_mW-UsZqW/bM.IR-E2Q=Sbw/Vj|`5O[=,up4$cjm%^va0w%8fo`' );

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
