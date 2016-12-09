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
define('DB_NAME', 'panda');

/** Имя пользователя MySQL */
define('DB_USER', 'panda');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'admin');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'h$D|Vlir`|Y^q)FOE(1C)&7@^]wf6Cs/&bb|jR,;;t@3?Z0]#aRlI|<gqO[o+J|{');
define('SECURE_AUTH_KEY',  '@ObcbF8~U2~s!,jzCXz7h!x IK 2ZtoFlCdpo9N$))upnneuH|g_hQfDhf~ld6dI');
define('LOGGED_IN_KEY',    'jNKU<:fT2-&wqn`ceETQP%aoN3`-b>-<hR$ &b!6<FwwoV4p{qw_)T6.p6We U(t');
define('NONCE_KEY',        'lJs@2Qw4@DR.O*+>Cc_S$Lj?:BK][0akFA2CFZ,=(->kPZYVR4orLEYH[y3H-k ~');
define('AUTH_SALT',        '/50|Z_+UTyh(&<z/>kNAw}oN|Kv*S#$|{sa*nk[9UCUMmg!T4PnHFKC6^PPY;hl&');
define('SECURE_AUTH_SALT', '[n^O>&9>1l8eHM?R/r:sCsSZc>O~H2ez_3XuA7f.l{;?!-Va52@r5lU]uddC}#cG');
define('LOGGED_IN_SALT',   'udh2F-d_s^T+nXy(,#],A{LL0|r`#^pJ&bYqSpD;)f2&XflxS@et#[o:8&)2;P;4');
define('NONCE_SALT',       '+p!8MY/P&&,`/,,_7sz#NV@<n|~i6KvV$k]N2t%fr.[hv!nKe_n$l|qx8OsUfn$x');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
