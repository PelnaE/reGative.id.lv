<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-29 00:00:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 00:00:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 00:05:48 --- ERROR: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-10-29 00:05:48 --- STRACE: View_Exception [ 0 ]: The requested view digg could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(137): Kohana_View->set_filename('digg')
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(30): Kohana_View->__construct('digg', NULL)
#2 C:\Users\Publiskais\localhost-maajas\htdocs\modules\pagination\classes\kohana\pagination.php(245): Kohana_View::factory('digg')
#3 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(13): Kohana_Pagination->render('digg')
#4 [internal function]: Controller_Index->action_index()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-29 00:10:47 --- ERROR: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT * FROM ieraksti WHERE virsraksts like '%ar%' OR slug like '%ar%' OR saturs like '%ar%' LIMIT 0, NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-29 00:10:47 --- STRACE: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'NULL' at line 1 [ SELECT * FROM ieraksti WHERE virsraksts like '%ar%' OR slug like '%ar%' OR saturs like '%ar%' LIMIT 0, NULL ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM i...', false, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\index.php(21): Kohana_Database_Query->execute()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\query.php(12): Model_Index->get_articles_from_query('ar', 0, NULL)
#3 [internal function]: Controller_Query->action_index()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Query))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-29 08:34:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 08:34:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 08:38:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 08:38:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 09:15:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 09:15:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 09:21:54 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 09:21:54 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 09:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 09:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 09:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 09:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 09:26:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 09:26:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 09:27:15 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::lang() ~ MODPATH\pagination\views\pagination\digg.php [ 14 ]
2011-10-29 09:27:15 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::lang() ~ MODPATH\pagination\views\pagination\digg.php [ 14 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 09:29:38 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH\pagination\views\pagination\digg.php [ 24 ]
2011-10-29 09:29:38 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH\pagination\views\pagination\digg.php [ 24 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\pagination\views\pagination\digg.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 24, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\modules\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(14): Kohana_Pagination->render()
#5 [internal function]: Controller_Index->action_index()
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-29 09:31:28 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH\pagination\views\pagination\digg.php [ 24 ]
2011-10-29 09:31:28 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH\pagination\views\pagination\digg.php [ 24 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\pagination\views\pagination\digg.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 24, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\modules\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(14): Kohana_Pagination->render()
#5 [internal function]: Controller_Index->action_index()
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-29 09:32:15 --- ERROR: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH\pagination\views\pagination\digg.php [ 78 ]
2011-10-29 09:32:15 --- STRACE: ErrorException [ 8 ]: Undefined variable: url ~ MODPATH\pagination\views\pagination\digg.php [ 78 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\pagination\views\pagination\digg.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 78, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\modules\pagination\classes\kohana\pagination.php(249): Kohana_View->render()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(14): Kohana_Pagination->render()
#5 [internal function]: Controller_Index->action_index()
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-29 09:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 09:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 10:22:00 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 10:22:00 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 10:52:03 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 10:52:03 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 11:22:06 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 11:22:06 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 11:26:46 --- ERROR: ErrorException [ 1 ]: Call to undefined function start_session() ~ APPPATH\classes\controller\admin.php [ 4 ]
2011-10-29 11:26:46 --- STRACE: ErrorException [ 1 ]: Call to undefined function start_session() ~ APPPATH\classes\controller\admin.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 11:28:45 --- ERROR: ErrorException [ 1 ]: Class 'Datababase' not found ~ APPPATH\classes\model\admin.php [ 5 ]
2011-10-29 11:28:45 --- STRACE: ErrorException [ 1 ]: Class 'Datababase' not found ~ APPPATH\classes\model\admin.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 11:28:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: parole ~ APPPATH\classes\model\admin.php [ 8 ]
2011-10-29 11:28:59 --- STRACE: ErrorException [ 8 ]: Undefined variable: parole ~ APPPATH\classes\model\admin.php [ 8 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\admin.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 8, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\admin.php(9): Model_Admin->check_us_pass('reGative', 'suns')
#2 [internal function]: Controller_Admin->action_index()
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-29 11:29:55 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 22 ]
2011-10-29 11:29:55 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 22 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 22, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-29 11:31:40 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_title ~ APPPATH\views\admin\index.php [ 6 ]
2011-10-29 11:31:40 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_title ~ APPPATH\views\admin\index.php [ 6 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\admin\index.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 6, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(22): Kohana_View->__toString()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#10 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-29 11:37:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-29 11:37:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/logout was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 11:37:13 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 22 ]
2011-10-29 11:37:13 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 22 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 22, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-29 11:37:29 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 22 ]
2011-10-29 11:37:29 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 22 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 22, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-29 11:51:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/write was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-29 11:51:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/write was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 11:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 11:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 12:18:08 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 27 ]
2011-10-29 12:18:08 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 27 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 27, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-29 12:22:12 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 12:22:12 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 12:22:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/write was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-29 12:22:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/write was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 12:22:51 --- ERROR: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\views\template\index.php [ 22 ]
2011-10-29 12:22:51 --- STRACE: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\views\template\index.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', 'C:\Users\Publis...', 22, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(22): session_start()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-29 12:22:55 --- ERROR: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\views\template\index.php [ 22 ]
2011-10-29 12:22:55 --- STRACE: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\views\template\index.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', 'C:\Users\Publis...', 22, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(22): session_start()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#10 {main}
2011-10-29 12:26:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 12:26:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 12:52:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 12:52:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 13:22:18 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 13:22:18 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 13:52:21 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 13:52:21 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 14:20:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 14:20:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 14:51:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 14:51:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 14:59:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 14:59:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 15:29:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 15:29:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 16:08:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 16:08:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 16:22:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 16:22:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 16:52:47 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 16:52:47 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 16:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 16:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 16:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 16:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 16:53:35 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 16:53:35 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 17:22:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 17:22:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 17:22:50 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 17:22:50 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 17:27:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 17:27:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 17:28:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 17:28:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 17:28:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 17:28:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 17:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 17:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 17:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 17:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 17:30:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-29 17:30:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-29 17:51:48 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL write was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 17:51:48 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL write was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 17:52:37 --- ERROR: View_Exception [ 0 ]: The requested view admin/write could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2011-10-29 17:52:37 --- STRACE: View_Exception [ 0 ]: The requested view admin/write could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(137): Kohana_View->set_filename('admin/write')
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(30): Kohana_View->__construct('admin/write', NULL)
#2 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\admin.php(55): Kohana_View::factory('admin/write')
#3 [internal function]: Controller_Admin->action_write()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-29 17:52:53 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 17:52:53 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 18:09:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/write was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-29 18:09:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/admin/write was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 18:16:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-29 18:16:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/articles was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 18:22:56 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 18:22:56 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 18:49:03 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\admin.php [ 71 ]
2011-10-29 18:49:03 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_DOUBLE_ARROW ~ APPPATH\classes\controller\admin.php [ 71 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 18:52:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Admin::load_article() ~ APPPATH\classes\controller\admin.php [ 70 ]
2011-10-29 18:52:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Admin::load_article() ~ APPPATH\classes\controller\admin.php [ 70 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 18:52:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 18:52:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 18:53:48 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-29 18:53:48 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\admin\index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 18, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-29 18:54:51 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-29 18:54:51 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\admin\index.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 18, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-29 18:55:35 --- ERROR: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\admin\articles.php [ 1 ]
2011-10-29 18:55:35 --- STRACE: ErrorException [ 8 ]: Undefined variable: articles ~ APPPATH\views\admin\articles.php [ 1 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\admin\articles.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 1, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\admin\index.php(18): Kohana_View->__toString()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#10 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-29 18:56:08 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\articles.php [ 1 ]
2011-10-29 18:56:08 --- STRACE: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\admin\articles.php [ 1 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\admin\articles.php(1): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\Users\Publis...', 1, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\admin\index.php(18): Kohana_View->__toString()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Admin))
#10 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2011-10-29 18:57:15 --- ERROR: ErrorException [ 8 ]: Undefined index: a ~ APPPATH\classes\controller\admin.php [ 69 ]
2011-10-29 18:57:15 --- STRACE: ErrorException [ 8 ]: Undefined index: a ~ APPPATH\classes\controller\admin.php [ 69 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\admin.php(69): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Publis...', 69, Array)
#1 [internal function]: Controller_Admin->action_articles()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-29 19:23:02 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 19:23:02 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 19:53:05 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 19:53:05 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 20:23:08 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 20:23:08 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 20:34:24 --- ERROR: ErrorException [ 1 ]: Call to undefined method Model_Admin::send_article() ~ APPPATH\classes\controller\admin.php [ 57 ]
2011-10-29 20:34:24 --- STRACE: ErrorException [ 1 ]: Call to undefined method Model_Admin::send_article() ~ APPPATH\classes\controller\admin.php [ 57 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:37:37 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'date' in 'field list' [ INSERT INTO ieraksti SET date = 1319909856, virsraksts = 'Jauns raksts', slug = 'jauns-raksts', saturs = 'Jā, tik tiešām, jauns ieraksts top šajā blogā. Nice. :)' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-29 20:37:37 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'date' in 'field list' [ INSERT INTO ieraksti SET date = 1319909856, virsraksts = 'Jauns raksts', slug = 'jauns-raksts', saturs = 'Jā, tik tiešām, jauns ieraksts top šajā blogā. Nice. :)' ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO ier...', false, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\admin.php(27): Kohana_Database_Query->execute()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\admin.php(57): Model_Admin->send_article('Jauns raksts', 'jauns-raksts', 'J??, tik tie???...')
#3 [internal function]: Controller_Admin->action_write()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Admin))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-29 20:38:00 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\model\admin.php [ 26 ]
2011-10-29 20:38:00 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\model\admin.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-29 20:38:57 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT * FROM komentari WHERE artcl_id = (('4'), ('5')) ORDER BY com_id DESC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-29 20:38:57 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT * FROM komentari WHERE artcl_id = (('4'), ('5')) ORDER BY com_id DESC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM k...', false, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\index.php(36): Kohana_Database_Query->execute()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(14): Model_Index->find_commentars(Array)
#3 [internal function]: Controller_Article->action_index()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-29 20:39:20 --- ERROR: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT * FROM komentari WHERE artcl_id = (('4'), ('5')) ORDER BY com_id DESC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2011-10-29 20:39:20 --- STRACE: Database_Exception [ 1241 ]: Operand should contain 1 column(s) [ SELECT * FROM komentari WHERE artcl_id = (('4'), ('5')) ORDER BY com_id DESC ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT * FROM k...', false, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\index.php(36): Kohana_Database_Query->execute()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(14): Model_Index->find_commentars(Array)
#3 [internal function]: Controller_Article->action_index()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#8 {main}
2011-10-29 20:53:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 20:53:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 21:23:17 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 21:23:17 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 21:53:20 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 21:53:20 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 22:23:23 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 22:23:23 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 22:53:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 22:53:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 23:23:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 23:23:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-29 23:53:32 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-29 23:53:32 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}