<?php 

namespace App\controller;
use App\Database\QueryBuilder;
use App\Factory\UserFactory;
use Flight;

class UserController{
    public $userFactory;
    protected $table;
    public $user;
    public function __construct(){
        $this->userFactory = new UserFactory();
        $this->user = new QueryBuilder();
        $this->table = $_ENV['DB_TABLE'];
    }
    public function index(){
        $data = $this->user->getAll($this->table);
        return Flight::json([
            'message'=> "List of users",
            'data'=> $data,
        ]);
    }

    public function store(){
        /*
         * This is a function to create a fake user 
         * $userData = json_encode( $this->userFactory->createUser());
         */
        $data = Flight::request()->data;
        $this->user->create($data, $this->table );
        return Flight::json([
            'message'=> "User created",
            'data'=> $data
        ]);
    }
}