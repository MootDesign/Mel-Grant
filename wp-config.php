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
define('DB_NAME', 'melgrant');

/** MySQL database username */
define('DB_USER', 'melgrant');

/** MySQL database password */
define('DB_PASSWORD', 'GN6AcJUM956quMGK');

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
define('AUTH_KEY',         '_u*a4A4NfysK!jx/?bi4QfDLkA4Io@g)Qg1qELbB_7z8BS5nec.Z:2}4sCIk1Fqu');
define('SECURE_AUTH_KEY',  'IV>xV6:ODj{>!L1Bm m%s)_a~>bP<^Q!N;X+5!lp%Q%S,*8m0_v4>Lwd4udAk/$>');
define('LOGGED_IN_KEY',    '$Sh1d2~Wac9h7i[=rPhR>=DnM.T>N[chg6=+::?!%(i`W/|t%#|2si09I`p<MmRF');
define('NONCE_KEY',        'U+!bl~k_g^v$3E+;lTZUD!n&V74N|4o#3In<yEmQ8Q~<eIqRO@KSUlios2sM]yXD');
define('AUTH_SALT',        'itQU9@KsK.2LzY}?Q4j7=ia&SFXN8Rg{.u)J.c)Ih|=t$l@ncqrqdPN&~y=_>3j5');
define('SECURE_AUTH_SALT', '_EBe1Z:}Mq6oY%a,9=Yms*HO4ywmQ2cVgd^LIv5Y@X{te]p0K]JO]l~[z;bkE+.:');
define('LOGGED_IN_SALT',   '1 MuS=Mo>]2u`LB:Yn]:`lojNTr~emaN;JO?HA~v{J{P;ZBOXoQDKOwZLG)K%?/>');
define('NONCE_SALT',       '[ss{~jeI!,P0IjmsBqxbwr$o-$?H/h<E5rR|u.cfO&^L=*zP[8zvSo;xmA{v^GAL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
