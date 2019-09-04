<?php

namespace AVD\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public $view = 'auth';


    public function __construct()
    {
    }

    /**
     * Perdeu a Senha
     */
    public function lost()
    {
        return view("{$this->view}.lost-password");
    }
}
