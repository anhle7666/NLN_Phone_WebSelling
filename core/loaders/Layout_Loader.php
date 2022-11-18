<?php
class Layout_Loader
{
    //Lựa chọn layout phù hợp: chưa đăng nhập, đăng nhập khách và admin
    protected $layout = 'default';
    public function __construct()
    {   
        if(Session::get('admin')==true)$this->layout="admin";     
        else if(Session::get('login')==true)$this->layout="signIned";
        else $this->layout="default";
    }
    public function set($layout){
        $this->layout=$layout;
    }
    public function load($data=[])
    {
        extract($data); 
        $layout_path="app/frontend/views/layouts/{$this->layout}.php";
        if(!file_exists($layout_path))exit("File not found $layout_path");
        require $layout_path;
    }
}
