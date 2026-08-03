<?php
class Usuarios extends Controller{
    public function cadastrar(){
        echo $_POST['nome'];
        echo $_POST['email'];
        echo $_POST['senha'];
        
        $this->view('usuarios/cadastrar');
    }
}