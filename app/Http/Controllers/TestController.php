<?php

namespace App\Http\Controllers;


class TestController extends Controller
{


public function mohamed(){
    dd('Hello To Mohamed Controller');
}


public function printName($name){
    dd('Hello  ' .$name .' To Controller');
}
}
