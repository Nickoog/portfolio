<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'portfolio');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'mysql');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '<!%r{G0a$-RL[uGJz$In|.8iM<ri@D&60kbAF.2c,5;Dem.8a<_;*/CFOUqgf(_7');
define('SECURE_AUTH_KEY',  '%wVW+:eE 0YaH1AuM5gD}WXj$5sRZmHu`W5vCV:OQbY#S_btNd||XQnMwK4*`b#|');
define('LOGGED_IN_KEY',    '[bt?6lp;gq-VC&e=>l].}L,d9?k@>NcRoGI7/LJ2(UJ74.0y_6|(`=WC+`l8&WqQ');
define('NONCE_KEY',        'j:x?jJJ7C{T`XW6b8h%E C~47yVGck+q(L=[_(NwRg|lr!L(DWuNc31-6Pj2P_;f');
define('AUTH_SALT',        '_zSo/abq(/mw{oR,79GJCv`fGUCs[H1c}+NkXQ&.~`K5S!N-M=m%:FDa?##h5:/U');
define('SECURE_AUTH_SALT', 's~1UJq(irjI:;<u;;1,>>S<{/2uc$pr:;/?,2oK0y34!!k=NHY6l3oI,ctrVkXsK');
define('LOGGED_IN_SALT',   'O5stzC3ZrivDPA0,x=vZ5X0NUQS^%wPNbUeiAizZ[e%y[0Hr^y0677@3t!t.aJ:m');
define('NONCE_SALT',       '/z_% b =u{rr6Hsk!?~ejP4P~R+P;-M[..V/scy-.~vjIi;_aP~x3a 7u/L1L8&c');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');