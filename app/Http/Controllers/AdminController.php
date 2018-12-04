<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\DataProvider;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * 
     * @return view admin;
     */
    public function index() {
        $data = DataProvider::getData();
        /* Storage::disk('local')->put('tutu.txt', serialize($data)); */
        return view('admin')->with(compact('data'));
    }

    /**
     * 
     * @return value;
     */
    public function edit($personid, $newname) {
        return view('admin')->with(compact('personid', 'newname'));
    }

    public function hide($id) {
        $things = DataProvider::getData();
        $data = array_filter($things, function ($thing) use ($id) {
            return $thing->getId() != $id;
        });
        Storage::disk('local')->put('tutu.txt', serialize($data));
        return view('admin')->with(compact('data'));
    }

    public function delete() {
        return;
    }
}
