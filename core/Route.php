<?php
class Route
{
    static function start()
    {
        $controllerName = 'Main';
        $actionName = 'index';
        $param = [
            'id' => []
        ];
        $routes = explode('/', $_SERVER['REQUEST_URI']);

        if ( !empty($routes[2]) )
        {
            $controllerName = ucfirst($routes[2]);
        }

        if ( !empty($routes[3]) )
        {
            $actionName = $routes[3];
        }

        if ( isset($routes[4]) )
        {
            $param['id'] = explode(',', $routes[4]);
        }

        $modelDbName = $controllerName.'Db';
        $modelDbFile = $modelDbName.'.php';
        $modelDbPath = "db/".$modelDbFile;
        if(file_exists($modelDbPath))
        {
            include $modelDbPath;
        }

        $controllerName = $controllerName.'Controller';
        $controllerFile = $controllerName.'.php';
        $controllerPath = "controllers/".$controllerFile;

        if(file_exists($controllerPath))
        {
            include $controllerPath;
        }
        else
        {
            Route::ErrorPage404();
        }

        $modelDb = new $modelDbName();
        $controller = new $controllerName($modelDb);
        $action = $actionName;

        if(method_exists($controller, $action))
        {
            if (!empty($param['id']))
            {
                $controller->$action($param['id']);

            }else{
                $controller->$action();
            }
        }
        else
        {
            Route::ErrorPage404();
        }
    }
    
    function ErrorPage404()
    {
        $host = 'http://'.$_SERVER['HTTP_HOST'].'/';
        header('HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        header('Location:'.$host.'404');
    }
}
