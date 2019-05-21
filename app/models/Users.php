<?php
namespace App\models;
class Users
{
    public function getUser()
    {
        return
            [
               [ 
                   'name' => 'Вася',
                    'email' => 'vasya@gmail.com',
                    'tel' => '8093123455' 
               ]
            ];
    }
}