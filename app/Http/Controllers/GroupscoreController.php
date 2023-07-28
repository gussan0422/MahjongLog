<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groupscore;

class GroupscoreController extends Controller
{
    public function groupscoreindex(Groupscore $groupscore)
    {
        return view('groupscores.groupscoreindex')->with(['groupscores' => $groupscore->getPaginateByLimit()]);
    }
}
