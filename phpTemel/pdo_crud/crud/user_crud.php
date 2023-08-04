<?php
include 'C:\xampp\htdocs\phpTemel\pdo_crud\crud\connection.php';

class UserCrud
{

        function getAllUsers()
        {
                $connection = new Connection();
                $sql = "SELECT * FROM users";

                $q=$connection->connect()->prepare($sql);
                $q->execute();
                return $q->fetchAll(PDO::FETCH_ASSOC);

        }

        function getUser($id)
        {
                $connection = new Connection();
                $sql = "SELECT * FROM users WHERE `id`=:id" ;

                $q=$connection->connect()->prepare($sql);
                $q->execute(['id'=>$id]);
                return $q->fetch(PDO::FETCH_ASSOC);

        }
        
        function createUser($first_name,$last_name,$phone,$email){

                $connection = new Connection();
                $sql = "INSERT INTO users (`first_name`,`last_name`,`phone`,`email`) VALUES(:first_name,:last_name,:phone,:email)";
                $q = $connection->connect()->prepare($sql);
                $q->execute([
                        'first_name'=>$first_name,
                        'last_name'=>$last_name,
                        'phone'=>$phone,
                        'email'=>$email]);
                return $q->rowCount();


        }

        function updateUser($id,$first_name,$last_name,$phone,$email){
                $connection = new Connection();
                $sql = "UPDATE users SET first_name=:first_name,last_name=:last_name,phone=:phone,email=:email WHERE id=:id";
                $q=$connection->connect()->prepare($sql);
                $q->execute([
                        'id' => $id,
                        'first_name' => $first_name,
                        'last_name' => $last_name,
                        'phone' => $phone,
                        'email' => $email
                ]);

                return $q->rowCount();



        }

     
        function deleteUser($id)
        {
                $connection = new Connection();
                $sql = "DELETE FROM users WHERE `id`=:id" ;

                $q=$connection->connect()->prepare($sql);
                $q->execute(['id'=>$id]);
                return $q->rowCount();

        }











}







?>