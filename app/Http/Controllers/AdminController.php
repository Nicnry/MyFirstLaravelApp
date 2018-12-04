<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\DataProvider;

class AdminController extends Controller
{
    /**
     * 
     * @return view admin;
     */
    public function index() {
        $data = DataProvider::getData();
        return view('admin')->with(compact('data'));
    }

    /**
     * 
     * @return value;
     */
    public function edit($personid, $newname) {
        return view('admin')->with(compact('personid', 'newname'));
    }
}
