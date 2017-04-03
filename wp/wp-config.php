<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define('DB_NAME', 'wp6h4h');

/** MySQL数据库用户名 */
define('DB_USER', 'wp6h4h');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'wp6h4h');

/** MySQL主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/
 * WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OL6zX4knoJ{o(5C7g62mz]MXO^W!L^3DrOlmG@BO3!S;_T5z6WOV{-/`XlaT5Ypy');
define('SECURE_AUTH_KEY',  'f{r1*`j_E$<[{2lG RkmubGk|R]VVFd/pK$),Z)5(|;iO_^D:<glGnQ6Ye|$==Mb');
define('LOGGED_IN_KEY',    'U~JtV5.#VH-ei%f(q$u}JmYYuu;O)&KViB=9]$z>QYoP9d7qu~^x+pQ.E?bUFu]Q');
define('NONCE_KEY',        'nP2N%y(eITP6Xlv8AR462Ou9#n=>c4N&$sB_x*)OI,fUIAZU,(#XeilTq=4+*{l5');
define('AUTH_SALT',        'ViQLgKi}%baIxa P9pt/M%.94H$xe,c >rynbG2^?3fjnrSO=?ger@zA{BvG%nu-');
define('SECURE_AUTH_SALT', '1Ka.rIB/$%HC*yQdJ*S7Q~sy>[(GX@.NDsAB2DjPH$I*+{BO<p8NgVU$CI>}kya*');
define('LOGGED_IN_SALT',   'jb&w<8=yZ_^khgLDDAtn%$}bl]]!dH.%]Jt{&4A|4ffo4xi_yhR.xu8]T4YqpT7X');
define('NONCE_SALT',       'TIV3^$VuV~k]o_Uj{sWc2,$O3gFIREYT2+ a4!j[Eu1%t$N?@}YsoFr)e&B3*rt6');

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'w6_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);

/**
 * zh_CN本地化设置：启用ICP备案号显示
 *
 * 可在设置→常规中修改。
 * 如需禁用，请移除或注释掉本行。
 */
define('WP_ZH_CN_ICP_NUM', true);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置WordPress变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
if(is_admin()) {
  add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
  define( 'FS_CHMOD_DIR', 0751 );
}