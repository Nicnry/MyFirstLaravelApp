<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * 
     * @return view admin;
     */
    public function index() {
        return view('admin');
    }

    /**
     * 
     * @return value;
     */
    public function edit($personid, $newname) {
        return view('admin')->with(compact('personid', 'newname'));
    }
}
