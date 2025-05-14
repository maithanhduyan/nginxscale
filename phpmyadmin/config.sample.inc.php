<?php
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 */

declare(strict_types=1);

/**
 * This is needed for cookie based authentication to encrypt the cookie.
 * Needs to be a 32-bytes long string of random bytes. See FAQ 2.10.
 */
$cfg['blowfish_secret'] = ''; /* YOU MUST FILL IN THIS FOR COOKIE AUTH! */

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'mysql'; // Địa chỉ máy chủ MySQL
$cfg['Servers'][$i]['port'] = '3306'; // Cổng MySQL
$cfg['Servers'][$i]['compress'] = false;
$cfg['Servers'][$i]['AllowNoPassword'] = false;

// Các tham số bổ sung để hỗ trợ public key retrieval và tắt SSL
$cfg['Servers'][$i]['AllowPublicKeyRetrieval'] = true;  // Cho phép lấy public key
$cfg['Servers'][$i]['ssl'] = true;  // Tắt, Mở SSL
// $cfg['Servers'][$i]['ssl_key'] = '';  // Đường dẫn đến file khóa riêng (nếu cần)
// $cfg['Servers'][$i]['ssl_cert'] = '';  // Đường dẫn đến file chứng chỉ (nếu cần)
// $cfg['Servers'][$i]['ssl_ca'] = '';  // Đường dẫn đến file CA (nếu cần)
// $cfg['Servers'][$i]['ssl_verify'] = false;  // Tắt xác minh SSL

?>