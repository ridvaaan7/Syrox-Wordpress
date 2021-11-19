<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define( 'DB_NAME', 'Syrox' );

/** MySQL veritabanı kullanıcısı */
define( 'DB_USER', 'Syrox' );

/** MySQL veritabanı parolası */
define( 'DB_PASSWORD', '123123' );

/** MySQL sunucusu */
define( 'DB_HOST', 'localhost' );

/** Yaratılacak tablolar için veritabanı karakter seti. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'FoEz_$=`j-?Eu#g g~^iL$`<h#HJ,$[V=Xp5r6L=&2np!^,C+RsP#z{h3<lQIBv<' );
define( 'SECURE_AUTH_KEY',  'HtW}|! |{+OjWlugBQV?Q?jRJFO8Hnefu`*Tv[um;jqS8.r|r{)}<Hws8vUDG.B ' );
define( 'LOGGED_IN_KEY',    '@rbuCQenNS=HB-X:j2R2K$qR7vLk-rx+R5u_yO.m7Jt3YBI3b[%G4^k0Xjsi(P1k' );
define( 'NONCE_KEY',        '~Tz-A?swE`ILD>9X_2,{npsa+|g8Lnj-AdkWH>dY)FpO?L;gF.)J%ZSvTsycS.ml' );
define( 'AUTH_SALT',        'H~n:eHsB{c` zpVy{21SLR>0wemEM4OM%o>lwznjo~6N_UGovr|P.cJIVz3b`=`*' );
define( 'SECURE_AUTH_SALT', ':K./H5FW)4;Vj@HVi4W``eY;/0>ea_kF|84`IR 8$QQ#s%|SXmXqmlI3:U;!ZM$-' );
define( 'LOGGED_IN_SALT',   'dV]x-o%/pS;q/i7=<KgIljpBO(s3,$^5#WXD@=eBxz=WwjSY^aXtXHGDtQ~a2f[)' );
define( 'NONCE_SALT',       '&*N`yIVx5jzXz-c4T90d1YXTKuv)Jv0{GtJKx`%{[a<#W>Y;d[muk}sy/vsrG2(+' );
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
