<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TestBasicService;

class TestController extends Controller
{
    private $testService;

    public function __construct(TestBasicService $service) 
    {
        $this->testService = $service;
    }

    public function getOne() 
    {
        return $this->testService->getTestOneTypes();
    }

    public function setOne(Request $request) 
    {
        return $this->testService->setTestOne
        (
            $request->name,
            $request->age,
            $request->male
        );
    }
}
