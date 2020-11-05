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
define( 'DB_NAME', 'buildboxplay' );

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
define( 'AUTH_KEY',         'w%05`~8z[jl;XHp?wMbl boTqRp@/S_bZ Vi|qDZgAOU ~j$|Rt:kJg7JGxc5%K0' );
define( 'SECURE_AUTH_KEY',  'vIld*zwi.;tJe5ut}`-o>.<7k5:){O96}>jMnyCH3L/!W5C:Of_h;2j4WIKM=$]6' );
define( 'LOGGED_IN_KEY',    'OMT)!&VrK+^UodKcx-#v4nmIW;un5gsUwLf?{}|ZU,1DOLI[7`TpYiZ/^<kA,,yY' );
define( 'NONCE_KEY',        '@,)E<_bY40}?/ %B9GJd;D+*hGg0-TOBb@(36=9pZQGI)pV1S<>W[}<`{|=o2&:X' );
define( 'AUTH_SALT',        'h-%=<~C?SPw$K76TZ]5]rGEV3Kw8$Ehu63WvUI9|9.|@raU u?HY? L)!3hRA5~~' );
define( 'SECURE_AUTH_SALT', 'Y4jRZhwgBA<W}~-0K^jxlZr5K[_hnTb<At{XMDV9aR(5ulcrI8w-STAZUjMveQ_m' );
define( 'LOGGED_IN_SALT',   'cdria)DJ Rqva`A(8Xp|wfMf^P_{ &:kyC!x#-<jD202ZNP4It5/=:JeU`Fr^vBG' );
define( 'NONCE_SALT',       'x #c.Vc-ox0ti/*DCrcNE&3esSQ5k3k<TL{o39]uSD;Xybo/s*Fy+t(xLzQ]bKwD' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
