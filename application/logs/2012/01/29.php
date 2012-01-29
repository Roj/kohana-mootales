<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-29 13:35:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\website.php [ 22 ]
2012-01-29 13:35:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\controller\website.php [ 22 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 13:45:57 --- ERROR: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\controller\user.php [ 14 ]
2012-01-29 13:45:57 --- STRACE: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\controller\user.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 13:46:31 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH\classes\controller\user.php [ 14 ]
2012-01-29 13:46:31 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH\classes\controller\user.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 13:46:44 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH\classes\controller\user.php [ 14 ]
2012-01-29 13:46:44 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ APPPATH\classes\controller\user.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 13:46:51 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\user.php [ 15 ]
2012-01-29 13:46:51 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\user.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 14:28:07 --- ERROR: ErrorException [ 8 ]: Undefined index: pageviews ~ APPPATH\classes\controller\user.php [ 17 ]
2012-01-29 14:28:07 --- STRACE: ErrorException [ 8 ]: Undefined index: pageviews ~ APPPATH\classes\controller\user.php [ 17 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\user.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 17, Array)
#1 [internal function]: Controller_User->action_view()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-29 14:28:20 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'pageviews' in 'field list' [ UPDATE `users` SET `pageviews` = 1 WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-29 14:28:20 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'pageviews' in 'field list' [ UPDATE `users` SET `pageviews` = 1 WHERE `id` = '7' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\user.php(25): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\user.php(17): Model_User->update_pageviews('7', '0')
#3 [internal function]: Controller_User->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2012-01-29 14:36:38 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2012-01-29 14:36:38 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/foo.php', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2012-01-29 14:36:46 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2012-01-29 14:36:46 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/application/fo...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2012-01-29 14:51:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\views\profile.php [ 19 ]
2012-01-29 14:51:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\views\profile.php [ 19 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 14:52:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\views\profile.php [ 21 ]
2012-01-29 14:52:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\views\profile.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 14:52:23 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\views\profile.php [ 21 ]
2012-01-29 14:52:23 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\views\profile.php [ 21 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-29 14:59:03 --- ERROR: View_Exception [ 0 ]: The requested view admin/blogs could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-29 14:59:03 --- STRACE: View_Exception [ 0 ]: The requested view admin/blogs could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
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
2012-01-29 14:59:04 --- ERROR: View_Exception [ 0 ]: The requested view admin/fragments could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-01-29 14:59:04 --- STRACE: View_Exception [ 0 ]: The requested view admin/fragments could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
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