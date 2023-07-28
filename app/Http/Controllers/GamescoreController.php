<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gamescore;
use App\Models\Groupscore;
use App\Models\User;

class GamescoreController extends Controller
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
    
    public function usersshow(User $user)
    {
        return view('users.usersshow')->with(['users' => $user->get()]);
    }
    
    public function userscreate()
    {
        return view('users.userscreate');
    }
    
    public function usersstore(Request $request, User $user)
    {
        $input = $request['user'];
        $user->fill($input)->save();
        return redirect('/logs/' . $user->id);
    }
}
