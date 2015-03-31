<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'english');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'english');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'english33');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd1+HK-Jl`+,GzsQ(Z*6UCB2D^<e4UxZGG3nP)eW*v,Hlbj.]-n^ycXblI9pV!ceS');
define('SECURE_AUTH_KEY',  'f;:<X+,@34Gz2Cq9n|m{tfW}OE*G<Ce>;+jB`ycg~Rx6kcZ2(7#_12j{,C6nH|?J');
define('LOGGED_IN_KEY',    '/DYW-9_1e2lbOG(wXVN>x^nhpL#hZy9=qjJJd8,g(,|n.yXWdm//$@PM@xIwwJ1^');
define('NONCE_KEY',        't|*!.6q5 F+@*)01)v$x`a/C?i7>/_dx`qu<.c.-!r>),f`z[#JNt~#`l%JvX~W:');
define('AUTH_SALT',        '2Lr%rR~qZ|;$8;8*z=yk<+4MGmPe!|`3Z,Y}BNz*po@dGblQpkh1RX|A(xilI0d-');
define('SECURE_AUTH_SALT', '5]PEa!Wv$5dK|~g0YRUY9wM6M-p4-;sb5A,V(!A|q/:!L}8:AYwL-]HAE@l#*$M:');
define('LOGGED_IN_SALT',   'VkWj)1F&bWz7<H1BT1f^u:1}%`2A|+6zjwx+et+#f#R-:SNP^+7w1:vZ3T1ot]@^');
define('NONCE_SALT',       '>?l+WkUl;QInAl+z6-yS,vA~U=*+~1NJGR@ma-(wR{/r]+WJc%lrArV 5*t,^*ma');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 
/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
