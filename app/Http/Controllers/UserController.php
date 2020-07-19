<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{


	public function index()
    {
        $contacts = User::where('role', '=', 'member')->get();

    return view('member-list', compact('contacts'));
    }

    public function destroy($id){
    User::find($id)->delete($id);

    return redirect()->back()->with('message', 'Deleted Successfully');

}

   public function edit($id){

    $member = User::find($id)->first();

	return view('member-edit', compact('member'));

}    

}
