<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-07 17:02:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mootales was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-07 17:02:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mootales was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-07 17:24:28 --- ERROR: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:24:28 --- STRACE: View_Exception [ 0 ]: The requested view home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('home')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('home', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\welcome.php(7): Kohana_View::factory('home')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-07 17:26:00 --- ERROR: View_Exception [ 0 ]: The requested view home.html could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:26:00 --- STRACE: View_Exception [ 0 ]: The requested view home.html could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('home.html')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('home.html', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\welcome.php(7): Kohana_View::factory('home.html')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-07 17:26:06 --- ERROR: View_Exception [ 0 ]: The requested view pages/home.html could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:26:06 --- STRACE: View_Exception [ 0 ]: The requested view pages/home.html could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('pages/home.html')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('pages/home.html', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\welcome.php(7): Kohana_View::factory('pages/home.html')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-07 17:26:14 --- ERROR: View_Exception [ 0 ]: The requested view pages/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:26:14 --- STRACE: View_Exception [ 0 ]: The requested view pages/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('pages/home')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('pages/home', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\welcome.php(7): Kohana_View::factory('pages/home')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-07 17:26:21 --- ERROR: View_Exception [ 0 ]: The requested view views/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:26:21 --- STRACE: View_Exception [ 0 ]: The requested view views/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('views/home')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('views/home', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\welcome.php(7): Kohana_View::factory('views/home')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-07 17:26:25 --- ERROR: View_Exception [ 0 ]: The requested view views/home.html could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:26:25 --- STRACE: View_Exception [ 0 ]: The requested view views/home.html could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('views/home.html')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('views/home.html', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\welcome.php(7): Kohana_View::factory('views/home.html')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-07 17:26:54 --- ERROR: View_Exception [ 0 ]: The requested view views/home.html could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:26:54 --- STRACE: View_Exception [ 0 ]: The requested view views/home.html could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('views/home.html')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('views/home.html', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\welcome.php(7): Kohana_View::factory('views/home.html')
#3 [internal function]: Controller_Welcome->action_index()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-07 17:29:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Response::set() ~ APPPATH\classes\controller\welcome.php [ 8 ]
2011-12-07 17:29:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Response::set() ~ APPPATH\classes\controller\welcome.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:37:22 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:37:22 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\mootales\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\mootales\application\classes\controller\website.php(9): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Website->before()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 17:37:40 --- ERROR: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:37:40 --- STRACE: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\mootales\system\classes\kohana\controller\template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\mootales\application\classes\controller\website.php(9): Kohana_Controller_Template->before()
#4 [internal function]: Controller_Website->before()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-07 17:38:46 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\website.php [ 11 ]
2011-12-07 17:38:46 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\website.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:39:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\website.php [ 11 ]
2011-12-07 17:39:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\website.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:39:02 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\website.php [ 11 ]
2011-12-07 17:39:02 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\controller\website.php [ 11 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:39:39 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 13 ]
2011-12-07 17:39:39 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:39:47 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 13 ]
2011-12-07 17:39:47 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:41:06 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
2011-12-07 17:41:06 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:41:07 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
2011-12-07 17:41:07 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:41:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
2011-12-07 17:41:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:41:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
2011-12-07 17:41:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:41:08 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
2011-12-07 17:41:08 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\website.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:41:13 --- ERROR: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\controller\website.php [ 10 ]
2011-12-07 17:41:13 --- STRACE: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH\classes\controller\website.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:42:19 --- ERROR: View_Exception [ 0 ]: The requested view template/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-12-07 17:42:19 --- STRACE: View_Exception [ 0 ]: The requested view template/home could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(137): Kohana_View->set_filename('template/home')
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(30): Kohana_View->__construct('template/home', NULL)
#2 C:\xampp\htdocs\mootales\application\classes\controller\website.php(12): Kohana_View::factory('template/home')
#3 [internal function]: Controller_Website->before()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}
2011-12-07 17:42:25 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\website.php [ 12 ]
2011-12-07 17:42:25 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\website.php [ 12 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\website.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 12, Array)
#1 [internal function]: Controller_Website->before()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-07 17:42:35 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\website.php [ 12 ]
2011-12-07 17:42:35 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\website.php [ 12 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\website.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 12, Array)
#1 [internal function]: Controller_Website->before()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-07 17:44:03 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\website.php [ 12 ]
2011-12-07 17:44:03 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\website.php [ 12 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\website.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 12, Array)
#1 [internal function]: Controller_Website->before()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-07 17:49:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mootales was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-07 17:49:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mootales was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-07 17:49:13 --- ERROR: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\website.php [ 12 ]
2011-12-07 17:49:13 --- STRACE: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\controller\website.php [ 12 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\website.php(12): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\xampp\htdocs...', 12, Array)
#1 [internal function]: Controller_Website->before()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Welcome))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2011-12-07 17:58:52 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\controller\website.php [ 12 ]
2011-12-07 17:58:52 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\controller\website.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 17:59:18 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\controller\website.php [ 12 ]
2011-12-07 17:59:18 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE ~ APPPATH\classes\controller\website.php [ 12 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-07 18:10:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-07 18:10:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL register was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}