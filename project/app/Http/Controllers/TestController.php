<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Input;
class TestController extends Controller
{
    public function testfunction(){
        $name=Input::get('testname');
        if($name=='laravel'){
            echo "success";
        }
        else if($name=='found'){
            echo "info";
        }
        else{
            echo "error";
        }
    }
}
