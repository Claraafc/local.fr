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
define( 'DB_NAME', 'local' );

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
define( 'AUTH_KEY',         '~|]@=l&HOgV6ut9!u7= -W|+:O+8fEls5=^&f$XC[D4IEcJ~_qCmum.rfMn~_;Qw' );
define( 'SECURE_AUTH_KEY',  '%Nk,s!s,drI`beurXS*(eTQ[iX+jdHxYnQ:qV]Ru i4rfRoYnk&xP`Ir%yNsNoUJ' );
define( 'LOGGED_IN_KEY',    '|3C2wS}O%=B]gJoZJg)#nt}Ub6tsaJ$j]_`5_dVWX~V+#5i/sBG^Km#Z1lfm2&+%' );
define( 'NONCE_KEY',        'F/_EW412]wMS8Rt4WaH&!;ky8jOg,[m+3Big65|HfrkUyu!2Oka6&<zF-:dUOk$+' );
define( 'AUTH_SALT',        'p$PP9iqZH-u:3kr<1zwHzS#a-^iP>Q|CF.J_p<r{6dM_j->dzY rc#2=BWeTW[UJ' );
define( 'SECURE_AUTH_SALT', 'Ef`R#ybYh^ev{*V$9zZRezT+S!/@eC$N*Z3!-?l%)RB*zHQHe7zrcn}oNF(1iSA=' );
define( 'LOGGED_IN_SALT',   'O-I`I |P4#,bmc*#Oj3`ZvN&H!B3#wQL;Q/U~YJ@UR8frb?SF]{f$GZJv-!ho}m@' );
define( 'NONCE_SALT',       '9Z.YxHvc)MU&h>lUsznQ*iMdL:<}, 9+iFZ[kNchdSgde([)VcV.&0 *Ebp}dFNm' );
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
