<?php
class Base_Controller extends Core_Controller{  
    //Cong việc sau cùng của Controller là hiển thị ra màn hình  
    protected $title="Trang chủ";
    protected $search="";
    public function __destruct()
    {
        ob_start();
        $this->view->show();
        $content=ob_get_contents();
        ob_clean();
        $this->layout->load([
            'content'=>$content,
            'title'=>$this->title,
            'search'=>$this->search
        ]);
    }
}