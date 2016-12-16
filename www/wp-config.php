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
define('DB_NAME', 'wp');

/** Имя пользователя MySQL */
define('DB_USER', 'wp');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'wp');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'gb&CZ]xweR|Q2%H6iKe%bCVQ,tM<ZL%P|C33 >&Wj[{1`%)nI$0?Uz_)Z])4&+J*');
define('SECURE_AUTH_KEY',  ']u5qN&HXbaraM_=!=eJMI?NY? ^.N7MX,o&UC3uF:DtQeZ>Gy)G2]=3n``rfhM%8');
define('LOGGED_IN_KEY',    'itoFyj^mRu7m~d1TAu ukKTf+0twKhyLir3)(a`n|5^ip3@..TRp^g_mM@%TSkmh');
define('NONCE_KEY',        'J{Ufk(W+4adVxAZ]li4/WD(.*x&^/I{5e#i@DP$WVBb|C^6o:-j:mv/[[Q$+)TnI');
define('AUTH_SALT',        'nUi14_ 3O^ou^]qdDf4WSRiWL>ym[M>3q^jzes~Q;w!Nb[E$iY[^RA)[X0=cc)X`');
define('SECURE_AUTH_SALT', 'FS/GmpG@k(D}QCKDe;Or@aCl-Er_tQ$fr5$IxK]/,mkj*TO dy,U[${S!<d-RH)N');
define('LOGGED_IN_SALT',   'UJ4Xu%lLh~@PQv}(hPu4PiPq l,Yn!oKS|QFTq@vsLI>k8E$3dH#( Ksu8xs|yCW');
define('NONCE_SALT',       '6WV>s7(N=zq+p.,;}x*JiaO0j#FUJmDvRrNQZitaQe8nQ>-4FD.%yOVD[QT9NC){');

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
