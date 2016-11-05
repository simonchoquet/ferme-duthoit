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
define('DB_NAME', 'ferme_duthoit_db');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ']{t%6mC^V*%4Rzc05nvL$cHDpS`@:y{TT#B^6LI9^rqZvV-1DR$`C2_PR|mL#]13');
define('SECURE_AUTH_KEY',  '^kKX|maEtx(O>1_Wtbir]p*%KkVOGJURo7+NukXbE;v,>f.M)6bh,#Rs#UL:[p,n');
define('LOGGED_IN_KEY',    'u:YPE{eV07hfN}8Ykb_!(2XkGo2ii[mscmm2RWU!*O$q?F>VGSN CavU&mgDN4<z');
define('NONCE_KEY',        '/g@#etMYaU&.i,EKd8.EHRC~JP<}J<f_DiGIQ}bDu77sbjkjVK=tG,udNPKus@+<');
define('AUTH_SALT',        'A@s+9;5&A/4P< 735s;x$Z%O6*Vuah&>8`mz2.=`L@>sTA)%?bPBxbt43?OmC:%L');
define('SECURE_AUTH_SALT', 'm@rg4EtjsQu|RM@W4F!ImuI=5lYba<%ZP}.`J4|8&(J!xwTj${CZISEfY{*l5G=z');
define('LOGGED_IN_SALT',   '5b3+5/IY`g?E(=zo153o0w.4!HS3}NO]j`kS*Q>]0&2r}az<2D8tDIK$t48}RMEb');
define('NONCE_SALT',       'hCQ] 0lho|6M3@iy8{o#TTx.Au8&k6S{+?NEM)=@E~0-x`._XB67|RH|+^;+BR56');
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
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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