<?php


namespace App\Classes;
use Illuminate\Support\Facades\Storage;

class DataProvider {
    static function getData() {
        return unserialize(Storage::disk('local')->get('tutu.txt'));
    }
}