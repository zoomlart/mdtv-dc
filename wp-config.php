<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'admin_dovang' );

/** Username của database */
define( 'DB_USER', 'admin_dovang' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', 'w34ClQnSBD' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{rZN|9<&ZkqH;<a*mrLZhOcmIDkk)gFh*,4=M4x(kSmY[Sz,^zGwWEmr~8_N6#en' );
define( 'SECURE_AUTH_KEY',  '+}+AxT@_,b^dk-Rv9.8p)g4}M7P@rNjIE8>Ef)kz{T|mkk`0rf<[E-70kcz*uH@u' );
define( 'LOGGED_IN_KEY',    'h5nG9l<@7Je:9*^-&2u.0JU-R-Rp<-U(=ov$KB|d-M8tO dx+G7q1D)0z1{G[W /' );
define( 'NONCE_KEY',        ')!:=U>3ZvW0Fgwup5xPl[MHYoF] 4jM$WqOD`imYu433osuan0v+gJ l8oPN9~Fu' );
define( 'AUTH_SALT',        '(eVoF2e{I#q3y{}=YjLxiG,mtqKa;n.{8OsLL{/gu/W6@YT^y={:rcD%Z8:c1K`t' );
define( 'SECURE_AUTH_SALT', '[@I=}Ky[#eoW*6;#!W>a{zii7_;?K-99OEse[<aSbJ6`1&s[@HhX&DX}Ljsea/j[' );
define( 'LOGGED_IN_SALT',   'rv:|6J);u.)ypVc!tsBbnS@ucEM}}bfH7Y+4X&cEo#i/Mc,#s%,9*l`SPh[[-<c9' );
define( 'NONCE_SALT',       'E+.%pOJp(]poz.PiV+,|@;xd^[G-xt)Of$5K?x3Xu??8dY:H|m|]% R0K@]HK!Ic' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'dv_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
