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
define('DB_NAME', 'wordpress2');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress2');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'wordpress');

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
define('AUTH_KEY',         '{mXg]a^kHp(ZN.nG/VK|Hb8:flwJic-X[VcKT>%=v!soZ%`Q`?V-jz|x*O}aW|a5');
define('SECURE_AUTH_KEY',  ']7+E]~ZiK@aBYp|1RfAAe`a|^(|O{o+uy-el}-HWWp6mCTR2kwEa:ws-+ismI]cD');
define('LOGGED_IN_KEY',    '/|0B+t^3!%N]U,KvIuJiXwBI%_~4|vf4xZbcC`,cuM<0bg<Jq:q,Zd|lIB(jNBx-');
define('NONCE_KEY',        'xE!fAsF7N*a6D>9:?F}F9MLbQw|Wf-FoW|b7(l(s_k~@m{)B/j[2[hGl:KCr+40z');
define('AUTH_SALT',        '+15MTrX.+< b>AcgGBlm&]INU_mO+s9f|Lq$AbE2I,[QT4X<Z31H~d?j?Iu}|[`t');
define('SECURE_AUTH_SALT', 'Bx%!=EYq-%(R3:BWB-kq6U.54A:T$;C~*lgK9}FA$sW|9.:Am#y{_4)bn-5&^SP@');
define('LOGGED_IN_SALT',   '+Z^un.5`4J2YU-Alox[i:jC1QA9!f(1?g+ c;5G@S|exyCLlz`h*X3)X*J4zQ^Oz');
define('NONCE_SALT',       '&e3vcLJn1|8+tYwg35UTaP+%ksdD+8;hf-{zu]Hv=+V<g-R#c%#+0)+B-iGMi;=I');
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