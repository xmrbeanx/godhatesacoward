<?php
/**
 * A configuração de base do WordPress
 *
 * Este ficheiro define os seguintes parâmetros: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, e ABSPATH. Pode obter mais informação
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} no Codex. As definições de MySQL são-lhe fornecidas pelo seu serviço de alojamento.
 *
 * Este ficheiro contém as seguintes configurações:
 *
 * * Configurações de  MySQL
 * * Chaves secretas
 * * Prefixo das tabelas da base de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Definições de MySQL - obtenha estes dados do seu serviço de alojamento** //
/** O nome da base de dados do WordPress */
define( 'DB_NAME', 'godhatesacoward_db' );

/** O nome do utilizador de MySQL */
define( 'DB_USER', 'root' );

/** A password do utilizador de MySQL  */
define( 'DB_PASSWORD', '' );

/** O nome do serviddor de  MySQL  */
define( 'DB_HOST', 'localhost' );

/** O "Database Charset" a usar na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O "Database Collate type". Se tem dúvidas não mude. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação.
 *
 * Mude para frases únicas e diferentes!
 * Pode gerar frases automáticamente em {@link https://api.wordpress.org/secret-key/1.1/salt/ Serviço de chaves secretas de WordPress.org}
 * Pode mudar estes valores em qualquer altura para invalidar todos os cookies existentes o que terá como resultado obrigar todos os utilizadores a voltarem a fazer login
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'rSK<a#`R{+5oMMh]KZ>e!YyqZpJMx?zJej}say,0v#2*xgbi{7T?Kwq8XOxVMPv^' );
define( 'SECURE_AUTH_KEY',  'hBr9z}ZtCP Kg1fum9YC=mGwZoxO{RFOC1.Y eJlUWo)g:67H]S~4x7Nag#h$eMS' );
define( 'LOGGED_IN_KEY',    '+POT>d<6s],Dn,*PUA!}+bon&sC{f`I3mVO+w}B]Lqj78v=VW5{z*qCUOH1CyI 7' );
define( 'NONCE_KEY',        'x%dKjrB.Y}3?&xA~Jj@A-mU/%X/!i`&$oMr@>ka?M_0XrEFuTIZ%Wj~6qpHQ5&J_' );
define( 'AUTH_SALT',        'F:@d05Niy>Oz}?{Z5>3Y#q{Kj,A(~?OZ#1SU/;lszEotZ]*M`>~=p#n}O=j_SW= ' );
define( 'SECURE_AUTH_SALT', 'M|^Y0!D]`sVeGkTs Qn|N, D}UJ%;ZfSbY=-i8we=^yi,rb|bqBr4?l@H^u*Rk+d' );
define( 'LOGGED_IN_SALT',   'L#a,K&J0>AN?e&%>HJb8?pre}CBOPejwUjCuN=RixY>cIc)DY=._0>JQ}&m(i= =' );
define( 'NONCE_SALT',       'JKk3hL6R)T=f >:A^~vn{cX/aRSHL+t!O{R&FFo#Y[MH:!~ivD4 YDh+,>3d3f%g' );

/**#@-*/

/**
 * Prefixo das tabelas de WordPress.
 *
 * Pode suportar múltiplas instalações numa só base de dados, ao dar a cada
 * instalação um prefixo único. Só algarismos, letras e underscores, por favor!
 */
$table_prefix = 'wp_';

/**
 * Para developers: WordPress em modo debugging.
 *
 * Mude isto para true para mostrar avisos enquanto estiver a testar.
 * É vivamente recomendado aos autores de temas e plugins usarem WP_DEBUG
 * no seu ambiente de desenvolvimento.
 *
 * Para mais informações sobre outras constantes que pode usar para debugging,
 * visite o Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* E é tudo. Pare de editar! */

/** Caminho absoluto para a pasta do WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Define as variáveis do WordPress e ficheiros a incluir. */
require_once(ABSPATH . 'wp-settings.php');
