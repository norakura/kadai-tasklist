<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::paginate(2);
        
        return view('users.index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        
        return view('users.show', [
            'user' => $user,
        ]);
    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', [
            'user' => $user,
        ]);
    }

    public function update(Request $request, $id)
    {
        //役割：editから送られてくるフォームを処理
        $this->validate($request, [
            'name' => 'required|max:50',   // 追加
        ]);

        $user = User::find($id);
        $user->name = $request->name;

        $user->save();
        
        return view('users.show', [
            'user' => $user,
        ]);
    }    
}
