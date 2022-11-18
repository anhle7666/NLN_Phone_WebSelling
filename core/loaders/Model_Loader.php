<?php
class Model_Loader{
    //Tạo đối tượng model để thông qua đó lấy data
    public function load($model_name){
        $model=ucfirst($model_name)."_Model";
        $model_path="app/frontend/models/{$model}.php";

        if(!file_exists($model_path))exit("File not found $model_path");
        require $model_path;
        //Chú ý dòng dưới: giúp tạo đối tượng model có tên được chỉ định
        $this->$model_name=new $model;
    }
}