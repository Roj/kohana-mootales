<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-01 15:03:30 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-02-01 15:03:30 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
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
2012-02-01 20:32:58 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2012-02-01 20:32:58 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: [2002] No se ha podido establecer conexión ya que el equipo de destino  (trying to connect via tcp://localhost:3306) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
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