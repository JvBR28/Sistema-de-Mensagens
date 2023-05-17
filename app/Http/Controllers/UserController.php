<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index() {

        $users = User::all();
    
        //return view('welcome', ['messages' => $messages]);

        return response()->json($users, 200);

    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {

        $users = new User;

        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->acesso = $request->acesso;

        $users->save();


        return response()->json($users, 200);
    }

    public function show($id) {
        $users = User::findOrFail($id);

        //return view('messages.show', ['message' => $message]);
        return response()->json($users, 200);
    }
    
}
