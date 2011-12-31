<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-30 17:47:16 --- ERROR: View_Exception [ 0 ]: The requested view category could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-30 17:47:16 --- STRACE: View_Exception [ 0 ]: The requested view category could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('category')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('category', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\forum.php(28): Kohana_View::factory('category')
#3 [internal function]: Controller_Forum->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Forum))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-30 17:48:10 --- ERROR: View_Exception [ 0 ]: The requested view confirm_delete could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-30 17:48:10 --- STRACE: View_Exception [ 0 ]: The requested view confirm_delete could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('confirm_delete')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('confirm_delete', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(290): Kohana_View::factory('confirm_delete')
#3 [internal function]: Controller_Dashboard->action_delete_thread()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-30 18:01:20 --- ERROR: View_Exception [ 0 ]: The requested view forum/thread could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-30 18:01:20 --- STRACE: View_Exception [ 0 ]: The requested view forum/thread could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('forum/thread')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('forum/thread', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\thread.php(46): Kohana_View::factory('forum/thread')
#3 [internal function]: Controller_Thread->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Thread))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-30 18:02:14 --- ERROR: View_Exception [ 0 ]: The requested view forum/edit_thread could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-30 18:02:14 --- STRACE: View_Exception [ 0 ]: The requested view forum/edit_thread could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('forum/edit_thre...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('forum/edit_thre...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(143): Kohana_View::factory('forum/edit_thre...')
#3 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(215): Controller_Dashboard->check_edit_form(Object(Database_MySQL_Result), 'forum/edit_thre...', Array)
#4 [internal function]: Controller_Dashboard->action_edit_thread()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-30 18:02:39 --- ERROR: View_Exception [ 0 ]: The requested view forum/edit_thread could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-30 18:02:39 --- STRACE: View_Exception [ 0 ]: The requested view forum/edit_thread could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('forum/edit_thre...')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('forum/edit_thre...', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(143): Kohana_View::factory('forum/edit_thre...')
#3 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(215): Controller_Dashboard->check_edit_form(Object(Database_MySQL_Result), 'forum/edit_thre...', Array)
#4 [internal function]: Controller_Dashboard->action_edit_thread()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-30 18:04:36 --- ERROR: View_Exception [ 0 ]: The requested view user_profile could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-30 18:04:36 --- STRACE: View_Exception [ 0 ]: The requested view user_profile could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('user_profile')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('user_profile', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\user.php(16): Kohana_View::factory('user_profile')
#3 [internal function]: Controller_User->action_view()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-30 18:05:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdfasdfasfa was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-30 18:05:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdfasdfasfa was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-30 18:05:55 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-30 18:05:55 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/asdfasdfasfa.p...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2011-12-30 18:06:51 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL asdfasdfasfa was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-30 18:06:51 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL asdfasdfasfa was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-30 21:02:08 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-30 21:02:08 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/styles/mootale...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2011-12-30 21:02:42 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-30 21:02:42 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/styles/mootale...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2011-12-30 21:02:46 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2011-12-30 21:02:46 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/styles/mootale...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}