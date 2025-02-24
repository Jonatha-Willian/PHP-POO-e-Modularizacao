<?php
class User {

    use Logger;

    public function createUser(){
        echo 'Usuário Criado';
        $this-> log('Usuario Criado');
    }

    public function loginUser(){
        echo 'usuári lagado';
        $this-> log('Usuario Logado');
    }
}