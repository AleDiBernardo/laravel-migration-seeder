<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index() {
        $today = Carbon::today()->toDateString();
        // dd($today);
        $trainsList = Train::whereDate('data', $today)->get(); // array di oggetti
        return view('home', compact('trainsList','today'));
    }
}
