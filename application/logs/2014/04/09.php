<?php defined('SYSPATH') or die('No direct script access.'); ?>

2014-04-09 21:11:22 --- ERROR: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2014-04-09 21:11:22 --- STRACE: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 C:\xampp\htdocs\mootales\application\classes\model\blog.php(34): Kohana_Database_Query->execute()
#3 C:\xampp\htdocs\mootales\application\classes\controller\home.php(11): Model_Blog->get_most_recent()
#4 [internal function]: Controller_Home->action_index()
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Home))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#9 {main}
2014-04-09 21:12:23 --- ERROR: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
2014-04-09 21:12:23 --- STRACE: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH\database\classes\kohana\database.php [ 78 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}