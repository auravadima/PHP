<?php

namespace App\Services;

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

class TestBasicService 
{
  private $testOne;

  public function __construct() 
  {
    $this->testOne = new TestOne();
  }

  public function getTestOneTypes() 
  {
    return json_encode($this->testOne->getTypes());
  }

  public function setTestOne($name, $age, $male) 
  {
    $this->testOne->setName($name);
    $this->testOne->setAge($age);
    $this->testOne->setGender($male);
    return json_encode($this->testOne->getAll());
  }
}