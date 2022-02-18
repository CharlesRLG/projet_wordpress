<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress_projet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'Wordpress' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'xEuSYd3Y9L0A93nB' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ';>sJb0tC[F`1fXP{CiZQ$Us&$NF4c(2n.v7umN<BF8]BT~UR>HcvY~[fz2sQ+Ln_');
define( 'SECURE_AUTH_KEY',  'Qf!HT3]: AYivj Zsfu(?x+6{*B^D[VNu2G5%oc;0RjE!ip]GmQx}+QWS=%Am(W+');
define( 'LOGGED_IN_KEY',    '/cjEbRPYc0eH/%i_P-wqB2SpLg&8(?b -{j3q|bd5MY*<{c5cdF2|H+r+U|12SzD');
define( 'NONCE_KEY',        'qbsR#=G%@ZG.G^K_Ik](&tS<;l-Ub*eU77{.]b0ldqn34zCM{+bV cBFcRSO X{y');
define( 'AUTH_SALT',        '{Ry8qhy;$sWkDs+9 n`X+LEx&|&|Cv4?X]++n,[ePk2i-J~X6DmJv+1Fg-mSccA>');
define( 'SECURE_AUTH_SALT', 'UFC#G]Z*w-tQy=HL1(mi8f@[ZQw|]-c5UN*,]<|[]^6o]qRjBb^$%Qm6VuH`3tM-');
define( 'LOGGED_IN_SALT',   ';nACC[7v3y<5Ih(SK:<`(LH3-1tr^G?i/fMfiWBaIiQ U|I8KFPsYylv-rFju~?Q');
define( 'NONCE_SALT',       'sXX08pbKlwqY&n  P3==R^T+:L]%0uFP?+NdQRiD;dJ+:{qJ8*W/)=8]N6sb_#9%');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
