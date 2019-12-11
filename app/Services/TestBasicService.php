<?php

namespace App\Services;

use App\Exceptions\MyTestException;
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

    public function getTestByText($text)
    {
        return json_encode(Test::findByText($text));
    }

    public function getException() {
        $result = Test::findById("qwertyuiop");
        throw_if($result == null, MyTestException::class);
        return json_encode($result);
    }
}
