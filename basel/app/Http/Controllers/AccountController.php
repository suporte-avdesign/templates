<?php

namespace AVD\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{


    public $view = 'account';


    public function __construct()
    {
    }

    public function index()
    {
        return view("{$this->view}.index");
    }

    public function orders()
    {
        return view("{$this->view}.orders");
    }

    public function wishlist()
    {
        return view("{$this->view}.wishlist");
    }

    public function viewOrder($reference)
    {
        return view("{$this->view}.view-order");
    }

    public function address()
    {
        return view("{$this->view}.address");
    }

    public function editAddress()
    {
        return view("{$this->view}.edit-address");
    }

    public function account()
    {
        return view("{$this->view}.edit-account");
    }
}
