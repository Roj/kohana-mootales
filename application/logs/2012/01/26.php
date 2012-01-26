<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-26 13:42:50 --- ERROR: Database_Exception [ 1146 ]: Table 'mootales.mails' doesn't exist [ SELECT COUNT(id) AS `amount` FROM `mails` WHERE `receiver_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-01-26 13:42:50 --- STRACE: Database_Exception [ 1146 ]: Table 'mootales.mails' doesn't exist [ SELECT COUNT(id) AS `amount` FROM `mails` WHERE `receiver_id` = '13' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(id...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\mail.php(20): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\website.php(23): Model_Mail->get_amount_mails('13')
#3 C:\xampp\htdocs\mootales\application\classes\controller\mail.php(7): Controller_Website->before()
#4 [internal function]: Controller_Mail->before()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(103): ReflectionMethod->invoke(Object(Controller_Mail))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2012-01-26 14:10:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\views\mail\inbox.php [ 34 ]
2012-01-26 14:10:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\views\mail\inbox.php [ 34 ]
--
#0 C:\xampp\htdocs\mootales\application\views\mail\inbox.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 34, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\mootales\application\classes\controller\mail.php(38): Kohana_Response->body(Object(View))
#6 [internal function]: Controller_Mail->action_inbox()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Mail))
#8 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#9 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#11 {main}
2012-01-26 14:11:05 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2012-01-26 14:11:05 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/mail/email.png...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2012-01-26 14:11:09 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2012-01-26 14:11:09 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/mail/email.png...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2012-01-26 14:12:21 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2012-01-26 14:12:21 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/image/email.pn...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2012-01-26 14:12:24 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
2012-01-26 14:12:24 --- STRACE: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH\classes\kohana\request.php [ 812 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(812): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 812, Array)
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(198): Kohana_Request->__construct('/image/email.pn...', NULL)
#2 C:\xampp\htdocs\mootales\index.php(108): Kohana_Request::factory()
#3 {main}
2012-01-26 14:15:06 --- ERROR: ErrorException [ 8 ]: Undefined index: receiver_id ~ APPPATH\classes\controller\mail.php [ 91 ]
2012-01-26 14:15:06 --- STRACE: ErrorException [ 8 ]: Undefined index: receiver_id ~ APPPATH\classes\controller\mail.php [ 91 ]
--
#0 C:\xampp\htdocs\mootales\application\classes\controller\mail.php(91): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 91, Array)
#1 [internal function]: Controller_Mail->action_read()
#2 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Mail))
#3 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#6 {main}
2012-01-26 14:19:32 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\model\mail.php [ 25 ]
2012-01-26 14:19:32 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\model\mail.php [ 25 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 14:24:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Mail::get_amount_mails() ~ APPPATH\classes\controller\website.php [ 23 ]
2012-01-26 14:24:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Mail::get_amount_mails() ~ APPPATH\classes\controller\website.php [ 23 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-01-26 14:24:56 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::where_and() ~ APPPATH\classes\model\mail.php [ 20 ]
2012-01-26 14:24:56 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::where_and() ~ APPPATH\classes\model\mail.php [ 20 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}