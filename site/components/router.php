<?php

class router
{
	private $routes;
    /**
     * router constructor.
     */
	public function __construct()
	{
		$routesPath = ROOT.'/config/routes.php';
		$this->routes = include($routesPath);
	}

    /**
     * @return string Полученный сайт, который выйзывает пользователь. Пример:
     * example/site/index/
     */

	private function getURI()
	{
		if (!empty($_SERVER['REQUEST_URI'])) {
            $server = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
		return trim($server, '/');
		}
	}

    /**
     * Производит распределение по Controller'у и Action
     */
	public function run()
	{
		$uri = $this->getURI();

		foreach ($this->routes as $uriPattern => $path) {

			if(preg_match("~$uriPattern~", $uri)) {
				$internalRoute = preg_replace("~$uriPattern~", $path, $uri);
				$segments = explode('/', $internalRoute);
				$controllerName = array_shift($segments).'Controller';
				$controllerName = ucfirst($controllerName);
				$actionName = 'action'.ucfirst(array_shift($segments));
				$parameters = $segments;
				$controllerFile = ROOT . '/controllers/' .$controllerName. '.php';
				if (file_exists($controllerFile)) {
					include_once($controllerFile);
				}
				$controllerObject = new $controllerName;
				$result = call_user_func_array(array($controllerObject, $actionName), $parameters);
				if ($result != null) {
					break;
				}
			}

		}
	}
}