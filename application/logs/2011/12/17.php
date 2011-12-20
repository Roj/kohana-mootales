<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-17 18:22:22 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2011-12-17 18:22:22 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\xampp\htdocs\mootales\application\classes\model\blog.php(33): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\mootales\application\classes\controller\home.php(11): Model_Blog->get_most_recent()
#4 [internal function]: Controller_Home->action_index()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-17 19:02:42 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fragment/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-12-17 19:02:42 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fragment/5 was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-17 19:02:54 --- ERROR: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\model\fragment.php [ 15 ]
2011-12-17 19:02:54 --- STRACE: ErrorException [ 1 ]: Call to undefined function execute() ~ APPPATH\classes\model\fragment.php [ 15 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-17 19:03:16 --- ERROR: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
2011-12-17 19:03:16 --- STRACE: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\kohana\database\mysql\result.php [ 33 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql\result.php(33): mysql_data_seek(Resource id #80, 'content')
#2 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\result.php(236): Kohana_Database_MySQL_Result->seek('content')
#3 C:\xampp\htdocs\mootales\application\views\fragment.php(3): Kohana_Database_Result->offsetGet('content')
#4 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(343): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\mootales\system\classes\kohana\view.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\mootales\system\classes\kohana\response.php(160): Kohana_View->__toString()
#8 C:\xampp\htdocs\mootales\application\classes\controller\fragment.php(25): Kohana_Response->body(Object(View))
#9 [internal function]: Controller_Fragment->action_view()
#10 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Fragment))
#11 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#12 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#14 {main}