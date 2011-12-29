<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-29 12:13:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fragment/delete/31 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-29 12:13:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fragment/delete/31 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-29 12:26:24 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Fragment::delete(), called in C:\xampp\htdocs\mootales\application\classes\controller\fragment.php on line 55 and defined ~ APPPATH\classes\model\fragment.php [ 13 ]
2011-12-29 12:26:24 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Fragment::delete(), called in C:\xampp\htdocs\mootales\application\classes\controller\fragment.php on line 55 and defined ~ APPPATH\classes\model\fragment.php [ 13 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\model\fragment.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\fragment.php(55): Model_Fragment->delete(31)
#2 [internal function]: Controller_Fragment->action_delete()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Fragment))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-29 12:26:25 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Fragment::delete(), called in C:\xampp\htdocs\mootales\application\classes\controller\fragment.php on line 55 and defined ~ APPPATH\classes\model\fragment.php [ 13 ]
2011-12-29 12:26:25 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Fragment::delete(), called in C:\xampp\htdocs\mootales\application\classes\controller\fragment.php on line 55 and defined ~ APPPATH\classes\model\fragment.php [ 13 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\model\fragment.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\fragment.php(55): Model_Fragment->delete(31)
#2 [internal function]: Controller_Fragment->action_delete()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Fragment))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-29 12:26:26 --- ERROR: ErrorException [ 2 ]: Missing argument 2 for Model_Fragment::delete(), called in C:\xampp\htdocs\mootales\application\classes\controller\fragment.php on line 55 and defined ~ APPPATH\classes\model\fragment.php [ 13 ]
2011-12-29 12:26:26 --- STRACE: ErrorException [ 2 ]: Missing argument 2 for Model_Fragment::delete(), called in C:\xampp\htdocs\mootales\application\classes\controller\fragment.php on line 55 and defined ~ APPPATH\classes\model\fragment.php [ 13 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\model\fragment.php(13): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\mootales\application\classes\controller\fragment.php(55): Model_Fragment->delete(31)
#2 [internal function]: Controller_Fragment->action_delete()
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Fragment))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#7 {main}
2011-12-29 12:34:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fragment/delete21 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-29 12:34:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fragment/delete21 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}