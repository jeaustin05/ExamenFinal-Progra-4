<?php
namespace controller;

use controller\BaseController;
use model\User;

class UserController implements BaseController 
{

    public function show() 
    {
        return "views/principal";
    }

    #no se utiliza logins ni base de datos
}