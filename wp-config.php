<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wordpress');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'root');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'y~h::G<-Gopk1~uVDr%~Mu2APD2&u@6emL=nwY:csDR58VWa*9^E]s->zF~SYa0?');
define('SECURE_AUTH_KEY',  '!ilxbDU`nY%om@#~@,&:e;ZR1o<!-o7:6tkC}z$1IGy927R`NI$L*Odu<3fn5.c%');
define('LOGGED_IN_KEY',    ';sQL8*zBv5c$QhOsQ]xBv<o>aI{X<9;[{r1kOBqXhSl4?$z5!fpO])gfV9 mP#n|');
define('NONCE_KEY',        'K$[Lw1[?BZ9+dBb?Q-V6iX>1<3}3a!u`Q16jXb[^-u;gq5YZ<5q#u|)kK$u2^ct#');
define('AUTH_SALT',        'HOL Dc&@#rnZC6`|S;&!WGcu$~(QA0$C/>SMRX_S%Nkulu(qVrR+TdigUOa2O|-4');
define('SECURE_AUTH_SALT', '!PB=@1b14%k{8VOi:Nti.a=;vvy#2A=0y! / n:AE!^?pH}`hSD7AIv,f_6f&/6R');
define('LOGGED_IN_SALT',   '%Ve5%G`~$J@%nbYj`0&,*nneb&v$6k42:0s$gJW*xQjcFpnUxyM.M;8)*@=Q@ef&');
define('NONCE_SALT',       'f@5Od==Dsf2(QqB)(<1U+txF#Q>BGp+#%@s`%:PFE_dES2VPJ(HTK4 aM]mKa{E`');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
