<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-30 00:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 00:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 00:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 00:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 00:03:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 00:03:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 00:10:39 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:10:39 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:17:18 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:17:18 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:18:15 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\admin.php [ 112 ]
2011-10-30 00:18:15 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\admin.php [ 112 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-30 00:18:28 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\admin.php [ 111 ]
2011-10-30 00:18:28 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\controller\admin.php [ 111 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-30 00:19:36 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:19:36 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:20:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:20:53 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:21:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:21:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:23:35 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 00:23:35 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 00:26:11 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\admin.php [ 117 ]
2011-10-30 00:26:11 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\admin.php [ 117 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-30 00:26:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:26:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:28:06 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:28:06 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:28:51 --- ERROR: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\model\admin.php [ 43 ]
2011-10-30 00:28:51 --- STRACE: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\model\admin.php [ 43 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-30 00:31:45 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:31:45 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:32:09 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:32:09 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:33:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
2011-10-30 00:33:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\admin\index.php [ 18 ]
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
2011-10-30 00:37:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL admin/commentaries was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2011-10-30 00:37:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL admin/commentaries was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 08:35:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 08:35:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 08:42:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 08:42:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 09:12:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 09:12:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 09:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 09:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 09:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 09:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 09:24:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 09:24:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 09:44:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 09:44:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 10:14:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 10:14:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 10:44:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 10:44:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 11:14:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 11:14:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 11:45:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 11:45:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 12:15:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 12:15:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 12:45:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 12:45:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 13:15:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 13:15:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 13:45:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 13:45:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 14:15:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 14:15:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 14:47:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 14:47:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 14:54:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 14:54:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 15:24:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 15:24:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 15:54:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 15:54:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 16:24:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 16:24:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 16:54:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 16:54:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 17:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 17:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 17:54:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 17:54:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 18:24:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 18:24:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 18:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 18:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 18:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 18:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 18:50:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 18:50:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 18:54:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 18:54:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 19:24:28 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 19:24:28 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 19:54:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 19:54:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 20:20:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/ichristmas/christmas-tree.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 20:20:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/ichristmas/christmas-tree.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 20:22:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/ichristmas/christmas-tree.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-30 20:22:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: blogs/ichristmas/christmas-tree.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-30 20:24:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 20:24:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 20:54:38 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 20:54:38 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 21:24:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 21:24:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 21:54:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 21:54:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-30 22:24:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-30 22:24:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}