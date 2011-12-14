<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-12-14 00:02:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL fastenv was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-12-14 00:02:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL fastenv was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-12-14 15:17:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-14 15:17:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: pma/scripts/setup.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-14 15:17:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-14 15:17:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: myadmin/scripts/setup.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-14 15:17:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-14 15:17:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: MyAdmin/scripts/setup.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-14 15:57:46 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'regative_blogs'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2011-12-14 15:57:46 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'regative_blogs'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Users\Publiskais\localhost-maajas\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#2 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\index.php(8): Kohana_Database_Query->execute()
#3 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(8): Model_Index->get_count()
#4 [internal function]: Controller_Index->action_index()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-12-14 16:27:46 --- ERROR: ErrorException [ 1 ]: Class 'Model_article' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
2011-12-14 16:27:46 --- STRACE: ErrorException [ 1 ]: Class 'Model_article' not found ~ SYSPATH\classes\kohana\model.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-12-14 16:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-14 16:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-14 16:27:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-14 16:27:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-14 16:27:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-12-14 16:27:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-12-14 16:28:07 --- ERROR: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'regative_blogs'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
2011-12-14 16:28:07 --- STRACE: Database_Exception [ 2 ]: mysql_connect() [function.mysql-connect]: Access denied for user 'regative_blogs'@'localhost' (using password: YES) ~ MODPATH\database\classes\kohana\database\mysql.php [ 67 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\database\classes\kohana\database\mysql.php(171): Kohana_Database_MySQL->connect()
#1 C:\Users\Publiskais\localhost-maajas\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#2 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\article.php(5): Kohana_Database_Query->execute()
#3 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(8): Model_Article->get_count()
#4 [internal function]: Controller_Index->action_index()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}