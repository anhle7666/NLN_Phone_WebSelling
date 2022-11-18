<?php
class Core_Controller{
    //Trước tiên khởi tạo các đối tượng Loader
    protected $layout;
    protected $model;
    protected $view;
    public function __construct()
    {
        //load layout
        require "core\loaders\Layout_Loader.php";
        $this->layout=new Layout_Loader;        

        //load view
        require "core\loaders\View_Loader.php";
        $this->view=new View_Loader;

        //load model
        require "core\loaders\Model_Loader.php";
        $this->model=new Model_Loader;
    }
}