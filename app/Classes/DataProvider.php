<?php


namespace App\Classes;

class DataProvider {
    static function getData() {
        return [
            new Thing(1, 7, 'thing 1', 'red'),
            new Thing(12, 23, 'thing 2', 'orange'),
            new Thing(3, 7, 'thing 3', 'blue'),
            new Thing(42, 23, 'thing 4', 'yellow'),
            new Thing(7, 7, 'thing 5', 'ok'),
            new Thing(4, 1, 'thing 6', 'violet'),
            new Thing(9, 23, 'thing 7', 'nope'),
        ];
    }
}