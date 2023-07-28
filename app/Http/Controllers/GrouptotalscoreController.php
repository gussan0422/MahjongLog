<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grouptotalscore;
use App\Models\Groupscore;

class GrouptotalscoreController extends Controller
{
    public function grouptotalscoreindex(Grouptotalscore $grouptotalscore, Groupscore $groupscore)
    {
        return view('grouptotalscores.grouptotalscoreindex')->with(['grouptotalscores' => $grouptotalscore->getPaginateByLimit(),
                                                                    'groupscores' => $groupscore->get()]);
    }
}
