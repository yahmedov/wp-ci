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
define('DB_NAME', 'qualitya_wp825');

/** MySQL database username */
define('DB_USER', 'qualitya_wp825');

/** MySQL database password */
define('DB_PASSWORD', 'Sp-45n7RE)');

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
define('AUTH_KEY',         'qxvjmmqt9nyxuadpzpbgdrlmpfw1ukekas73xfmitcalf0u9j4jmqpafylmdtei6');
define('SECURE_AUTH_KEY',  '05vcdcdhtnyeuxiwwdzexepylbtbjscdhfx1lm24oljahci0t9bsjfbvglo7yhjj');
define('LOGGED_IN_KEY',    'oguygof405cgmvzxetbqkalynxdmwd3rldlbxdmeyf01vhvd31scsymbmbypd6nz');
define('NONCE_KEY',        'fxwe5l4x4hyw7gun2i4etaeo7wxoftey1k0n8ngvauypqmsgtth7f5gysg46pp0f');
define('AUTH_SALT',        'kgpwtwfkrwekscjb9szjgjd5zaqkwkpxg9rtcjfjbworqeyxt31xdxv8jfhqtqe4');
define('SECURE_AUTH_SALT', 'youfuyx9g4wrckeccihg1vpssvnrmpxdnewdbths5eqzwk9vdzn0khp0tm4vjggc');
define('LOGGED_IN_SALT',   'wcbyn8scnymaz5neaol82blvazaobhzcnzkobl8xtzuyghskzq5fghzy5yo2d2lx');
define('NONCE_SALT',       'sepjudngwm6gk1m7rhby5d5musns3kw70vfspdm3dddl84yflxiiy1pbs2gqvgme');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpmr_';

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
