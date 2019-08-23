<?php

namespace AVD\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public $view = 'shop';


    public function __construct()
    {
    }


    public function grid()
    {
        return view("{$this->view}.grid");
    }

    public function quick()
    {
        return view("{$this->view}.quick");
    }

    public function standard()
    {
        return view("{$this->view}.standard");
    }

    public function hoverInfo()
    {
        return view("{$this->view}.hover-info");
    }

    public function masonryalt()
    {
        return view("{$this->view}.masonryalt");
    }

    public function banner()
    {
        return view("{$this->view}.banner");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
