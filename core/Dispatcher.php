<?php


class Dispatcher
{
    private $request;

    function __construct()
    {
        $this->request = new Request();

        # Injection Request object
        Router::parse($this->request->url, $this->request);

        # Instantiation $controllerController object
        $controller = $this->loadController();

        $methods = array_diff(get_class_methods($controller), get_class_methods('Controller'));

        if(!in_array($this->request->action, $methods)){

            $this->error("This controller {$this->request->controller} do not the method {$this->request->action}");
        }

        call_user_func_array(
            array($controller, $this->request->action),
            $this->request->params
        );

        # Render default
        $controller->render($this->request->action);
        //print_r($this->request);
    }

    /**
     * @param $message
     */
    function error($message){
        $controller = new Controller($this->request);
        $controller->e404($message);
        die();
    }

    /**
     * @return mixed
     */
    private function loadController()
    {
        $name = ucfirst($this->request->controller).'Controller';
        $file = ROOT.DS.'Controllers'.DS.$name.'.php';

        require $file;

        return new $name($this->request);
    }
}