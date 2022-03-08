<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'site-wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(_347b-}Xo2X$-IUqtfe~U5eZ4w?&U/S3Jk`5!oukbHy1nl-bchgN1d`<{,B/N<q' );
define( 'SECURE_AUTH_KEY',  'QEfNPkm%~M$xYBI}/1%~L5Zr!K~itIhB f`.w>D*I(v%LHO3E+an/qa0cSODFD -' );
define( 'LOGGED_IN_KEY',    '=amnR}g/*CnzQTAVn~Y%V*(JR.]G5H$AJ|gy>SV&! J3dnJG}=5Tcb6g;d`y;>r]' );
define( 'NONCE_KEY',        'Wc3 Qh#7F0LV1AQAF^gJs(C6_jr B^b<ku_}(IzYVa;NDISTHV/bxr]wIfQ?+<3O' );
define( 'AUTH_SALT',        '.Rw(ru-b&5x.d)2Z+Fkn$=[I,}N|fADU]XHGV9@!l`HWwq+Tz/D^CYE7K|JY5qy8' );
define( 'SECURE_AUTH_SALT', '*-QtFtjo(ht&#5J4#a1n+zz!ZwC S-EX!`)+%h`5*cxC$A9/BD`uT.gV&q<g}l0|' );
define( 'LOGGED_IN_SALT',   'f1:z}Ymw=VZ!d%l[> ?@e0D1)hGRtjH|$j3`KwMpPZ~8n]nJQ|0ZOGRTeXS6dye!' );
define( 'NONCE_SALT',       'Jng2MXmejs{drWYhaNSmYdi&XZBP&M!9GTeiA.#H;`M.n,R=NU:!:ig?]UR{0m]a' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
