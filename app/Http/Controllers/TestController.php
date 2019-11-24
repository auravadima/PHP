<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Facades\TestBasicServiceFacade;

class TestController extends Controller
{
    public function getOne()
    {
        return TestBasicServiceFacade::getTestOneTypes();
    }

    public function setOne(Request $request)
    {
        return TestBasicServiceFacade::setTestOne
        (
            $request->name,
            $request->age,
            $request->male
        );
    }
}
