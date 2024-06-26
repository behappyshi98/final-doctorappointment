<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function index()
    {
        $users=User::get();
        return view('userPart.userIndex' ,compact('users'));
    }




    public function destroy($id)
    {
        $user=User::findOrFail($id);
        $user->delete();
        return redirect()->back()->with('status','patient was deleted');
    }


}
