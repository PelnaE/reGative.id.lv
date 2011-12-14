<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-11-04 13:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-04 13:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-04 13:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-04 13:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-04 13:14:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-04 13:14:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-04 13:28:42 --- ERROR: ErrorException [ 2 ]: str_replace() expects at least 3 parameters, 2 given ~ APPPATH\classes\controller\article.php [ 22 ]
2011-11-04 13:28:42 --- STRACE: ErrorException [ 2 ]: str_replace() expects at least 3 parameters, 2 given ~ APPPATH\classes\controller\article.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'str_replace() e...', 'C:\Users\Publis...', 22, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(22): str_replace(' ', '4')
#2 [internal function]: Controller_Article->action_index()
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-04 13:29:02 --- ERROR: ErrorException [ 2 ]: str_replace() expects at least 3 parameters, 2 given ~ APPPATH\classes\controller\article.php [ 22 ]
2011-11-04 13:29:02 --- STRACE: ErrorException [ 2 ]: str_replace() expects at least 3 parameters, 2 given ~ APPPATH\classes\controller\article.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(2, 'str_replace() e...', 'C:\Users\Publis...', 22, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(22): str_replace(' ', '4')
#2 [internal function]: Controller_Article->action_index()
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-04 17:01:15 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-04 17:01:15 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-04 17:01:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-04 17:01:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-04 17:02:36 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\controller\article.php [ 26 ]
2011-11-04 17:02:36 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\controller\article.php [ 26 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-04 17:03:03 --- ERROR: ErrorException [ 2 ]: Missing argument 5 for Model_Index::send_commentar(), called in C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php on line 32 and defined ~ APPPATH\classes\model\index.php [ 30 ]
2011-11-04 17:03:03 --- STRACE: ErrorException [ 2 ]: Missing argument 5 for Model_Index::send_commentar(), called in C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php on line 32 and defined ~ APPPATH\classes\model\index.php [ 30 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\index.php(30): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\Users\Publis...', 30, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(32): Model_Index->send_commentar('reGative', '4', '????????????!', '1320418983')
#2 [internal function]: Controller_Article->action_index()
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-04 17:18:54 --- ERROR: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\views\template\index.php [ 21 ]
2011-11-04 17:18:54 --- STRACE: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\views\template\index.php [ 21 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', 'C:\Users\Publis...', 21, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(21): session_start()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#5 [internal function]: Kohana_Controller_Template->after()
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#10 {main}
2011-11-04 17:19:12 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_AS ~ APPPATH\views\index\article.php [ 1 ]
2011-11-04 17:19:12 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_AS ~ APPPATH\views\index\article.php [ 1 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-11-04 17:27:57 --- ERROR: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\controller\article.php [ 23 ]
2011-11-04 17:27:57 --- STRACE: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\controller\article.php [ 23 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Publis...', 23, Array)
#1 [internal function]: Controller_Article->action_index()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-04 17:47:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\article.php [ 18 ]
2011-11-04 17:47:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\controller\article.php [ 18 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 18, Array)
#1 [internal function]: Controller_Article->action_index()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-04 17:47:33 --- ERROR: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\views\index\article.php [ 28 ]
2011-11-04 17:47:33 --- STRACE: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\views\index\article.php [ 28 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\index\article.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 28, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(21): Kohana_View->__toString()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#8 [internal function]: Kohana_Controller_Template->after()
#9 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Article))
#10 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#11 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#12 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#13 {main}
2011-11-04 17:52:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-11-04 17:52:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-11-04 19:05:20 --- ERROR: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\controller\article.php [ 23 ]
2011-11-04 19:05:20 --- STRACE: ErrorException [ 8 ]: Undefined index: token ~ APPPATH\classes\controller\article.php [ 23 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\Users\Publis...', 23, Array)
#1 [internal function]: Controller_Article->action_index()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2011-11-04 19:48:16 --- ERROR: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\classes\controller\article.php [ 22 ]
2011-11-04 19:48:16 --- STRACE: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH\classes\controller\article.php [ 22 ]
--
#0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', 'C:\Users\Publis...', 22, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\article.php(22): session_start()
#2 [internal function]: Controller_Article->action_index()
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Article))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2011-11-04 20:17:07 --- ERROR: ErrorException [ 1 ]: Call to undefined function hmtmlspecialchars() ~ APPPATH\views\index\article.php [ 13 ]
2011-11-04 20:17:07 --- STRACE: ErrorException [ 1 ]: Call to undefined function hmtmlspecialchars() ~ APPPATH\views\index\article.php [ 13 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}