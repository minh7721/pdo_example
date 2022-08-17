<?php

namespace App\config;

class Config
{
    public function config()
    {
        return [
            'database' => [
                'driver' => 'mysql',
                'host' => 'localhost',
                'dbname' => 'question',
                'username' => 'root',
                'password' => 'password',
                'charset' => 'utf8',
            ]
        ];
    }
}