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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '>+,f:`]R=[ 9:j#C*f].N$K(={9$T1M5n6SMVf%ucvq~G8JxC=H|QH,+zUs1Uo[`' );
define( 'SECURE_AUTH_KEY',  'XAhl!Tp^IGRXq#]hNs6|s6aH,K&6&@u%-U/`I[/7P|C:HEjxobQ $SDG}7@y5g!4' );
define( 'LOGGED_IN_KEY',    '!nObv}E<1fc.@{b4FYXI)^M,s^=,&algT9P^70Of&+261Qw=~#%buZeG3`.+eWu&' );
define( 'NONCE_KEY',        'N/op;.!5sovEs8{x!*!GV/1_f7HOdE`kpfKLQ+72[ibgDIuJ2m7PUFKZmv4n)urE' );
define( 'AUTH_SALT',        'u<J)g]G*4cIrqoF@RWOZc$]H=;1^e7P!PZGozY3m{o,s3z8}9|Fdq@mcFI2qE&Xu' );
define( 'SECURE_AUTH_SALT', '_)<xZ_3oq1pt+d;[,N@}5~/^%V2bFLCk^:/eb~=#r_9)#?g)p!lB8;<:,]j1Vwaz' );
define( 'LOGGED_IN_SALT',   'fc2veSE%EQh),E`+HM7Zuz9e/pl{QFPZnNhbbZ< vzSGb[]$wg_N3be?/^A_p*RJ' );
define( 'NONCE_SALT',       'imJbK9^k4_`#1EPb.Q0#]oT.vr]D{[t#1kP4`3]10JGr8t)?>gX(P[DH`P)Us^vq' );

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
