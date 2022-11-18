<?php
function load_app()
{
    //require cac file Controller goc
    require "core\Core_Controller.php";
    require "core\Base_Controller.php";

    //require Session
    require "core\Session.php";
    Session::init();

    //load model file
    require "core\Core_model.php";
    require "core\Base_Model.php";

    //Lấy yêu cầu
    $config=require "config\config.php";
    $module=!empty($_GET['module'])? $_GET['module']:$config['default_module'];
    $action=!empty($_GET['action'])? $_GET['action']:$config['default_action'];

    //Phân tích yêu cầu và đến Controller tương ứng để xử lý
    $controller=ucfirst($module)."_Controller";
    $controller_path="app/frontend/controllers/$controller.php";
    if(!file_exists($controller_path))exit("File not found $controller_path");
    require $controller_path;
    if(!class_exists($controller))exit("Class not found $$controller");
    $object=new $controller;
    if(!method_exists($object,$action))exit("Method not found $action of $object");
    $parameter=!empty($_GET['parameter'])?$_GET['parameter']:NULL;
    if($parameter==NULL)$object->$action();
    else $object->$action($parameter);
}
