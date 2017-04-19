<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile($name)
    {
    	$user = User::where('name', $name)->first();
    	if(!$user){
    		abort(404);
    	}

        $statuses = $user->statuses()->notReply()->get();

    	return view('profile.index')
            ->with('user', $user)
            ->with('statuses', $statuses)
            ->with('authUserIsFriend', Auth::user()->isFriendsWith($user));
    }

    public function getEdit()
    {
    	return view('profile.edit');
    }

    public function postEdit(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|regex:/^[\pL\s\-]+$/u',
    		'surname' => 'required|regex:/^[\pL\s\-]+$/u',
    		//'location' => 'max:20',
    	]);

    	Auth::user()->update([
    		'name' => $request->input('name'),
    		'surname' => $request->input('surname'),
    		//'location' => $request->input('location');
    	]);
        alert()->success('Änderungen gespeichert <br>-<br> Cambios guardados', 'Pefekto!')->html()->persistent("Oki doki");
        return redirect()->route('profile.edit')->with('success', 'Änderungen gespeichert - Cambios guardados');


    }
}
