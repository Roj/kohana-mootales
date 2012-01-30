<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-29 16:50:34 --- ERROR: ErrorException [ 8 ]: Use of undefined constant images - assumed 'images' ~ APPPATH\views\home.php [ 41 ]
2012-01-29 16:50:34 --- STRACE: ErrorException [ 8 ]: Use of undefined constant images - assumed 'images' ~ APPPATH\views\home.php [ 41 ]
--
#0 C:\xampp\htdocs\mootales\application\views\home.php(41): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 41, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\home.php(33): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Home->action_index()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-29 18:20:57 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ SYSPATH\classes\bbcode.php [ 44 ]
2012-01-29 18:20:57 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ')' ~ SYSPATH\classes\bbcode.php [ 44 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}