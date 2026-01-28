<?php

namespace App\Http\Controllers;

class ApplicationController
{

    public function admin()
    {
        return view('admin');
    }

    public function seller()
    {
        return view('seller');
    }

    public function buyer()
    {
        return view('buyer');
    }

}
