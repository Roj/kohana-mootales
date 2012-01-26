<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-01-20 20:34:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL mail/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-01-20 20:34:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL mail/create was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\xampp\htdocs\mootales\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\xampp\htdocs\mootales\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\xampp\htdocs\mootales\index.php(109): Kohana_Request->execute()
#3 {main}