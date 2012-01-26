<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-23 16:25:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL inbox was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-01-23 16:25:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL inbox was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-23 16:27:56 --- ERROR: ErrorException [ 8 ]: Undefined index: subject ~ APPPATH\classes\controller\mail.php [ 55 ]
2012-01-23 16:27:56 --- STRACE: ErrorException [ 8 ]: Undefined index: subject ~ APPPATH\classes\controller\mail.php [ 55 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\mail.php(55): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 55, Array)
#1 [internal function]: Controller_Mail->action_create()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Mail))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-23 20:52:31 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::execut() ~ APPPATH\classes\model\mail.php [ 13 ]
2012-01-23 20:52:31 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::execut() ~ APPPATH\classes\model\mail.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-23 20:52:38 --- ERROR: View_Exception [ 0 ]: The requested view inbox/read could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-23 20:52:38 --- STRACE: View_Exception [ 0 ]: The requested view inbox/read could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('inbox/read')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('inbox/read', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\mail.php(90): Kohana_View::factory('inbox/read')
#3 [internal function]: Controller_Mail->action_read()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Mail))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-23 20:52:54 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2012-01-23 20:52:54 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #79, 'title')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('title')
#3 C:\xampp\htdocs\mootales\application\views\mail\read.php(2): Kohana_Database_Result->offsetGet('title')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\mail.php(92): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Mail->action_read()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Mail))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2012-01-23 20:53:06 --- ERROR: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\mail\read.php [ 2 ]
2012-01-23 20:53:06 --- STRACE: ErrorException [ 8 ]: Undefined index: title ~ APPPATH\views\mail\read.php [ 2 ]
--
#0 C:\xampp\htdocs\mootales\application\views\mail\read.php(2): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\mail.php(92): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Mail->action_read()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Mail))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-23 20:59:22 --- ERROR: View_Exception [ 0 ]: The requested view admin/fragments could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-23 20:59:22 --- STRACE: View_Exception [ 0 ]: The requested view admin/fragments could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/fragments')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/fragments', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\admin.php(33): Kohana_View::factory('admin/fragments')
#3 [internal function]: Controller_Admin->action_fragments()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-23 20:59:27 --- ERROR: View_Exception [ 0 ]: The requested view admin/settings could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-23 20:59:27 --- STRACE: View_Exception [ 0 ]: The requested view admin/settings could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
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
2012-01-23 20:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/front-end was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-23 20:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/front-end was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2012-01-23 20:59:30 --- ERROR: View_Exception [ 0 ]: The requested view admin/update could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-23 20:59:30 --- STRACE: View_Exception [ 0 ]: The requested view admin/update could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/update')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/update', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\admin.php(53): Kohana_View::factory('admin/update')
#3 [internal function]: Controller_Admin->action_update()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-23 20:59:31 --- ERROR: View_Exception [ 0 ]: The requested view admin/reports could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-23 20:59:31 --- STRACE: View_Exception [ 0 ]: The requested view admin/reports could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
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
2012-01-23 20:59:31 --- ERROR: View_Exception [ 0 ]: The requested view admin/settings could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-23 20:59:31 --- STRACE: View_Exception [ 0 ]: The requested view admin/settings could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
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
2012-01-23 21:11:16 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2012-01-23 21:11:16 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/nonexistant.ph...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2012-01-23 21:11:25 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2012-01-23 21:11:25 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/file/nonexista...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}