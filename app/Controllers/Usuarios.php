<?php
class Usuarios extends Controller{
    public function cadastrar(){
        $formulario = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if(isset($formulario)):
            $dados = [
                'nome' => trim($formulario['nome']),
                'email' =>trim($formulario['email']),
                'senha' =>trim($formulario['senha']),
                'confirma_senha' =>trim($formulario['confirma_senha'])
            ];
            var_dump($formulario);
            //verifica se o campo nome está vazio com a função empty
            if(empty($formulario['nome'])):
                $dados['nome_erro'] = "Preencha o campo nome";
            endif;
            if(empty($formulario['email'])):
                $dados['email_erro'] = "Preencha o campo email";
            endif;
            if(empty($formulario['senha'])):
                $dados['senha_erro'] = "Preencha o campo senha";
                elseif(strlen($formulario['senha']) < 7):
                    $dados['senha_erro'] = "A senha deve ter no minimo 6 caracteres";
            endif;
            if(empty($formulario['confirma_senha'])):
                $dados['confirma_senha_erro'] = "Preencha o campo confirma senha";
            else:
                if($formulario['senha'] != $formulario['confirma_senha']):
                    $dados['confirma_senha_erro'] = "Senhas diferentes";
                endif;
            endif;
        else:
            $dados = [
                'nome'=> '',
                'email'=> '',
                'senha' =>'',
                'confirma_senha' => '',
                'nome_erro' => '',
                'email_erro' => '',
                'senha_erro' => '',
                'confirma_senha_erro' => '',
            ];
        endif;     
        $this->view('usuarios/cadastrar', $dados);
    }//fim da função cadastrar
}//fim da classe Usuario