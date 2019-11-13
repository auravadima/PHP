<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestOne 
{
    private $name;
    private $age;
    private $male;

    public function getTypes() 
    {
        return [
            'name' => 'string',
            'age' => 'int',
            'male' => 'boolean'
        ];
    }
}

class TestController extends Controller
{
    public function getOne() 
    {
        $testOne = new TestOne();
        return $testOne->getTypes();
    }

    public function setOne(Request $request) 
    {
        return "OK";
    }
}
