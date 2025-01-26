<?php

use App\Controller\UserController;

$user = UserController::class;

Flight::route('GET /api',[$user,'index']);
Flight::route('POST /api',[$user,'store']);

Flight::start();