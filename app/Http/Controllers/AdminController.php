<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * 
     * @return 'ok';
     */
    public function index() {
        return view('admin');
    }
}
