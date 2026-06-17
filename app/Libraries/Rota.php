<?php
class Rota{
    private $controlador = "Paginas";
    public function __construct(){
        $url = $this->url() ? $this->url() : [0];
        if(file_exists('../app/Controllers'.ucwords($url[0]).'.php')){
            $this->controlador = ucwords($url[0]);
            unset($url[0]);
        }
        require_once '../app/Controllers/'.$this->controlador.'.php';
        $this->controlador = new $this->controlador;

        var_dump($this); 
        
    }//fim da função construtor
    private function url(){
        //o filter sanitize url remove todos os caracteres ilegais de uma url
        $url = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);
        if(isset($url)){
            //trim - Retira o espaço no inicio e final de uma string
            //rtrim - Retira o espaço em branco ou outros caracteres do final da string
            $url = trim(rtrim($url,'/'));
            //explode - divide uma string em strings, retorna um array
            $url = explode('/', $url);
            return $url; //retorna a url
        }//fim do if
    }//fim da função url
}// fim da classe Rota