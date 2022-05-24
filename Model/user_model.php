<?php

    require_once "../util/database.php";

    class UserModel{

        public function create($name, $address, $email, $password){
            $db = new Database();

            $con = $db->connect(); //-> faz com que o connect seja um objeto

            $sql = "INSERT INTO user (name, email, password, address) VALUES (:name, :email, :password, :address)";

            $stmt = $con->prepare($sql);

            $result = $stmt-> execute(['name' =>$name, 'email'=> $email,  'password' => sha1($password), 'address' => $address ]);           



        }

        public function delete(){
            echo "delete";
        }
        public function update(){
            echo "update";
        }
        public function findall(){
            echo "find all";
        }




    }





?>