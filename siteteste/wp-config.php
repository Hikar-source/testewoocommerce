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
define( 'DB_NAME', 'bdsiteteste' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ';)B~v 8V?ngG9%:|5y))Vk~NWy(N1}cc+ZwTSy9.?v/k@VU@j4T-(jKb2gfSss4]' );
define( 'SECURE_AUTH_KEY',  '<5Df}bVwi3S%{?mA^f<c.6(C-h@gS#;gE`P|Xc6CEA*Cp4|B%.L-k.dDJB$=vWtr' );
define( 'LOGGED_IN_KEY',    'U&;*gj4FagzY>cY(4+tX-pMWACh kJ>G&A*l!u:GQ@O1ugjuI.~.F:P9u9Fzf-tf' );
define( 'NONCE_KEY',        '3_@}Wh/JB?|1KWS.!ZF;vWNZJ|+#BRvbk@CG;i{8f/iPsAr-;M,i>},jeKqYXRM1' );
define( 'AUTH_SALT',        '=}*&[g{nM3WJM$7yjr[UfVOw;p-Q{;-]X>k;><C&i]SOPnh@2N;@j$CH^0qYv8o`' );
define( 'SECURE_AUTH_SALT', 'zs+:8iDwKT~nMX!WRHN-7_1RgofQlSWwX%Fd[wk?@3yi?RsYgS;~5FNd(grj>v2E' );
define( 'LOGGED_IN_SALT',   'o|V! l?$biV_K{>|(Q/-/^&ma|k:(h-K.*c};;:{Dfo4{%gG]Su$}Idp|qbCNl|N' );
define( 'NONCE_SALT',       'DFwh2dHibpJ>5:rx[B.WZspkZ$`$xAC>?$r%p?vskG9-I/-DuN5* nWvJ0~i~I%W' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
