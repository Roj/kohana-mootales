<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-02-03 03:12:50 --- ERROR: Database_Exception [ 1048 ]: Column 'receiver_id' cannot be null [ INSERT INTO `mail` (`author_id`, `receiver_id`, `title`, `content`, `when`) VALUES ('14', NULL, 'admin', 'testtt', '2012-02-03 03:12:50') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-02-03 03:12:50 --- STRACE: Database_Exception [ 1048 ]: Column 'receiver_id' cannot be null [ INSERT INTO `mail` (`author_id`, `receiver_id`, `title`, `content`, `when`) VALUES ('14', NULL, 'admin', 'testtt', '2012-02-03 03:12:50') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\xampp\htdocs\mootales\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `ma...', false, Array)
#1 C:\xampp\htdocs\mootales\application\classes\model\mail.php(5): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\mootales\application\classes\controller\mail.php(93): Model_Mail->create(Array)
#3 [internal function]: Controller_Mail->action_create()
#4 C:\xampp\htdocs\mootales\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Mail))
#5 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#8 {main}