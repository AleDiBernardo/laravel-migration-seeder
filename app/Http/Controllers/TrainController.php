<?php

namespace App\Http\Controllers;
use App\Models\Train;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index() {
        $today = Carbon::today()->toDateString();
        // dd($today);
        $trainsList = Train::whereDate('data', $today)->get(); // array di oggetti

        // Ottieni il nome della tabella dal modello Train
        $tableName = (new Train)->getTable();
        
        // Ottieni i nomi delle colonne della tabella
        $columns = Schema::getColumnListing($tableName);

        return view('home', compact('trainsList','today','columns'));
    }
}
