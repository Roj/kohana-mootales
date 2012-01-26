<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-19 15:07:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-19 15:07:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-19 15:14:20 --- ERROR: View_Exception [ 0 ]: The requested view admin/reports could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-19 15:14:20 --- STRACE: View_Exception [ 0 ]: The requested view admin/reports could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/reports')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/reports', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\admin.php(48): Kohana_View::factory('admin/reports')
#3 [internal function]: Controller_Admin->action_reports()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-19 15:14:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/front-end was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-19 15:14:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/front-end was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-19 15:14:21 --- ERROR: View_Exception [ 0 ]: The requested view admin/settings could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-19 15:14:21 --- STRACE: View_Exception [ 0 ]: The requested view admin/settings could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/settings')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/settings', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\admin.php(43): Kohana_View::factory('admin/settings')
#3 [internal function]: Controller_Admin->action_settings()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-19 15:14:50 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Profiler::stats() must be an array, none given, called in C:\xampp\htdocs\mootales\application\classes\controller\website.php on line 36 and defined ~ SYSPATH\classes\kohana\profiler.php [ 120 ]
2012-01-19 15:14:50 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Profiler::stats() must be an array, none given, called in C:\xampp\htdocs\mootales\application\classes\controller\website.php on line 36 and defined ~ SYSPATH\classes\kohana\profiler.php [ 120 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\profiler.php(120): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 120, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\website.php(36): Kohana_Profiler::stats()
#2 [internal function]: Controller_Website->after()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-19 15:15:01 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Profiler::stats() must be an array, string given, called in C:\xampp\htdocs\mootales\application\classes\controller\website.php on line 36 and defined ~ SYSPATH\classes\kohana\profiler.php [ 120 ]
2012-01-19 15:15:01 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Profiler::stats() must be an array, string given, called in C:\xampp\htdocs\mootales\application\classes\controller\website.php on line 36 and defined ~ SYSPATH\classes\kohana\profiler.php [ 120 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\profiler.php(120): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 120, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\website.php(36): Kohana_Profiler::stats('kp/i')
#2 [internal function]: Controller_Website->after()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-19 15:15:02 --- ERROR: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Profiler::stats() must be an array, string given, called in C:\xampp\htdocs\mootales\application\classes\controller\website.php on line 36 and defined ~ SYSPATH\classes\kohana\profiler.php [ 120 ]
2012-01-19 15:15:02 --- STRACE: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Profiler::stats() must be an array, string given, called in C:\xampp\htdocs\mootales\application\classes\controller\website.php on line 36 and defined ~ SYSPATH\classes\kohana\profiler.php [ 120 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\profiler.php(120): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 120, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\website.php(36): Kohana_Profiler::stats('kp/i')
#2 [internal function]: Controller_Website->after()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2012-01-19 17:05:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/front-end was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-19 17:05:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/front-end was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-19 17:05:05 --- ERROR: View_Exception [ 0 ]: The requested view admin/blogs could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-19 17:05:05 --- STRACE: View_Exception [ 0 ]: The requested view admin/blogs could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/blogs')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/blogs', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\admin.php(23): Kohana_View::factory('admin/blogs')
#3 [internal function]: Controller_Admin->action_blogs()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-19 17:05:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/overview was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-19 17:05:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/overview was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-19 17:23:46 --- ERROR: ErrorException [ 1 ]: Class 'Views' not found ~ APPPATH\classes\controller\mail.php [ 18 ]
2012-01-19 17:23:46 --- STRACE: ErrorException [ 1 ]: Class 'Views' not found ~ APPPATH\classes\controller\mail.php [ 18 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-19 17:47:42 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-01-19 17:47:42 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\xampp\htdocs\mootales\application\classes\model\blog.php(46): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(13): Model_Blog->get_blog(25)
#4 [internal function]: Controller_Blog->action_view()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}