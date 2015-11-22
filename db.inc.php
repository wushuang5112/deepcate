// 连接数据库使用文件

// 无限级表字段： id pid catename cateorder createtime
$db_host = 'localhost';
$db_user = 'root';
$db_passwd = 'root';
$db_name = 'cate';
$link = mysql_connect($db_host, $db_user, $db_passwd) or die(mysql_error());
mysql_select_db($db_name, $link) or die(mysql_error());
mysql_query("set names gbk;") or die("编码设置错误");