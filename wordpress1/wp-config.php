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
define('DB_NAME', 'wordpress1');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'wordpress1');

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
define('AUTH_KEY',         '_|er2]}v=Y`lH^/&JoIh,1AEf`+oBb%l`~zV2*fm5^H<qjrOtzk~}FqZ:00tvz4(');
define('SECURE_AUTH_KEY',  'BVT[9jiHat;LQ:1)HWG?Jw)~y@oE(d|BuLB2TAYdB{k&C(73:,yQOQY8&B^#TZ)G');
define('LOGGED_IN_KEY',    ';LNCs5g]Q`U+%/X<Y#-=lt SI+zQSLKj;`&+o*p+lkuto%W`+0m}& HY1:D8sU)>');
define('NONCE_KEY',        '|ohm0e$*.NCkQe!~SB|?O{;o~j^:-).]1+G]1}rzsn[{7bb`n}ZVPI..%~GdWd T');
define('AUTH_SALT',        '=$$0NYufdq#_X( <078=cyli}g/IU+gjwyv[J-+.a+eWcWr#z*<wf%|m62(-{RNN');
define('SECURE_AUTH_SALT', 'XT/4Y>-uN:K:h R[=fG.=m2Wl^H}}( 8a&H^D{SuLC/AO!MYJ2h-C,M@I-6Y$!|l');
define('LOGGED_IN_SALT',   '.!+WqbGgvO.|$s:K!_lJe5Z-%WrStFA5g#sk#^/zFHq:L?iQ-Y!s<E96t?s9NHkF');
define('NONCE_SALT',       'CKi|DV02Q$X}Pb|,m!9is?|ADa^Q}@VHq;aM=t4-UY_Vp_l[?q8lcu4-C]-(-Ubz');
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