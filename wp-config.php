<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'pp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_j8GpJn@$ k%i@#^;Qv56sY^?)I={0Ok^=_;b#Nr-W^JmOJ0Ka?Jd2uKMb@}5,]_' );
define( 'SECURE_AUTH_KEY',  'XzC9Jzz.^y7#}FPn^@YOwEyC5h] LbexP[-Py:?};H4>3/A{VA6ruZ3#Kn &j!qe' );
define( 'LOGGED_IN_KEY',    'UP<g}tm@jlMEMw}GDrbv)*<vO$(t4k)q*SR(fqbeIMr `$e{PM6ZZ,0PI=H+ `fp' );
define( 'NONCE_KEY',        'Ir&6Tg~0F*K=&Q$NSD~x{8dl$8#Y8`-*}bsX+wrFztM(4|Fg[v;dN1DD7z,!Y|[*' );
define( 'AUTH_SALT',        ']IY(lO.gB$;S+=-f&3c=KS4(h4[`~QeX6oEye. +PCr2f8vAqy??l*kIX.2DE{w.' );
define( 'SECURE_AUTH_SALT', 'Mgck}DwB4ImC!VH[w4C-<:yJMpwwozp[GO`K(fbH}D$aGa5#d3EClW0sz3r_cS<G' );
define( 'LOGGED_IN_SALT',   '<gs6K;]b5AF6btK?[E=f4sw|pZr@gi7s>s-gz*17xw$N}Z~Xkv+/|fW|Ll?Vg56s' );
define( 'NONCE_SALT',       '%#toWukSa5SnF7,S=,P[hJLT6Q!TBy8a^>EJ`*em]5_26g2mz=6hnB&qw0M~!AX/' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'pp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
