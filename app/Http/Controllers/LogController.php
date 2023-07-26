<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gamescore;
use App\Models\Groupscore;

class LogController extends Controller
{
    public function index(Gamescore $gamescore, Groupscore $groupscore)
    {
        return view('gamescores.index')->with(['gamescores' => $gamescore->getPaginateByLimit(), 
                                               'groupscores' => $groupscore->get()]);
    }
    
    public function show(Gamescore $gamescore)
    {
        return view('gamescores.show')->with(['gamescore' => $gamescore]);
    }
}
