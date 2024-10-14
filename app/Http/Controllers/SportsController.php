<?php

namespace App\Http\Controllers;
use App\Models\Sport;
use Illuminate\Http\Request;
class SportsController extends Controller
{
    //


public function index()
{
    $sports = Sport::with('participants')->get();
    return view('sports.index', compact('sports'));
}

}
