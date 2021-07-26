<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class UserController extends Controller
{
    public function index(){
        
        $users = User::get();

        return view('index', compact('users'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
    
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make('password'); // password
        $user->email_verified_at = now();
        $user->remember_token = Str::random(10);

        $user->save();

        return redirect()->route('index')->with('success','User created successfully.');

    }

    public function edit(User $user){
       
        return view('edit', compact('user'));
    }

    public function update(Request $request){

        $request->validate([
            'name' => 'required',
            'id' => 'required',
            'email' => 'required',
            'password' => 'required',
            'email_verified_at' => 'required',
            'remember_token' => 'required'
        ]);

        $usuario = User::find($request->id);
        $usuario->id= $request->id;
        $usuario->name= $request->name;
        $usuario->email= $request->email;
        $usuario->password = $request->password; // password
        $usuario->email_verified_at = $request->ver_email;
        $usuario->remember_token = $request->remember_token;
        $usuario->save();

        return redirect()->route('index')->with('success','User created successfully.');

    }

    public function destroy(User $user){

        $delete  = User::where('id', $user->id)->delete();

        $users=  User::get(); //Obtenemos a todos los usuarios
        return view('index', compact('users'));

    
        
    }

    
}
