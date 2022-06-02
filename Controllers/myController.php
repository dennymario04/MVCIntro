<?php 
class MyController{
    public function Contoh(){
        $model = new Mymodel();
        $view = new Myview();
        $view -> send($model->data());
    }
}



?>