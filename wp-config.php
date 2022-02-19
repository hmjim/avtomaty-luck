<?php
define("WP_CACHE", false);
define("PROTOCOL", isset($_SERVER['HTTP_X_FORWARDED_PROTO']) ? $_SERVER['HTTP_X_FORWARDED_PROTO'] : ((isset( $_SERVER["HTTPS"] ) && strtolower( $_SERVER["HTTPS"] ) == "on" ) ? 'https' : 'http')); 
define('FORCE_SSL_ADMIN', true); 
if ( isset($_SERVER['HTTP_X_ARR_SSL']) ) {
        $_SERVER['HTTPS']='on';
		
}

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
define('DB_NAME', 'mysqldatabase5934');

/** Имя пользователя MySQL */
define('DB_USER', 'mysqldbuser@avtomatyluck-mysqldbserver');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '23134Kirova123!');

/** Имя сервера MySQL */
define('DB_HOST', 'avtomatyluck-mysqldbserver.mysql.database.azure.com');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ',A1aq~WD`#qbYQ{t[2bbY}4o@9rx}`9;a;!8)P a#cVhJ8H:nv^8D8&;Mh9G}RU.');
define('SECURE_AUTH_KEY',  '{GMJy)LWmwI,}yg^hhw!y:d]|iu?aZ|7.cR8aXKb3iZ&(j=-2kS<|Ij?5N^-61bC');
define('LOGGED_IN_KEY',    'mts79>iU$`gCZIrKa&//i5?81=%=uZgd:B1X*p/1W6Fv}v2~Q6UxBe_$HV%;09|#');
define('NONCE_KEY',        '?v1ejI:u4-V49Zt0reABA>R8)pHxgiP*ays_o$>0}o MH}Y[+tXePaN[|q#U-MHv');
define('AUTH_SALT',        '&^H~2=D(NK=x<|zcshm=&f+`:r/D(qeJAyp+kA~e^C~zOLz1p*$8~(m@#PPZ;5+E');
define('SECURE_AUTH_SALT', ':f@H0<3T::]S2-*~NHj~O{d:-*jE@487,FYvoW<8J+8LpIdqlkqqb7==LCy^}b:i');
define('LOGGED_IN_SALT',   '-tO565ypA;_osw{0yPMYM1~>r.e:vU.pDBy5k @}i9{#U<Y#9-L,kY&Rl:7tM[y0');
define('NONCE_SALT',       ' GgBqhN{IsfHl61la}^HI(OQg$AIB}s8GyAT!XtIXeL*oFxsCPg =yFy0nrGUtYx');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ks_';

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
define('WP_DEBUG', false);
define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
