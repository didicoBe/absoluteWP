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
define( 'DB_NAME', 'absolutebike' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'absolutebike' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'BikeAbsolute1' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'absolutebike.mysql.dbaas.com.br' );

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
define( 'AUTH_KEY',         'RD YRzO?<b|9h] IZ_c(x-ESy;gx`%Qu2*J:He) Lgzy^F`cqa,bO>}[;<t@{Fl[' );
define( 'SECURE_AUTH_KEY',  'oZ~!2H%:hD6`=ZrJ3YWEJC(k$,Q4:,u?*CvOP(J&U92{4e9B,{Ml4y0q5~j=bKHm' );
define( 'LOGGED_IN_KEY',    '[)//]$xLVsT>,ki6<l0Wrtm:GU)-9N6lUxwiotSPrKY+,M28uE,C-1dN^=~{%eg|' );
define( 'NONCE_KEY',        'yUAveaEx&ZVJ[uCJ-wtP>bj7~b[eY=&744d:@v`/}$6[nPJf >/xD+2gPM!2vr}0' );
define( 'AUTH_SALT',        'l6)=J|~4eD4Z!WmQbZNV8tnnKna:X|v8slpTQ%_w04y.i>-ktG^3VA8@~yo+agXp' );
define( 'SECURE_AUTH_SALT', 'qG@I=&~eYf%0e0%kI~6^4i^,/a$+{!wG?Yn(m>$=(Vw/&=XAjV>v13z>H2;^RZu4' );
define( 'LOGGED_IN_SALT',   'KFtsI@%#-DO8,=4K&P0VMXw!3:~|TiCn@lwBZ&Lq@ozim(t_-P9s:E32UL@+1_^+' );
define( 'NONCE_SALT',       'uH!=t(YH;wQ&+%+YGqP5O_JF5[+s-Gg%P|&j<UYD,l!n0lQ@)+/o.:!T13en$KTf' );

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
