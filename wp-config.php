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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'sellkon' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'XuYJU54xKna5,2smjfA^9Y@WBUeG6e r!_|M;(c$q5RyhX.MOp#2$va$WeE~(~5i' );
define( 'SECURE_AUTH_KEY',  'M CWd)Bu#I.d/o5e2s>sHfL7|5i?Z|:6 u((o{@:`=21Qvs0q?M8TlPn4C9?m >t' );
define( 'LOGGED_IN_KEY',    'P7a^I25ediGLz^ny#LsUp^5PKg?_.!%/*<FE%m=SCJcsx{}*`v4jS_s?JK8?dCiM' );
define( 'NONCE_KEY',        'Yq`W{wT`ptu!/,5)nxV&Pey:L7v[OrvyTOEpEFB2< D.iDExH&)od{.bcYxM>XV$' );
define( 'AUTH_SALT',        '`,`7@{K)q ndOZ=0WNhYB.P6%q!%CiJw/hv$iz.rXWYxU_Aklh_6Y;ij[DO2mZqp' );
define( 'SECURE_AUTH_SALT', '<aJG9z4ahu_ki>bk(ig)`rUj%.QpJ5CqwQDv)$ZEGS^sekZMEiFq@NuRDH(JRoC6' );
define( 'LOGGED_IN_SALT',   '@qRKW9D(9SaLp+4!~ry$DZ)];bEwz>aCgnE8iJ*),nG{XQxr[{*_,4F*dF:+Mmo~' );
define( 'NONCE_SALT',       '$C8{c@+1M<odNMN6N*&:[12F$!;V]EDJz{3w-9N3,YY^KYyd;ubqO`/cOHV,z_*}' );

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
