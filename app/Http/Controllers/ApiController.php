<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class ApiController extends Controller
{
    public function index()
    {
        $data = Survey::all();

        return response()->json([
            'data' => $data
        ]);
    }
}
