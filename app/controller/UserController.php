<?php 

namespace App\controller;
use App\Database\QueryBuilder;
use App\Factory\UserFactory;
use Flight;

class UserController{
   // public $userFactory;
    protected $table;
    public $user;
    public function __construct(){
        //$this->userFactory = new UserFactory();
        $this->user = new QueryBuilder();
        $this->table = $_ENV['DB_TABLE'];
    }
    public function index(){
        $data = $this->user->getAll($this->table);
        return Flight::json([
            'message'=> "List of users",
            'data'=> $data
        ]);
    }
    public function show($id){
        $data = $this->user->getById($this->table, $id);
        if($data == []){
            return Flight::json([
                'message'=> "User not found",
            ]);
        }else{ 
            return Flight::json([
                'message'=> "List of users by id",
                'data'=> $data
            ]);
        }
    }
    public function store(){
        /*
         * This is a function to create a fake user 
         * $userData = json_encode( $this->userFactory->createUser());
         */
        $data = Flight::request()->data;
        $request = json_encode( $data );
        $this->user->create($request, $this->table );
        return Flight::json([
            'message'=> "User created",
            'data'=> $data
        ]);
    }

    public function update($id){
        $data = Flight::request()->data;
        $request = json_encode( $data );
        $this->user->update($request, $id, $this->table);
        return Flight::json([
            'message'=> "User updated",
            'data'=> $data
        ]);
    }
    public function destroy($id){
        $this->user->delete($this->table,$id);
        return Flight::json([
            'message'=> "User deleted",
        ]);
    }
}