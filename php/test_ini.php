<?php
/*****************************************************************
 * 文件名称：test_ini.php
 * 创 建 者：blacknc <jusonlinux@163.com>
 * 创建日期：2018-04-03 19:11
 * 描    述：
 *****************************************************************/

$res = parse_ini_file('/tmp/php.ini', true);
print_r($res);