<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyController extends Controller
{
    public function saveData(Request $request) {
        $data = new Survey();
        return $request;
    }
}
