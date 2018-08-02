<?php
namespace app\index\controller;

use think\View;

class Index
{
    public function index()
    {
       return view('index');
    }

    public function hello()
    {
       $view = new View();
       return $view->fetch('hello');
    }
}
