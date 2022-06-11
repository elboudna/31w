<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', '2022-31w' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ' jNhs2s}c[/kna)hPdjuzkdRuE9`H+Cnhkq>j*;P$bk+X.-=&~]=s:S!t;{`g1K(' );
define( 'SECURE_AUTH_KEY',  '(;Rh2^0ENs<]JO[g{[)6zF76#jbj:?&F@m&-H%Oj0}qTwEh)]54t^F)V}rK0xq%C' );
define( 'LOGGED_IN_KEY',    'w+B4zw$r<[Nu&}peM21be7ctLW`P]_[36!~KCsr%Hck,I ?R/oM{|BR/T_sO!2tN' );
define( 'NONCE_KEY',        '4:TkC_BIsfwA}]*QhAh_;W=pQZa4_832dhWALhuqQn=[{c1XrBWEpo .%T![StHz' );
define( 'AUTH_SALT',        'o!di7<~!&?E~ HT32^!M0EoHf/MlDM<[e`JGM<O@5-kV@Q>glT$nR.r4DH*aq?5`' );
define( 'SECURE_AUTH_SALT', '|S}uF*O&DZlm<&?PYQ.#n^7mH9xxrbi-Ec{@!gZ!@r*DW~ESQc#7SGDG|v}_:0e:' );
define( 'LOGGED_IN_SALT',   '`v:Od/vhtB&RiBakUNXbHQr0s1;},7f;OJ]:?8)aaQ!kK[P9zVIkQNL-h:=@3+m+' );
define( 'NONCE_SALT',       'Rc}Ed+eDM~0M$5IbLD0BBrUM/e0bI*[rjJMnn-:p{p:?%ePP?I=1<B%#8WvNu@)m' );
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
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );