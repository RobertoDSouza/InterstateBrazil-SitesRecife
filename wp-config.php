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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wrodpress' );

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
define( 'AUTH_KEY',         '27sFKJYXSe[(sf$6wg-Z6SBu{sa_6Anw4O^:%FMiZ:l*gx9y@:o~>l(vGZQ3sZd*' );
define( 'SECURE_AUTH_KEY',  'Sq@kll5G:/G@N7_qO5$Fglzg/kVV:^BjRe2F/wN# [ecd4fKSidt.w=(DS#h%T;F' );
define( 'LOGGED_IN_KEY',    ':G0rqN{Gcc;aBGWO/F!=E10yacHz;]R%X{vvlTX!FF9TBC]);!iv)L5255*Wf,<3' );
define( 'NONCE_KEY',        'ty2]!-VbBFC6q&CRKpjc]M@Kd/Qw*+]Nd!sZ&OCTxAEXFxJw` NWk-l~?l~]26We' );
define( 'AUTH_SALT',        '.IR~2M3?g{xE)MtkMN)>1/kan0_$,}qm>Rx-`hMZ^iU]v)RFk*`0(#=];n7<?V r' );
define( 'SECURE_AUTH_SALT', '5D|4y+~<;i7VOIWYSB{qNy&r@o4~AM0DovRaxfm~C4h]KJJ,N*$uli*`vU!Ct1a)' );
define( 'LOGGED_IN_SALT',   '`&vn)4&!?G64<Q(mFHOZbUVM((Ok7frK.WJf265gQ3YpLbKl696sTB#[m`^V4n;3' );
define( 'NONCE_SALT',       'q|d1y|;Sb`y-HFNi|#ZJ_F,Mfj5/o9uhz_g&hK:(hM?mO=BbG&*`ag1+1%/Q$L95' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
