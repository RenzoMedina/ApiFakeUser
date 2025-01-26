<?php

namespace App\Database;

use PDO;
use PDOException;
use App\Database\Connection;

class QueryBuilder{
    protected $conn;

    public function __construct(){
        $this->conn = Connection::start();
    }

    public function getAll($table){
        $sql = "SELECT * FROM $table";
        try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $resul = $query->fetchAll(PDO::FETCH_OBJ);
            return $resul;
        }catch(PDOException $e){
            echo "Error".$e->getMessage();
        }
    }
    public function getById($table, $id){ 
        $sql = "SELECT * FROM $table WHERE id=?";
        try{
            $query = $this->conn->prepare($sql);
            $query->bindParam(1, $id, PDO::PARAM_INT);
            $query->execute();
            $resul = $query->fetchAll(PDO::FETCH_OBJ);
            return $resul;
        }catch(PDOException $e){
            echo "Error".$e->getMessage();
        }}
    public function create($data, $table){
        $values = json_decode($data, true);

        $sql = "INSERT INTO $table (name,last_name,age,email,phone,address,city,company,job,estado) VALUES (?,?,?,?,?,?,?,?,?,?)";
        try{
            $query = $this->conn->prepare($sql);
            $query->bindParam(1,$values['name'],PDO::PARAM_STR);
            $query->bindParam(2,$values['last_name'],PDO::PARAM_STR);
            $query->bindParam(3,$values['age'],PDO::PARAM_INT);
            $query->bindParam(4, $values['email'],PDO::PARAM_STR);
            $query->bindParam(5, $values['phone'],PDO::PARAM_STR);
            $query->bindParam(6, $values['address'],PDO::PARAM_STR);
            $query->bindParam(7, $values['city'],PDO::PARAM_STR);
            $query->bindParam(8, $values['company'],PDO::PARAM_STR);
            $query->bindParam(9, $values['job'],PDO::PARAM_STR);
            $query->bindParam(10, $values['estado'],PDO::PARAM_BOOL);
            $query->execute();            
        }catch(PDOException $e){
            echo "Error".$e->getMessage();
        }
    }
    public function update($data, $id, $table){
        $fecha = date('Y-m-d H:i:s');
        $values = json_decode($data, true);        
        $sql = "UPDATE $table SET name=?,last_name=?,age=?, email=?,phone=?,address=?,city=?,company=?,job=?,estado=?, update_at=? WHERE id=?";
        try{
            $query = $this->conn->prepare($sql);
            $query->bindParam(1,$values['name'],PDO::PARAM_STR);
            $query->bindParam(2,$values['last_name'],PDO::PARAM_STR);
            $query->bindParam(3,$values['age'],PDO::PARAM_INT);
            $query->bindParam(4, $values['email'],PDO::PARAM_STR);
            $query->bindParam(5, $values['phone'],PDO::PARAM_STR);
            $query->bindParam(6, $values['address'],PDO::PARAM_STR);
            $query->bindParam(7, $values['city'],PDO::PARAM_STR);
            $query->bindParam(8, $values['company'],PDO::PARAM_STR);
            $query->bindParam(9, $values['job'],PDO::PARAM_STR);
            $query->bindParam(10, $values['estado'],PDO::PARAM_BOOL);
            $query->bindParam(11, $fecha,PDO::PARAM_STR);
            $query->bindParam(12, $id,PDO::PARAM_INT);
            $query->execute();            
            
        }catch(PDOException $e){
            echo "Error".$e->getMessage();
        }
    }
    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id=?";
        try{
            $query = $this->conn->prepare($sql);
            $query->bindParam(1,$id, PDO::PARAM_INT);
            $query->execute();
            return true;
        }catch(PDOException $e){
            echo "Error".$e->getMessage();
        }
    }
}