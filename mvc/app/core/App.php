<?php

class App
{
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        if (file_exists('../app/controllers/' . ucwords(strtolower($url[0])) . ".php")) {
            $this->controller = ucwords(strtolower($url[0]));
            unset($url[0]);
        }

        require_once "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        if (isset($url[1])) {
            if (method_exists($this->controller, strtolower($url[1]))) {
                $this->method = strtolower($url[1]);
                unset($url[1]);
            }
        }


        // params
        if (!empty($url)) {
            $this->params = array_values($url);
        }


        // jalankan controller dan method, kirim params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            $url = rtrim($_GET["url"], "/");
            $url = filter_var($url, FILTER_SANITIZE_URL);
            return array_slice(explode("/", $url), 2);
        }
        return [];
    }
}