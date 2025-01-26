<?php
use App\Controller\UserController;

/*
 * Routes of the API User
 */
Flight::group("/api/v1", function(){
    $user = UserController::class;
    Flight::route('GET /user',[$user,'index']);
    Flight::route('GET /user/@id',[$user,'show']);
    Flight::route('POST /user',[$user,'store']);
    Flight::route('PUT /user/@id',[$user,'update']);
    Flight::route('DELETE /user/@id',[$user,'destroy']); 
});

Flight::start();