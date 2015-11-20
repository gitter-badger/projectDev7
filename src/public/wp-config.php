<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '0000');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '*K]iEx0_6T4%AGE-9=SxO?Q2,|iDY3LLC:1mx-/BtL4hfO`WBiDm|F>p]vA}H,, ');
define('SECURE_AUTH_KEY',  '0a88y{x:+FLlbJ37Y{-OjljT(zxLT]:G3O8bk15XuB?,-l-N3|j9c=c?Y ~C]E#0');
define('LOGGED_IN_KEY',    'yfn?+w)/+Y5%Ls@^cK)UYI(yarg6sc*F4oQ5O6d5Kj}/sC[+73uI4o#=|~0!Enje');
define('NONCE_KEY',        'B0gCPv(q1U$0UM=o7+{8<+xVdBi[I-vMAF+iu!F:=wG{3r,LhhD.t|srrT]e.FJZ');
define('AUTH_SALT',        'kqU]LheQ+[N~;fYIZ[H*fBK+@?I#)O@Kj09Z>mE4_C)W}*.FXTrq!xJ/_Q *$s6F');
define('SECURE_AUTH_SALT', 'TBBi%DWb:8R9I<K02i`8>P,N<3(Fm61h]zF/9[CpX+B4Q8/H9?F~5CYYu30L0WDg');
define('LOGGED_IN_SALT',   'M8v[vh!3CL{CxH^-U?1&VsxoYCA+x@$Fq_@|eJ^91C|GrR2FFpfa$Pe5X]#ENvV$');
define('NONCE_SALT',       '[Y<+MBNVvJLjb^A;ykeN(NcVf.*P{38ydV!*=qYp!xYoL|UG=esnZ3$Ku3NPxKG.');
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
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
