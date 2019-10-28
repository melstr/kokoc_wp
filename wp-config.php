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
define( 'DB_NAME', 'wp' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wp' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'lYr^cP,y|k$Rbd>7 #b;ts$q%K_7AJ LxQx|AP1!6DOsF8Hdk~{Mf2fxDo?!?3.4' );
define( 'SECURE_AUTH_KEY',  '=Xw:_iV&L1L`$W~aH$lqKnhidQrn_Il7 <trv+KAC+_FZ y6,[qZYstR#LIO0ZC}' );
define( 'LOGGED_IN_KEY',    'H5szk+l7E-^hgr(l`dc~itygLRY)OVbz8MU1c0+ey>05)_,GHIUpd6BTFr&L[CkD' );
define( 'NONCE_KEY',        'v-,@,3!C,z.=*azr|d90e uY#jVSx>:;z_WH,v&;/M:sCM?w/$-H!$@xKK(l9;(~' );
define( 'AUTH_SALT',        '9Db>d,QH/tL#CEQ8=`K.5X=O,!n==~;]ot<3gmPwumbrjFNJR~ _6jpa#[0}Y}gK' );
define( 'SECURE_AUTH_SALT', '^~)lCt*K={%FvW;svg5kd7&I2UvBK[BtjLVPk][M|NVC1*i&Z?Db ;r%Fwe(BFv%' );
define( 'LOGGED_IN_SALT',   'NeQi<bi/Euid{AvB^3_sSjh6;R9l6ir;~S?:bvDLlY^cD1dgZYbmf:!f,=JR~.l8' );
define( 'NONCE_SALT',       'mJzC;FG*o HP7:%kY|c!G2sT>b@$STRICG=LMy/9wt-s`K: G)187`:UfWl<+<(h' );

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
