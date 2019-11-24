<?php

namespace App;

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

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function setAge($age) 
    {
        $this->age = $age;
    }

    public function setGender($male) 
    {
        $this->male = $male;
    }
}