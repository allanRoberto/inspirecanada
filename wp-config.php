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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'inspirecanada' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'fir!|izdGX^Pbd~xk6UzG*9Xy^?UzgKTq#]k@VqN^~{JnjeDPKA?3<N7^S.d-:cV' );
define( 'SECURE_AUTH_KEY',  'pI&NCvO>5}a~D68Au3%-}!L[HcuG.Fu{0PB8q&Sod{d*dm:HV_C CbzP:u{K924T' );
define( 'LOGGED_IN_KEY',    '~zaC@p.g<~DY)WLU]L+NZryq>S=w4ZN$Qb^z*AZqOHpodOT)?Q ~]P`p ;n+i%>c' );
define( 'NONCE_KEY',        'ehk%cPtc52o&(DV!8CK<#`~eeAm8^3#!$P6]7yP}qp%`.mu^&+BjDeQ,CQ2vsuKr' );
define( 'AUTH_SALT',        '$T=?}([@>>$a.t$}3ErS(:Z>Fe61z+^C:OM(MO7mCmJ7zvs;n~0~Ce3.iZ{{}FJf' );
define( 'SECURE_AUTH_SALT', 'xq.SmenAk^p1*t)UKf_?;jblCFLu5=.oFoOisU,au=CKv}S-@6ep*L5$=SBOF{P*' );
define( 'LOGGED_IN_SALT',   '>%+TF/4Hg;qJzUW~BSg_cm:vqkQ3i/yxabl7,`J}g,N}z_+O!dC3@#282OR)8*W)' );
define( 'NONCE_SALT',       '(Wfn^jqz1r[C%`yFdz[9W.Y>=em/*3oj.aA`hA2,0FJ7%wB$xt BY!BHy{7?@5A{' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
