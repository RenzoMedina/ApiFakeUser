<?php

namespace App\Factory;

class UserFactory extends \Faker\Factory{

    public static function createUser($locale = \Faker\Factory::DEFAULT_LOCALE){
        $faker = \Faker\Factory::create($locale);
        $user = new \App\Model\User();
        $user->personal =[
            'name'=>$faker->name,
            'last_name'=>$faker->lastName,
            'age'=> $faker->numberBetween(1,80),
            'email' => $faker->email,
            'phone' => $faker->phoneNumber(),
            'address' =>$faker->address,
            'city'=> $faker->city,
            'company'=> $faker->company,
            'job'=> $faker->jobTitle,
            'estado'=> $faker->boolean
        ];
        return $user;
    }
}