<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestOne 
{
    private $name;
    private $age;
    private $male;

    public function getAll() 
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'male' => $this->male
        ];
    }

    public function getTypes() 
    {
        return [
            'name' => 'string',
            'age' => 'int',
            'male' => 'boolean'
        ];
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setGender($male) {
        $this->male = $male;
    }
}

class TestController extends Controller
{
    public function getOne() 
    {
        $testOne = new TestOne();
        return json_encode($testOne->getTypes());
    }

    public function setOne(Request $request) 
    {
        $testOne = new TestOne();
        $testOne->setName($request->name);
        $testOne->setAge($request->age);
        $testOne->setGender($request->male);
        return json_encode($testOne->getAll());
    }
}
