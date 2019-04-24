<?php

class contatosController extends Controller{
    public function index(){}

    public function add(){
        $dados = array(
            'error' => ''
        );

        if(!empty($_GET['error'])){
            $dados['error'] = $_GET['error'];
        }

        $this->loadTemplate('add',$dados);
    }

    public function add_save(){
        if(!empty($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);

            $contatos = new Contatos();
            if($contatos->add($nome, $email)){
                header("Location: ".BASE_URL);
            }else{
                header("Location: ".BASE_URL.'contatos/add?error=exits');
            }
        }else{
            header("Location: ".BASE_URL.'contatos/add');
        }
    }
}