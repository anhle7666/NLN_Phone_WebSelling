<?php
class View_Loader
{
    //Chú ý kỹ thuật lấy view bên dưới
    protected $content=[];

    public function load($view, $data = [])
    {
        extract($data);
        $view_path = "app/frontend/views/{$view}.php";
        if (!file_exists($view_path)) exit("File not found $view_path");
        ob_start();
        require $view_path;
        $this->content[]=ob_get_contents();
        ob_clean();

    }

    public function show(){
        foreach($this->content as $content)echo $content;
    }
}
