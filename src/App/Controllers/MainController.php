<?php

namespace App\Controllers;
use App\Models\Users;
use App\Request;
//use App\View;
use App\Db;
use Laminas\Diactoros\Response;

class MainController
{
    public function __construct()
    {
        $db = new Db();
        //$this->view = new View(__DIR__ . '/../../../views');
        $this->users = new Users($db);
    }

    public function index()
    {
        $body = '';
        if(isset($_COOKIE['token'])){
            $user = $this->users->getByToken($_COOKIE['token']);
            if(isset($user['token']) && $_COOKIE['token'] == $user['token']){
                $body = 'Привет, ' . $user['login'];
            }
        } else {
            $body = 'Привет гость.';
        }

        $response = new Response;
        $response->getBody()->write($body);
        return $response;
    }

    public function create()
    {
        //
    }

    public function update()
    {
        //
    }

    public function read()
    {
        //
    }
}