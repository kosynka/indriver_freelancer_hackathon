<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllData() {
        $data = Data::get()->toJson(JSON_PRETTY_PRINT);
        return response($data, 200);
    }
}
