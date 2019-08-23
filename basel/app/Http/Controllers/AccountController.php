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

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
