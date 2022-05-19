<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;


class UserController extends Controller
{

    public function index() {

            $users = User::all();

        return view('users.index', compact('users'));

    }


    public function create() {

        return view('users.create');

    }


    public function store(UserRequest $request) {

            $validated = $request->validated();
            User::create($validated)->save();


        return redirect('users')->with('success', 'Usuário criado!');
         

    }
    public function delete($id) {

        $user = User::find($id);

        return view('users.delete', compact('user'));

    }
    
    public function destroy(User $user) {

        $user->delete();

        return redirect()->route('users.index')->with('delete','Usuário deletado.');
       

    }
    public function edit(User $user) {
    

        return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user) {

        $validated = $request->validated();
        $user->update($request->all());

        $validated = $request->validated();
        return redirect()->route('users.index')->with('success','Usuário atualizado.');

    }
}
