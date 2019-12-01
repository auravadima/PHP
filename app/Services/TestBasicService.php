<?php

namespace App\Services;

use App\TestOne;
use App\Test;

class TestBasicService
{
    private $testOne;

    public function __construct(TestOne $testOne)
    {
        $this->testOne = $testOne;
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

    public function getTestById($id)
    {
        return json_encode(Test::findById($id));
    }
}
