<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-12 00:00:20 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-12 00:00:20 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #80, 'content')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('content')
#3 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(15): Kohana_Database_Result->offsetGet('content')
#4 [internal function]: Controller_Thread->action_view()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-12 00:00:26 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-12 00:00:26 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #80, 'content')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('content')
#3 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(15): Kohana_Database_Result->offsetGet('content')
#4 [internal function]: Controller_Thread->action_view()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-12 00:00:27 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-12 00:00:27 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #80, 'content')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('content')
#3 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(15): Kohana_Database_Result->offsetGet('content')
#4 [internal function]: Controller_Thread->action_view()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-12 00:00:27 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-12 00:00:27 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #80, 'content')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('content')
#3 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(15): Kohana_Database_Result->offsetGet('content')
#4 [internal function]: Controller_Thread->action_view()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-12 00:02:21 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-12 00:02:21 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #80, 'content')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('content')
#3 C:\xampp\htdocs\mootales\application\views\thread.php(1): Kohana_Database_Result->offsetGet('content')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(16): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Thread->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-12 00:03:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\thread.php [ 40 ]
2011-12-12 00:03:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\thread.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 00:05:00 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_INCLUDE ~ APPPATH\views\thread.php [ 36 ]
2011-12-12 00:05:00 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_INCLUDE ~ APPPATH\views\thread.php [ 36 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 00:08:14 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'thread_id' in 'where clause' [ SELECT * FROM `forum_threads` WHERE `thread_id` = 1 LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-12 00:08:14 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'thread_id' in 'where clause' [ SELECT * FROM `forum_threads` WHERE `thread_id` = 1 LIMIT 10 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\forum.php(15): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(11): Model_Forum->get_comments(1)
#3 [internal function]: Controller_Thread->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-12 00:08:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\thread.php [ 30 ]
2011-12-12 00:08:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\thread.php [ 30 ]
--
#0 C:\xampp\htdocs\mootales\application\views\thread.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(17): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Thread->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-12 00:08:59 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-12 00:08:59 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #80, 'id')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('id')
#3 C:\xampp\htdocs\mootales\application\views\thread.php(30): Kohana_Database_Result->offsetGet('id')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(17): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Thread->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-12 00:27:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL thread/Array was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-12 00:27:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL thread/Array was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-12 00:30:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\controller\forum.php [ 11 ]
2011-12-12 00:30:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';', expecting T_FUNCTION ~ APPPATH\classes\controller\forum.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 00:45:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\classes\controller\forum.php [ 28 ]
2011-12-12 00:45:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\classes\controller\forum.php [ 28 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 28, Array)
#1 [internal function]: Controller_Forum->action_view()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-12 00:45:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\forum_categories.php [ 5 ]
2011-12-12 00:45:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: categories ~ APPPATH\views\forum_categories.php [ 5 ]
--
#0 C:\xampp\htdocs\mootales\application\views\forum_categories.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(30): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Forum->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-12 00:49:57 --- ERROR: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\forum_category.php [ 8 ]
2011-12-12 00:49:57 --- STRACE: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\forum_category.php [ 8 ]
--
#0 C:\xampp\htdocs\mootales\application\views\forum_category.php(8): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(32): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Forum->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-12 00:53:56 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\forum_category.php [ 9 ]
2011-12-12 00:53:56 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\forum_category.php [ 9 ]
--
#0 C:\xampp\htdocs\mootales\application\views\forum_category.php(9): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(32): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Forum->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-12 00:54:16 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:54:16 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 C:\xampp\htdocs\mootales\application\views\forum_category.php(10): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(32): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Forum->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-12 00:54:27 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:54:27 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 C:\xampp\htdocs\mootales\application\views\forum_category.php(10): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(32): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Forum->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-12 00:55:03 --- ERROR: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:55:03 --- STRACE: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 C:\xampp\htdocs\mootales\application\views\forum_category.php(10): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(32): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Forum->action_view()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-12 00:55:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:55:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 00:55:30 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:55:30 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 00:56:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:56:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 00:56:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:56:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 00:56:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:56:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-12 00:56:58 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-12 00:56:58 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #86, 'username')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('username')
#3 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(27): Kohana_Database_Result->offsetGet('username')
#4 [internal function]: Controller_Forum->action_view()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-12 00:57:05 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
2011-12-12 00:57:05 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',', expecting ']' ~ APPPATH\views\forum_category.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}