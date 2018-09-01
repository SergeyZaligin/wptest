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
define('DB_USER', 'cobweb');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY', 'WWZtzCSL6N,=lLS,*~J>oKa&vQ9E_P]+6PGi,1}`-d!Zmq*(L97[|3G1M]E}z!h?');
define('SECURE_AUTH_KEY', '#C]|/^!hcO%[ZVoYyyDl~4m/9%.h87K*({2h7z@-J67^q09r(J6+G %;fkR{$mVf');
define('LOGGED_IN_KEY', 'wd*l]_?B-2fs{8L[/|6aYlt0k|9F7|k+]6.S0}Q~mF86Bax2(u}5K9R7c |0lQwQ');
define('NONCE_KEY', '6Qpn~5Y0Vf)$)L>{mcCb7b3|D5BxQa8z;7v}eq-j8?d+XZe8Dp]&qmK%~e/U#Hwg');
define('AUTH_SALT', 'D.zy85Bre+%.ydR <[s,#&Nd3/qYKO.3D`7-x1Ocb*J1,iGrt&z=Gr$VHxK}p8V^');
define('SECURE_AUTH_SALT', 'uO]m[C@ 2Q0CUQy9WR<,j~q&u}YrIHvXqI_jB-UX])!@<Mwi&(y-Zt>2VJ/Y!nzq');
define('LOGGED_IN_SALT', '2lG!cXr=Lt8QSQJmFmHvS3(t26af8Xmo`Ph?o>#iA KAs`+Txj dv8_tzG64jTI|');
define('NONCE_SALT', ';)%k-F<57^ssH|-|@1T&IVh^5#8#iLxc tUu|y@iB+v*|l%`y|M[mW1b?K0+oA=v');

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
define('WP_DEBUG', true);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
