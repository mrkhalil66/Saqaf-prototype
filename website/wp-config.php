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
define('DB_NAME', 'theaweb_saira');

/** MySQL database username */
define('DB_USER', 'theaweb_saira');

/** MySQL database password */
define('DB_PASSWORD', 'theaweb');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gbumny4cln2thk9wznkqljv89nles2oqh7z4nacewle79u28440lr55npxntrfvs');
define('SECURE_AUTH_KEY',  '1untwqexzpyrwuhwqxilerulbyg8hqjdrejzwdkuysiuqgjsismconrgrplr3euh');
define('LOGGED_IN_KEY',    'zjysddr4simsy6uijhg6peaiuipm9srxp54opvxxccakha4vg3a8p26tnsyzwodv');
define('NONCE_KEY',        'wayjgakb5ntc8dcga80wrodis5tpmqk3eaunrnltezgqnrd8ifochk8aigjupsgn');
define('AUTH_SALT',        'lniksxparimg7dkplvh7d86jpajko8gfariapekbajeel3nk7a8bzx1gzcim43zc');
define('SECURE_AUTH_SALT', 'xog7kkqvuqid1kyh8z2xffrfqealpx0lgazbqferlfx5npjlilhpqydkf6uer5rv');
define('LOGGED_IN_SALT',   '1vxuiud5scwleyimnqsf93wiwgolquyr5rc5pvc7qgkisme8ns7qhxodznwjsynw');
define('NONCE_SALT',       'xdrunyoqi2b3l66vr7mqcedokpsxg0jfrydwrg2lxvacf0gvwnlrskixenmpddzr');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpzv_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
