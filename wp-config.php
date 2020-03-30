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
define('DB_NAME', 'diamond');

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
define('AUTH_KEY',         'LfI2Lya_9<-cPda%5hW4cn[nL.[dv:jSoR;Np~Y0C%[]Sce3]BVlEfZT:Ij<.n0;');
define('SECURE_AUTH_KEY',  'GT8t#)/+1puv:rM}~LtOYw,]k5H_4WEACVX2%cwWq6;vPsS!^(ls5uzcU$#HE]4W');
define('LOGGED_IN_KEY',    '}IvNb=Lyh`t[7lvDp=5[@=n&3/Nv>Q:%FZB8xYv?_ognAkDf ,EAsC+xt2-+*RJJ');
define('NONCE_KEY',        '7E]:>.X^eMDNLkI#P8i;nSR,CpKm25iks<R$&=MkDCFtILm]`s?Biq~<Fz;d1(#x');
define('AUTH_SALT',        'cK?Bz@CMp;v9=0,h6?W[NER49m`m~99ZkQ`_ toDt]a9g~?L*ZtN_6)DDcgS|pWh');
define('SECURE_AUTH_SALT', 'uN0n![Mu.iVdd;c]tgi*%Wn1+WL5]-MC3`6;,_L$?ok.*Zu2GiY1*&g90Fmw _Bd');
define('LOGGED_IN_SALT',   ',k.Fe8r;=M hoPe%=tBE,8u%U-%HTKaBn;SRDE8;6?l>}GGdAuxf#mrRiAuX^>J<');
define('NONCE_SALT',       'e%M5TTj*`==k|r?r)BLKz78VSwWM4.W4`V(h%.S.fiTt-PlDPCDh@?(WJdZ?roY)');
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