<?php

    class UserModel {

        public function create($nome, $endereco, $email, $senha){


            echo "Nome: " .$nome. '<br>'. "Endereco: " . $endereco.'<br>'. "Email: ". $email . '<br>'. "senha: ". $senha ;

        }

        public function delete(){

            echo "delete";


        }

        public function update(){

            echo "update";

        }

        public function findAll(){

            echo "Find All";


        }




        
    };



?>