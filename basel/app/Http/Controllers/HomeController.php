<?php

namespace AVD\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $view = 'home';


    public function __construct()
    {
    }

    public function index()
    {
        return view("{$this->view}.index");
    }

    public function fashion1()
    {
        return view("{$this->view}.fashion1");
    }

    public function fashion2()
    {
        return view("{$this->view}.fashion2");
    }

    public function beer()
    {
        return view("{$this->view}.beer");
    }

    public function furniture()
    {
        return view("{$this->view}.furniture");
    }

    public function sushi()
    {
        return view("{$this->view}.sushi");
    }

    public function marketplace()
    {
        return view("{$this->view}.marketplace");
    }

    public function medical()
    {
        return view("{$this->view}.medical");
    }

    public function lingerie()
    {
        return view("{$this->view}.lingerie");
    }

    public function electronics()
    {
        return view("{$this->view}.electronics");
    }

    public function bakery()
    {
        return view("{$this->view}.bakery");
    }

    public function organic()
    {
        return view("{$this->view}.organic");
    }

    public function destroy()
    {
        return view("{$this->view}.");
    }
}
