<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;
use App\Pilot;

class homeController extends Controller
{
    public function home() {

        $cars = Car::all();

        return view('pages.home', compact('cars'));
    }

    public function show($id) {

        $pilot = Pilot::findOrFail($id);

        return view('pages.pilot', compact('pilot'));
    }
}
