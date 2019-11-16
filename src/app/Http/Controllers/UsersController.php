<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function Psy\debug;

class UsersController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.show', ['user' => $user]);
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('user.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::where('id', $id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

       return redirect('users');
    }

    public function destroy($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();

        return redirect('users');
    }
}
