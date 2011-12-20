<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-19 22:21:44 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2011-12-19 22:21:44 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\xampp\htdocs\mootales\application\classes\model\blog.php(33): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\mootales\application\classes\controller\home.php(11): Model_Blog->get_most_recent()
#4 [internal function]: Controller_Home->action_index()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-19 23:07:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-19 23:07:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/manage was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-19 23:09:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/edit_blog/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-19 23:09:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/edit_blog/2 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-19 23:22:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\dashboard.php [ 168 ]
2011-12-19 23:22:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\dashboard.php [ 168 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-19 23:22:27 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\confirm_blog_delete.php [ 4 ]
2011-12-19 23:22:27 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\views\confirm_blog_delete.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-19 23:30:25 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Blog::delete_blog() ~ APPPATH\classes\controller\dashboard.php [ 172 ]
2011-12-19 23:30:25 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Blog::delete_blog() ~ APPPATH\classes\controller\dashboard.php [ 172 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-19 23:31:28 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Delete::from() ~ APPPATH\classes\model\blog.php [ 49 ]
2011-12-19 23:31:28 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Delete::from() ~ APPPATH\classes\model\blog.php [ 49 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}