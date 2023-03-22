<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '' );


/** Имя пользователя MySQL */
define( 'DB_USER', '' );


/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );


/** Имя сервера MySQL */
define( 'DB_HOST', '' );


/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );


/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?4s720y^I1)<T<56<:zEp5AI&BMltj Pk@mZ&u]!w!#;I~x@21]|_v,Soc!ETW<>' );

define( 'SECURE_AUTH_KEY',  '8Kq_3mb??b8-Rp(Q?l$DUR(!b;bNSdfolSA`:S_Fq7#:=iWlIOa$q{5AIZGSAG8d' );

define( 'LOGGED_IN_KEY',    'AT3mxz/dMd1WJf@;7/YV:#w2><q5j21w%yS:CMu*WO?3p}o5$,u_lk&W8LBP.$hn' );

define( 'NONCE_KEY',        ']G2NAD34fBJpjaO,$QW+f:udEK[-63?<`p4](6c&VF4($=G$NFxQQ5%dC~f({X*2' );

define( 'AUTH_SALT',        '|6c+X[,Z^_o1@R0juU( 2:&Ku@>{jhS]{?X-ejx&CdIhehUD{[,?ZEQ_,$?14kdQ' );

define( 'SECURE_AUTH_SALT', '[{ qM_%dY=;&Cf,W5rwxmJh6!RO/Q!$)A7o:.p.EJWADEuOH#PRutmSiw,R *${M' );

define( 'LOGGED_IN_SALT',   'yigPYSVeH-#J)Si8+xe{x5m!_ <zO)n2;dNm)h$@%(9)~7`yFH=_KQEG7JEK;j(C' );

define( 'NONCE_SALT',       'nsC(D@oVzo74j,z22[wtziRi0n;XhD/3GYcy%e7{lNKVJ/]:AYB^;#OGb;mMrBw,' );


/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';


/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
