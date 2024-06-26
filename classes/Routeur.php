<?php

/**
* Class Routeur
*
* create routes and find controller
*/
class Routeur
{
  private $request;

  private $routes = [
                      "null"                   => ["controller" => 'Home', "method" => 'showHome'],
                      "home.html"              => ["controller" => 'Home', "method" => 'showHome'],
                      "contact.html"           => ["controller" => 'Home', "method" => 'showContact'],
                      "create-devinette.html"  => ["controller" => 'Home', "method" => 'editDev'],
                      "ajout.html"             => ["controller" => 'Home', "method" => 'addDev'],
                      "delete"                 => ["controller" => 'Home', "method" => 'delDev'],
                      "modify.html"            => ["controller" => 'Home', "method" => 'editDev'],
                    ];

  public function __construct($request)
  {
      $this->request = $request;
  }

  public function getRoute()
  {
    $elements = explode('/',$this->request);
    return $elements[0];
  }

  public function getParams()
  {
    $params = null;
    // extract get params
    $elements = explode('/',$this->request);
    unset($elements[0]);


    for($i=1;$i<count($elements);$i++)
    {
      $params[$elements[$i]] = $elements[$i+1];
      $i++;
    }

    // extract post params
    if($_POST)
    {
      foreach($_POST as $key => $val)
      {
        $params[$key] = $val;
      }
    }
    //var_dump($params);exit;
    return $params;
  }

  public function renderController()
  {
    $route = $this->getRoute();
    $params = $this->getParams();


    if(key_exists($route,$this->routes))
    {
      $controller  = $this->routes[$route]['controller'];
      $method      = $this->routes[$route]['method'];

      $currentController = new $controller();
      $currentController->$method($params);

    } else {
      echo '404';
    }
  }
}
