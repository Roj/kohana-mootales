<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-28 15:12:10 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2011-12-28 15:12:10 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\xampp\htdocs\mootales\application\classes\model\blog.php(34): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\mootales\application\classes\controller\home.php(11): Model_Blog->get_most_recent()
#4 [internal function]: Controller_Home->action_index()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-28 17:11:20 --- ERROR: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\link.php [ 13 ]
2011-12-28 17:11:20 --- STRACE: ErrorException [ 1 ]: Using $this when not in object context ~ SYSPATH\classes\link.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:23:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\home.php [ 17 ]
2011-12-28 17:23:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\home.php [ 17 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:38:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\forum_category.php [ 8 ]
2011-12-28 17:38:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\forum_category.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:39:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\forum_category.php [ 7 ]
2011-12-28 17:39:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\forum_category.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:39:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\forum_category.php [ 7 ]
2011-12-28 17:39:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\forum_category.php [ 7 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:40:55 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\fragment.php [ 4 ]
2011-12-28 17:40:55 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\fragment.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:43:41 --- ERROR: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
2011-12-28 17:43:41 --- STRACE: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:43:50 --- ERROR: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
2011-12-28 17:43:50 --- STRACE: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:44:26 --- ERROR: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
2011-12-28 17:44:26 --- STRACE: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:47:11 --- ERROR: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\blog.php [ 4 ]
2011-12-28 17:47:11 --- STRACE: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\views\blog.php [ 4 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(4): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(41): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:47:32 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:47:32 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(46): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:47:42 --- ERROR: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
2011-12-28 17:47:42 --- STRACE: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:48:42 --- ERROR: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
2011-12-28 17:48:42 --- STRACE: ErrorException [ 8 ]: Undefined index: author_id ~ APPPATH\views\blog.php [ 8 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:49:04 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:49:04 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:49:59 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:49:59 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:50:00 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:50:00 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:50:00 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:50:00 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(54): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:50:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\blog.php [ 44 ]
2011-12-28 17:50:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\blog.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:51:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\blog.php [ 44 ]
2011-12-28 17:51:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\blog.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:51:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\blog.php [ 44 ]
2011-12-28 17:51:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\blog.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:51:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\blog.php [ 44 ]
2011-12-28 17:51:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\blog.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:51:53 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:51:53 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:52:13 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:52:13 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:53:30 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:53:30 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:53:38 --- ERROR: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
2011-12-28 17:53:38 --- STRACE: ErrorException [ 8 ]: Undefined index: time_posted ~ APPPATH\views\blog.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(6): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 17:54:01 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 34 ]
2011-12-28 17:54:01 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:54:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 34 ]
2011-12-28 17:54:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 34 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:55:20 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
2011-12-28 17:55:20 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:55:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
2011-12-28 17:55:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:55:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
2011-12-28 17:55:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:55:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
2011-12-28 17:55:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:55:21 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
2011-12-28 17:55:21 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\controller\blog.php [ 33 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 17:56:11 --- ERROR: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\controller\blog.php [ 35 ]
2011-12-28 17:56:11 --- STRACE: ErrorException [ 1 ]: Function name must be a string ~ APPPATH\classes\controller\blog.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 18:42:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/25/Pagination-test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-28 18:42:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/25/Pagination-test/1 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-28 19:18:24 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\blog.php [ 36 ]
2011-12-28 19:18:24 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting ',' or ';' ~ APPPATH\views\blog.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 19:54:13 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-7,3' at line 1 [ SELECT * FROM `blog_comments` WHERE `blog_id` = 25 LIMIT -7,3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-28 19:54:13 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-7,3' at line 1 [ SELECT * FROM `blog_comments` WHERE `blog_id` = 25 LIMIT -7,3 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\blog.php(26): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(29): Model_Blog->get_blog_comments(25, '-7,3')
#3 [internal function]: Controller_Blog->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-28 19:56:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: total_pages ~ APPPATH\views\blog.php [ 33 ]
2011-12-28 19:56:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: total_pages ~ APPPATH\views\blog.php [ 33 ]
--
#0 C:\xampp\htdocs\mootales\application\views\blog.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(55): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Blog->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 20:26:19 --- ERROR: ErrorException [ 2048 ]: Non-static method Pagination::page_links() should not be called statically ~ SYSPATH\classes\pagination.php [ 28 ]
2011-12-28 20:26:19 --- STRACE: ErrorException [ 2048 ]: Non-static method Pagination::page_links() should not be called statically ~ SYSPATH\classes\pagination.php [ 28 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\pagination.php(28): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\mootales\system\classes\pagination.php(28): Pagination::page_links()
#2 C:\xampp\htdocs\mootales\application\views\blog.php(33): Pagination::blog_page_links(3, 3, Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(56): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Blog->action_view()
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-28 20:33:07 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\thread.php [ 41 ]
2011-12-28 20:33:07 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\views\thread.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-28 20:34:27 --- ERROR: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH\views\thread.php [ 29 ]
2011-12-28 20:34:27 --- STRACE: ErrorException [ 8 ]: Undefined index: avatar ~ APPPATH\views\thread.php [ 29 ]
--
#0 C:\xampp\htdocs\mootales\application\views\thread.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(40): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Thread->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-28 20:37:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\views\blog.php [ 41 ]
2011-12-28 20:37:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\views\blog.php [ 41 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}