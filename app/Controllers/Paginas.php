<?php

class Paginas extends Controller{
    public function index(){
        $this->view('home');
    }//fim da função index

    public function sobre($id){
    echo $id. "<hr>";
    }//fim da função sobre

}//fim da classe Paginas

?>