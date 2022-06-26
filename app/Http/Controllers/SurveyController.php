<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Illuminate\Support\Facades\Auth;

class SurveyController extends Controller
{
    public function saveData(Request $request) {
        $id = Auth::user();

        $data = new Survey();
        $data->user_id = $id->id;
        $data->type = $request->type;
        $data->actual_mileage = $request->actual_mileage;
        $data->work_days = $request->work_days;
        $data->petrol_per_day = $request->petrol_per_day;
        $data->primary_cost = $request->primary_cost;
        $data->average_monthly_income = $request->average_monthly_income;
        $data->fin_goal = $request->fin_goal;
        $data->save();
        return redirect('home');
    }
}
