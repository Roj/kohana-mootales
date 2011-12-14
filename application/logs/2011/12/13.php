<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-13 10:44:06 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2011-12-13 10:44:06 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\xampp\htdocs\mootales\application\classes\model\blog.php(33): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\mootales\application\classes\controller\home.php(10): Model_Blog->get_most_recent()
#4 [internal function]: Controller_Home->action_index()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-13 10:48:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/1s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-13 10:48:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/1s was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-13 10:48:37 --- ERROR: View_Exception [ 0 ]: The requested view blog_notexist could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:48:37 --- STRACE: View_Exception [ 0 ]: The requested view blog_notexist could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('blog_notexist')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('blog_notexist', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('blog_notexist')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:49:38 --- ERROR: View_Exception [ 0 ]: The requested view blog_notexist could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:49:38 --- STRACE: View_Exception [ 0 ]: The requested view blog_notexist could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('blog_notexist')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('blog_notexist', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('blog_notexist')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:50:48 --- ERROR: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:50:48 --- STRACE: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('error/blog_note...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('error/blog_note...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('error/blog_note...')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:50:49 --- ERROR: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:50:49 --- STRACE: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('error/blog_note...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('error/blog_note...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('error/blog_note...')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:50:49 --- ERROR: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:50:49 --- STRACE: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('error/blog_note...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('error/blog_note...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('error/blog_note...')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:50:50 --- ERROR: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:50:50 --- STRACE: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('error/blog_note...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('error/blog_note...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('error/blog_note...')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:50:50 --- ERROR: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:50:50 --- STRACE: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('error/blog_note...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('error/blog_note...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('error/blog_note...')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:50:51 --- ERROR: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:50:51 --- STRACE: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('error/blog_note...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('error/blog_note...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('error/blog_note...')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:50:53 --- ERROR: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:50:53 --- STRACE: View_Exception [ 0 ]: The requested view error/blog_notexist.php could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('error/blog_note...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('error/blog_note...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('error/blog_note...')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:51:09 --- ERROR: View_Exception [ 0 ]: The requested view error/blog_notexist could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-13 10:51:09 --- STRACE: View_Exception [ 0 ]: The requested view error/blog_notexist could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('error/blog_note...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('error/blog_note...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(16): Kohana_View::factory('error/blog_note...')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-13 10:53:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-13 10:53:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-13 10:54:41 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-13 10:54:41 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-13 10:55:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-13 10:55:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-13 10:55:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-13 10:55:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL profiler was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-13 18:21:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\blog_notexist.php [ 4 ]
2011-12-13 18:21:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\blog_notexist.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-13 18:22:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\blog_notexist.php [ 4 ]
2011-12-13 18:22:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ',' or ';' ~ APPPATH\views\blog_notexist.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}