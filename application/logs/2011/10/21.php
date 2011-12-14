<?php defined('SYSPATH') or die('No direct script access.'); ?>

2011-10-21 04:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 04:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 04:45:17 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\template.php [ 4 ]
2011-10-21 04:45:17 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\template.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-21 04:45:59 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\template.php [ 4 ]
2011-10-21 04:45:59 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_FUNCTION ~ APPPATH\classes\controller\template.php [ 4 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-21 04:57:59 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 04:57:59 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL / was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 05:07:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 05:07:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 05:13:01 --- ERROR: ErrorException [ 8 ]: Undefined variable: img_descr ~ APPPATH\views\template\index.php [ 9 ]
2011-10-21 05:13:01 --- STRACE: ErrorException [ 8 ]: Undefined variable: img_descr ~ APPPATH\views\template\index.php [ 9 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 9, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-21 05:13:33 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/header.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 05:13:33 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/header.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 05:13:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/header.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 05:13:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/header.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 05:13:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/header.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 05:13:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/header.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 05:14:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/header.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 05:14:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/img/header.png ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 05:29:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style/common.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 05:29:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: assets/style/common.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 05:32:45 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\template\index.php [ 10 ]
2011-10-21 05:32:45 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected T_ECHO ~ APPPATH\views\template\index.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-21 05:34:24 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_descr ~ APPPATH\views\template\index.php [ 10 ]
2011-10-21 05:34:24 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_descr ~ APPPATH\views\template\index.php [ 10 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 10, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-21 05:34:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: site_description ~ APPPATH\views\template\index.php [ 14 ]
2011-10-21 05:34:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: site_description ~ APPPATH\views\template\index.php [ 14 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 14, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-21 05:37:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 05:37:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 06:07:22 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 06:07:22 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 06:37:25 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 06:37:25 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 07:07:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 07:07:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 07:37:31 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 07:37:31 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 07:42:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 24 ]
2011-10-21 07:42:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 24 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 24, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-21 07:42:52 --- ERROR: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 24 ]
2011-10-21 07:42:52 --- STRACE: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template\index.php [ 24 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 24, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-21 07:48:14 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-10-21 07:48:14 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(7): Kohana_View->__get('content')
#1 [internal function]: Controller_Index->action_index()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-21 07:50:23 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-10-21 07:50:23 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(7): Kohana_View->__get('content')
#1 [internal function]: Controller_Index->action_index()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-21 07:50:25 --- ERROR: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\kohana\view.php [ 171 ]
2011-10-21 07:50:25 --- STRACE: Kohana_Exception [ 0 ]: View variable is not set: content ~ SYSPATH\classes\kohana\view.php [ 171 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(7): Kohana_View->__get('content')
#1 [internal function]: Controller_Index->action_index()
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#6 {main}
2011-10-21 07:51:00 --- ERROR: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH\views\template\index.php [ 27 ]
2011-10-21 07:51:00 --- STRACE: ErrorException [ 8 ]: Undefined variable: sidebar ~ APPPATH\views\template\index.php [ 27 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\views\template\index.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\Users\Publis...', 27, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(61): include('C:\Users\Publis...')
#2 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\view.php(343): Kohana_View::capture('C:\Users\Publis...', Array)
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\controller\template.php(44): Kohana_View->render()
#4 [internal function]: Kohana_Controller_Template->after()
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(121): ReflectionMethod->invoke(Object(Controller_Index))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#9 {main}
2011-10-21 08:07:34 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 08:07:34 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 08:37:37 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 08:37:37 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 08:44:14 --- ERROR: ErrorException [ 8 ]: Use of undefined constant Select - assumed 'Select' ~ APPPATH\classes\model\index.php [ 5 ]
2011-10-21 08:44:14 --- STRACE: ErrorException [ 8 ]: Use of undefined constant Select - assumed 'Select' ~ APPPATH\classes\model\index.php [ 5 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\model\index.php(5): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\Users\Publis...', 5, Array)
#1 C:\Users\Publiskais\localhost-maajas\htdocs\application\classes\controller\index.php(7): Model_Index->get_articles()
#2 [internal function]: Controller_Index->action_index()
#3 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Index))
#4 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#7 {main}
2011-10-21 08:44:26 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'Select' ~ APPPATH\classes\model\index.php [ 5 ]
2011-10-21 08:44:26 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'Select' ~ APPPATH\classes\model\index.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-21 08:46:14 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'Select' ~ APPPATH\classes\model\index.php [ 5 ]
2011-10-21 08:46:14 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'Select' ~ APPPATH\classes\model\index.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-21 08:46:41 --- ERROR: ErrorException [ 1 ]: Undefined class constant 'Select' ~ APPPATH\classes\model\index.php [ 5 ]
2011-10-21 08:46:41 --- STRACE: ErrorException [ 1 ]: Undefined class constant 'Select' ~ APPPATH\classes\model\index.php [ 5 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2011-10-21 09:07:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 09:07:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 09:37:43 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 09:37:43 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 09:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 09:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: htdocs/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 09:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 09:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 09:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 09:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 09:39:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2011-10-21 09:39:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#1 {main}
2011-10-21 10:07:46 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 10:07:46 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 10:37:49 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 10:37:49 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 11:07:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 11:07:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 11:37:55 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 11:37:55 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 12:07:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 12:07:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 12:38:01 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 12:38:01 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 13:08:04 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 13:08:04 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 13:38:07 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 13:38:07 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 14:08:10 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 14:08:10 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 14:38:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 14:38:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 15:08:16 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 15:08:16 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 15:38:19 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 15:38:19 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL announce was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}
2011-10-21 23:56:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2011-10-21 23:56:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL scrape was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\Users\Publiskais\localhost-maajas\htdocs\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\Users\Publiskais\localhost-maajas\htdocs\index.php(109): Kohana_Request->execute()
#3 {main}