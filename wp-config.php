<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~9=/Wy.i]~/I>{G*b/J^pU{A{W7-3M,_A/# 97=[FUDjeIjgJPFw!lGxxF:,XiR)' );
define( 'SECURE_AUTH_KEY',  'U&tz4mK[6-XXG=B11|^AM$fR}8H}&S>g_T3#z5F.`N%l(bRNkYs%rILS< ]J7OA&' );
define( 'LOGGED_IN_KEY',    'G(tx*-4rj^>cip3rW/SP@+j3l:8vjO1U]4WP/liOYLMo[MItNZ[wK5]z<O;0=u:%' );
define( 'NONCE_KEY',        'kj8v|N&gNZ7F-9>LtCg-S.<RI<Df(!9)(d^<25Tq[^W%Z?-p?1|Bi!a[Yl#]n7(P' );
define( 'AUTH_SALT',        'ga*Oc:d2vv-%04vvca_g]wfG*L)tUq#J)a|M2&BrByx5B-bt}rFV;b46SvN5oRVZ' );
define( 'SECURE_AUTH_SALT', '2Z6CO #VN_oBh}NhXp@t,m,P=YgK3M~OqUZ4bNt+oRH9I^z7hOSn/[=Al}6M8,+.' );
define( 'LOGGED_IN_SALT',   '|}L0z@],y<3/,0E<VQJL@D`.>?0p9I>k3V$z}}_q+-Qem)YPFHF_!4y48<xSO##+' );
define( 'NONCE_SALT',       'o9DnkT53d}P_50A}X8{d~|odfBs/>J[ccB(reh|{nzYn>* 8,.Ql,6B2Qu;6I,UJ' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
