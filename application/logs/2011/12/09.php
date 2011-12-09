<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-09 00:23:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-09 00:23:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/add was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-09 00:23:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/vote was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-09 00:23:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/vote was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-09 00:37:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Request::params() ~ APPPATH\classes\controller\blog.php [ 40 ]
2011-12-09 00:37:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Request::params() ~ APPPATH\classes\controller\blog.php [ 40 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 00:38:19 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\model\blog.php [ 20 ]
2011-12-09 00:38:19 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\model\blog.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 00:52:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\classes\model\blog.php [ 37 ]
2011-12-09 00:52:14 --- STRACE: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH\classes\model\blog.php [ 37 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\model\blog.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 37, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(60): Model_Blog->unlike('7', 5)
#2 [internal function]: Controller_Blog->action_unlike()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-09 01:55:56 --- ERROR: ErrorException [ 8 ]: Undefined index: comment ~ APPPATH\classes\controller\blog.php [ 75 ]
2011-12-09 01:55:56 --- STRACE: ErrorException [ 8 ]: Undefined index: comment ~ APPPATH\classes\controller\blog.php [ 75 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(75): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 75, Array)
#1 [internal function]: Controller_Blog->action_comment()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-09 01:56:36 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'field list' [ INSERT INTO `blog_comments` (`blog_id`, `user_id`, `content`, `when`) VALUES ('6', '7', 'this blog is awesome! very informative. thanks.', '2011-12-09 01:56:36') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-09 01:56:36 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'field list' [ INSERT INTO `blog_comments` (`blog_id`, `user_id`, `content`, `when`) VALUES ('6', '7', 'this blog is awesome! very informative. thanks.', '2011-12-09 01:56:36') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `bl...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\blog.php(17): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(86): Model_Blog->add_comment(Array)
#3 [internal function]: Controller_Blog->action_comment()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-09 02:04:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/6/images/b.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-09 02:04:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/6/images/b.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-09 02:04:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/6/images/b.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-09 02:04:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blog/6/images/b.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-09 02:06:10 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-09 02:06:10 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/blog/6/images/...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2011-12-09 02:06:44 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-09 02:06:44 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/blog/6/Axolotl', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2011-12-09 02:06:49 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-09 02:06:49 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/blog/6/Axolotl', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2011-12-09 02:38:44 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-09 02:38:44 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #90, 'username')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('username')
#3 C:\xampp\htdocs\mootales\application\views\blog.php(26): Kohana_Database_Result->offsetGet('username')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(46): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Blog->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-09 02:39:09 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-09 02:39:09 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #90, 'username')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('username')
#3 C:\xampp\htdocs\mootales\application\views\blog.php(26): Kohana_Database_Result->offsetGet('username')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(46): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Blog->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-09 02:40:01 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\controller\blog.php [ 24 ]
2011-12-09 02:40:01 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\controller\blog.php [ 24 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 02:40:31 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-09 02:40:31 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #90, 'username')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('username')
#3 C:\xampp\htdocs\mootales\application\views\blog.php(26): Kohana_Database_Result->offsetGet('username')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(46): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Blog->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-09 02:40:45 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-09 02:40:45 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #90, 'username')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('username')
#3 C:\xampp\htdocs\mootales\application\views\blog.php(26): Kohana_Database_Result->offsetGet('username')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(46): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Blog->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-09 02:41:34 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-09 02:41:34 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #90, 'username')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('username')
#3 C:\xampp\htdocs\mootales\application\views\blog.php(26): Kohana_Database_Result->offsetGet('username')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(48): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Blog->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-09 02:44:41 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-09 02:44:41 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #90, 'username')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('username')
#3 C:\xampp\htdocs\mootales\application\views\blog.php(26): Kohana_Database_Result->offsetGet('username')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(48): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Blog->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-09 02:45:02 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-09 02:45:02 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #90, '_query')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('_query')
#3 C:\xampp\htdocs\mootales\application\views\blog.php(26): Kohana_Database_Result->offsetGet('_query')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(48): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Blog->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-09 02:45:08 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-09 02:45:08 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #90, '')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('')
#3 C:\xampp\htdocs\mootales\application\views\blog.php(26): Kohana_Database_Result->offsetGet('')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\blog.php(48): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Blog->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Blog))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}
2011-12-09 03:17:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/Array was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-09 03:17:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/Array was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-09 03:18:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL blog/Array was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-09 03:18:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL blog/Array was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-09 03:30:56 --- ERROR: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\home.php [ 6 ]
2011-12-09 03:30:56 --- STRACE: ErrorException [ 8 ]: Undefined variable: blogs ~ APPPATH\views\home.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:31:21 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 6 ]
2011-12-09 03:31:21 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 6 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(6): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:32:09 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:32:09 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:32:37 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:32:37 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:32:45 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:32:45 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:32:52 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:32:52 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:33:19 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:33:19 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:33:40 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:33:40 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:33:50 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:33:50 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:34:07 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:34:07 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 03:34:08 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
2011-12-09 03:34:08 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\home.php [ 15 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(15): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(14): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2011-12-09 13:14:57 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'amount_blogs' in 'field list' [ SELECT `amount_blogs` FROM `blogs` WHERE `id` = 7 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-09 13:14:57 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'amount_blogs' in 'field list' [ SELECT `amount_blogs` FROM `blogs` WHERE `id` = 7 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `amount_...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\blog.php(12): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(52): Model_Blog->create(Array)
#3 [internal function]: Controller_Dashboard->action_create_blog()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-09 13:15:25 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'amount_blogs' in 'field list' [ SELECT `amount_blogs` FROM `users` WHERE `id` = 7 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-09 13:15:25 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'amount_blogs' in 'field list' [ SELECT `amount_blogs` FROM `users` WHERE `id` = 7 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `amount_...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\blog.php(12): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(52): Model_Blog->create(Array)
#3 [internal function]: Controller_Dashboard->action_create_blog()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-09 13:15:39 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'amount_blogs' in 'field list' [ SELECT `amount_blogs` FROM `users` WHERE `id` = 7 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-12-09 13:15:39 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'amount_blogs' in 'field list' [ SELECT `amount_blogs` FROM `users` WHERE `id` = 7 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `amount_...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\blog.php(12): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(52): Model_Blog->create(Array)
#3 [internal function]: Controller_Dashboard->action_create_blog()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-09 14:13:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\controller\dashboard.php [ 16 ]
2011-12-09 14:13:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\controller\dashboard.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 14:13:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\controller\dashboard.php [ 16 ]
2011-12-09 14:13:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\controller\dashboard.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 14:14:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\controller\dashboard.php [ 16 ]
2011-12-09 14:14:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\controller\dashboard.php [ 16 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 14:18:45 --- ERROR: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\classes\controller\dashboard.php [ 32 ]
2011-12-09 14:18:45 --- STRACE: ErrorException [ 8 ]: Undefined index: content ~ APPPATH\classes\controller\dashboard.php [ 32 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(32): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 32, Array)
#1 [internal function]: Controller_Dashboard->action_create_fragment()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-09 14:22:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_fragment' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2011-12-09 14:22:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_fragment' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 15:52:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_fragments' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2011-12-09 15:52:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_fragments' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 15:52:17 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Fragment::get_recent() ~ APPPATH\classes\controller\home.php [ 12 ]
2011-12-09 15:52:17 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Fragment::get_recent() ~ APPPATH\classes\controller\home.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 16:21:12 --- ERROR: ErrorException [ 1 ]: Call to undefined method Controller_Login::action_index8() ~ APPPATH\classes\controller\login.php [ 35 ]
2011-12-09 16:21:12 --- STRACE: ErrorException [ 1 ]: Call to undefined method Controller_Login::action_index8() ~ APPPATH\classes\controller\login.php [ 35 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-09 16:50:38 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-09 16:50:38 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-09 16:50:38 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/styles/Delicio...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2011-12-09 16:50:38 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/styles/Delicio...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}