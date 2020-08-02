<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Requests\UserRequest;

class UsersController extends Controller
{
    public function returnUsers() {
    	$users = new User();
    	$users = User::all();
    	return view('view',['users'=>$users]);
    }
     public function insert(UserRequest $request)
    {
    	$makeUser = new User();
    	$makeUser->name = $request->input('form_section__item_input');
    	$makeUser->text = $request->input('form_section__item_textarea');

    	$makeUser->save();

    	return redirect()->route('show');
       
    }
}
