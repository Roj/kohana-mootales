<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-20 00:04:04 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\dashboard.php [ 189 ]
2011-12-20 00:04:04 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\dashboard.php [ 189 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 00:08:25 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\dashboard.php [ 170 ]
2011-12-20 00:08:25 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\dashboard.php [ 170 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(170): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 170, Array)
#1 [internal function]: Controller_Dashboard->action_edit_blog()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-20 00:09:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
2011-12-20 00:09:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
--
#0 C:\xampp\htdocs\mootales\application\views\edit_blog.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(165): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Dashboard->action_edit_blog()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-20 00:09:54 --- ERROR: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
2011-12-20 00:09:54 --- STRACE: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
--
#0 C:\xampp\htdocs\mootales\application\views\edit_blog.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(165): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Dashboard->action_edit_blog()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-20 00:10:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
2011-12-20 00:10:03 --- STRACE: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
--
#0 C:\xampp\htdocs\mootales\application\views\edit_blog.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(165): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Dashboard->action_edit_blog()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-20 00:10:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
2011-12-20 00:10:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
--
#0 C:\xampp\htdocs\mootales\application\views\edit_blog.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(165): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Dashboard->action_edit_blog()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-20 00:10:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
2011-12-20 00:10:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
--
#0 C:\xampp\htdocs\mootales\application\views\edit_blog.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(165): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Dashboard->action_edit_blog()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-20 00:10:04 --- ERROR: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
2011-12-20 00:10:04 --- STRACE: ErrorException [ 8 ]: Undefined variable: blog ~ APPPATH\views\edit_blog.php [ 3 ]
--
#0 C:\xampp\htdocs\mootales\application\views\edit_blog.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(165): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Dashboard->action_edit_blog()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-20 00:10:21 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\dashboard.php [ 171 ]
2011-12-20 00:10:21 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\classes\controller\dashboard.php [ 171 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(171): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 171, Array)
#1 [internal function]: Controller_Dashboard->action_edit_blog()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-20 00:12:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH\views\edit_blog.php [ 3 ]
2011-12-20 00:12:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: values ~ APPPATH\views\edit_blog.php [ 3 ]
--
#0 C:\xampp\htdocs\mootales\application\views\edit_blog.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(165): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Dashboard->action_edit_blog()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-20 00:13:16 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-20 00:13:16 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #79, 'id')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('id')
#3 C:\xampp\htdocs\mootales\application\views\edit_blog.php(5): Kohana_Database_Result->offsetGet('id')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(167): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Dashboard->action_edit_blog()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-20 00:35:50 --- ERROR: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\edit_blog.php [ 3 ]
2011-12-20 00:35:50 --- STRACE: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\edit_blog.php [ 3 ]
--
#0 C:\xampp\htdocs\mootales\application\views\edit_blog.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(188): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Dashboard->action_edit_blog()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-20 00:51:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/edit_blog5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-20 00:51:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/edit_blog5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-20 08:57:55 --- ERROR: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\controller\dashboard.php [ 161 ]
2011-12-20 08:57:55 --- STRACE: ErrorException [ 1 ]: Call to a member function set() on a non-object ~ APPPATH\classes\controller\dashboard.php [ 161 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 08:58:49 --- ERROR: ErrorException [ 8 ]: Undefined variable: form_viwe_name ~ APPPATH\classes\controller\dashboard.php [ 143 ]
2011-12-20 08:58:49 --- STRACE: ErrorException [ 8 ]: Undefined variable: form_viwe_name ~ APPPATH\classes\controller\dashboard.php [ 143 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(143): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 143, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(196): Controller_Dashboard->check_edit_form(Object(Database_MySQL_Result), 'edit_blog', Array)
#2 [internal function]: Controller_Dashboard->action_edit_blog()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-20 09:03:38 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\dashboard.php [ 211 ]
2011-12-20 09:03:38 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\dashboard.php [ 211 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 09:06:20 --- ERROR: View_Exception [ 0 ]: The requested view edit_thread could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-20 09:06:20 --- STRACE: View_Exception [ 0 ]: The requested view edit_thread could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('edit_thread')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('edit_thread', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(143): Kohana_View::factory('edit_thread')
#3 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(215): Controller_Dashboard->check_edit_form(Object(Database_MySQL_Result), 'edit_thread', Array)
#4 [internal function]: Controller_Dashboard->action_edit_thread()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-20 09:29:17 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Iñtërnâtiônàlizætiøn - assumed 'Iñtërnâtiônàlizætiøn' ~ APPPATH\views\header.php [ 30 ]
2011-12-20 09:29:17 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Iñtërnâtiônàlizætiøn - assumed 'Iñtërnâtiônàlizætiøn' ~ APPPATH\views\header.php [ 30 ]
--
#0 C:\xampp\htdocs\mootales\application\views\header.php(30): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\mootales\application\views\user_profile.php(1): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\mootales\application\classes\controller\user.php(20): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_User->action_view()
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-20 09:58:14 --- ERROR: ErrorException [ 1 ]: Call to undefined function html_entities() ~ APPPATH\classes\model\blog.php [ 6 ]
2011-12-20 09:58:14 --- STRACE: ErrorException [ 1 ]: Call to undefined function html_entities() ~ APPPATH\classes\model\blog.php [ 6 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 09:58:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\model\blog.php [ 8 ]
2011-12-20 09:58:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\classes\model\blog.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 10:12:24 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ENT_HTML5 - assumed 'ENT_HTML5' ~ APPPATH\classes\model\fragment.php [ 5 ]
2011-12-20 10:12:24 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ENT_HTML5 - assumed 'ENT_HTML5' ~ APPPATH\classes\model\fragment.php [ 5 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\model\fragment.php(5): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(44): Model_Fragment->create('7', 'I??t??rn??ti??n...')
#2 [internal function]: Controller_Dashboard->action_create_fragment()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-20 10:12:43 --- ERROR: ErrorException [ 2 ]: htmlentities() expects parameter 2 to be long, string given ~ APPPATH\classes\model\fragment.php [ 5 ]
2011-12-20 10:12:43 --- STRACE: ErrorException [ 2 ]: htmlentities() expects parameter 2 to be long, string given ~ APPPATH\classes\model\fragment.php [ 5 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'htmlentities() ...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\fragment.php(5): htmlentities('I??t??rn??ti??n...', 'ENT_HTML5', 'UTF-8')
#2 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(44): Model_Fragment->create('7', 'I??t??rn??ti??n...')
#3 [internal function]: Controller_Dashboard->action_create_fragment()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-20 10:14:27 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ENT_HTML401 - assumed 'ENT_HTML401' ~ APPPATH\classes\model\fragment.php [ 5 ]
2011-12-20 10:14:27 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ENT_HTML401 - assumed 'ENT_HTML401' ~ APPPATH\classes\model\fragment.php [ 5 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\model\fragment.php(5): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(44): Model_Fragment->create('7', 'I??t??rn??ti??n...')
#2 [internal function]: Controller_Dashboard->action_create_fragment()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-20 10:14:49 --- ERROR: ErrorException [ 8 ]: Use of undefined constant ENT_HTML401 - assumed 'ENT_HTML401' ~ APPPATH\classes\model\fragment.php [ 5 ]
2011-12-20 10:14:49 --- STRACE: ErrorException [ 8 ]: Use of undefined constant ENT_HTML401 - assumed 'ENT_HTML401' ~ APPPATH\classes\model\fragment.php [ 5 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\model\fragment.php(5): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(44): Model_Fragment->create('7', 'I??t??rn??ti??n...')
#2 [internal function]: Controller_Dashboard->action_create_fragment()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-20 10:17:41 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\blog.php [ 30 ]
2011-12-20 10:17:41 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\blog.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 10:17:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\blog.php [ 30 ]
2011-12-20 10:17:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\blog.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 10:17:49 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\blog.php [ 30 ]
2011-12-20 10:17:49 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\blog.php [ 30 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 10:46:27 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL edit_thread/25 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-20 10:46:27 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL edit_thread/25 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-20 11:56:33 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ' ~ SYSPATH\classes\datehelper.php [ 23 ]
2011-12-20 11:56:33 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ' ~ SYSPATH\classes\datehelper.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 11:57:07 --- ERROR: ErrorException [ 2048 ]: Non-static method DateHelper::human_readable() should not be called statically ~ APPPATH\views\fragment.php [ 6 ]
2011-12-20 11:57:07 --- STRACE: ErrorException [ 2048 ]: Non-static method DateHelper::human_readable() should not be called statically ~ APPPATH\views\fragment.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\fragment.php(6): Kohana_Core::error_handler(2048, 'Non-static meth...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\application\views\fragment.php(6): DateHelper::human_readable()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#6 C:\xampp\htdocs\mootales\application\classes\controller\fragment.php(25): Kohana_Response->body(Object(View))
#7 [internal function]: Controller_Fragment->action_view()
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Fragment))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#12 {main}
2011-12-20 11:57:15 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ SYSPATH\classes\datehelper.php [ 40 ]
2011-12-20 11:57:15 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ SYSPATH\classes\datehelper.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\mootales\system\classes\datehelper.php(40): getdate('2011-12-20 09:3...')
#2 C:\xampp\htdocs\mootales\application\views\fragment.php(6): DateHelper::human_readable('2011-12-20 09:3...')
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\mootales\application\classes\controller\fragment.php(25): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Fragment->action_view()
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Fragment))
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-20 11:59:35 --- ERROR: ErrorException [ 2 ]: idate() [function.idate]: idate format is one char ~ SYSPATH\classes\datehelper.php [ 7 ]
2011-12-20 11:59:35 --- STRACE: ErrorException [ 2 ]: idate() [function.idate]: idate format is one char ~ SYSPATH\classes\datehelper.php [ 7 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'idate() [<a hre...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\mootales\system\classes\datehelper.php(7): idate('2011-12-20 09:3...')
#2 C:\xampp\htdocs\mootales\application\views\fragment.php(6): DateHelper::human_readable('2011-12-20 09:3...')
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\mootales\application\classes\controller\fragment.php(25): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Fragment->action_view()
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Fragment))
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#13 {main}
2011-12-20 12:18:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/24/I-ntilde;t-euml;rn-acirc;ti-ocirc;n-agrave;liz-aelig;ti-oslash;n ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-20 12:18:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/24/I-ntilde;t-euml;rn-acirc;ti-ocirc;n-agrave;liz-aelig;ti-oslash;n ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-20 12:22:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\thread.php [ 3 ]
2011-12-20 12:22:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\thread.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-20 12:23:18 --- ERROR: ErrorException [ 8 ]: A non well formed numeric value encountered ~ SYSPATH\classes\datehelper.php [ 40 ]
2011-12-20 12:23:18 --- STRACE: ErrorException [ 8 ]: A non well formed numeric value encountered ~ SYSPATH\classes\datehelper.php [ 40 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\mootales\system\classes\datehelper.php(40): getdate('2011-12-13 18:3...')
#2 C:\xampp\htdocs\mootales\application\views\thread.php(3): DateHelper::human_readable('2011-12-13 18:3...')
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#7 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(37): Kohana_Response->body(Object(View))
#8 [internal function]: Controller_Thread->action_view()
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#13 {main}