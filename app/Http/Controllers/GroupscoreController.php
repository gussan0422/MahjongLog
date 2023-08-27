<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupscore;
use App\Models\Gamescore;

class GroupscoreController extends Controller
{
    public function groupscoreindex(Groupscore $groupscore)
    {
        return view('groupscores.groupscoreindex')->with(['groupscores' => $groupscore->getPaginateByLimit()]);
    }
    
    public function show (Groupscore $groupscore)
    {
        return view('groupscores.show')->with(['groupscore' => $groupscore]);
    }
    
    public function create()
    {
        return view('groupscores.groupscoreindex');
    }
    
    public function store(Request $request, Groupscore $groupscore, Gamescore $gamescore)
    {
        $input = $request['gamescore'];
        $input['groupscore_id'] = $groupscore->id;
        // dd($input);
        $gamescore->fill($input)->save();
        $groupscore['sumgamescore01'] = $groupscore['sumgamescore01'] + $input['gamescore01'];
        $groupscore['sumgamescore02'] = $groupscore['sumgamescore02'] + $input['gamescore02'];
        $groupscore['sumgamescore03'] = $groupscore['sumgamescore03'] + $input['gamescore03'];
        $groupscore['sumgamescore04'] = $groupscore['sumgamescore04'] + $input['gamescore04'];
        $groupscore->update();
        return redirect('/logs/' . $groupscore->id);
    }
}
