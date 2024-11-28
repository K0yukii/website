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
 * * Настройки базы данных
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
define( 'DB_NAME', 'new_wp' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'o&Q%<jXv93W<Z)s3+s(EQzrA[UeO1d)l!@I/TIUTq,##_C)E!+g(?Dv=5l70U78s' );
define( 'SECURE_AUTH_KEY',  'neS}lIutVx$tv/iv-B;Uky{of3Fvw-^IH2F_g08:!21H2A==xZ9~N`O5L#hK<|w`' );
define( 'LOGGED_IN_KEY',    '{9 =[8.<&uWL+7n|.CFQ-9SMpHT^%F)~tsZxOJ%&s rVYpV3[|7(KWL)kI-X?lC@' );
define( 'NONCE_KEY',        'uSHy3c:/i?GAbk[|}(`-(`>l!r5u3v^x)0y4!2yB$l|g]?b:EWpsE#%:U+JH0sq,' );
define( 'AUTH_SALT',        'UpQmQBHNS p=CzjqHPdFC{_060]<d]6}#E[hNMSsN=W!@~>QMNC Q,NzgVl9$:&[' );
define( 'SECURE_AUTH_SALT', 'hwzU;cUP]x5V,d0;jwoSmxUo|*RX1!j(V;YMyJI4p|w{5sBz69LT/].Y5$5Fxg(`' );
define( 'LOGGED_IN_SALT',   '(1,Fz1.gM?3eL6V3CV&p<AnmQYsc:X}/Q~dee ;Fh=`xYh{M@:qRPA#IZShbQYKM' );
define( 'NONCE_SALT',       'L9dn:TWiPF!l;CbAJ/hT?m47IPj{tFCtA-$Dqm2#xqV&yw:a;] x01#sKxy.jmJ!' );

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
