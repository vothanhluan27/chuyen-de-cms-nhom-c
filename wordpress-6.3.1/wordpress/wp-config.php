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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_v631' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'hvZleS_dd^;FU8kohp%W+eREbs^5N&oOh*7r}nP+=jeu^B7U~KfLLe2S++(&Zh*Y' );
define( 'SECURE_AUTH_KEY',  'x6U4lXbfTMT73SFu>yh&Ri`I0O]}et7fPUP;^an2pjVfHYg:l7/WRxI`5:Ez50X&' );
define( 'LOGGED_IN_KEY',    '$(RM;i( /#c5q^uq n~>M4Fci,;LGlHa3 6G*P6*HL3mR$Mm*/;?}5[/8RwFsm41' );
define( 'NONCE_KEY',        'SzuXzTz<nPb3B;eA.wbwie-*OTO6E=6~v#^Z6pr&;ZUlq{Y@@<VVu#xw}F.A#5vA' );
define( 'AUTH_SALT',        'q+0rBCmY(MIz4l]y.sHW7K*_hfqZ9XMVx,$y|.b?g3~zKln:=4zO%U)m!>vIe,z.' );
define( 'SECURE_AUTH_SALT', 'pe(wP;m!fAK,8zlOe{Y!l87<hm/(8]p=>h98Ks>9XsuAV+cn1pDq|5ib. V|vvT$' );
define( 'LOGGED_IN_SALT',   'wLxxC5;(}p9IOm^>m^:I6peXFrg M(45u;?.4`9KX$ZP9oYhE2~C/^{Od^D`s=Jy' );
define( 'NONCE_SALT',       '?Za@Yb1eR4I~lQ%b-1+wUZ6rM8%yAe0pys[8bR.bnp8xwoaS}4r`]6fK@VCRIT>2' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
