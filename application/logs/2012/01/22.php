<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-22 20:41:42 --- ERROR: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\classes\controller\dashboard.php [ 40 ]
2012-01-22 20:41:42 --- STRACE: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH\classes\controller\dashboard.php [ 40 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\dashboard.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 40, Array)
#1 [internal function]: Controller_Dashboard->action_index()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Dashboard))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-22 21:05:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/edit_stats was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-22 21:05:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL dashboard/edit_stats was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}