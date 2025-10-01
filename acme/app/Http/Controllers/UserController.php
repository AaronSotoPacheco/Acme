<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function getUsers(){
        /*Select * from users*/
        $data =User::all();
       // dd($data);
       return view("admin.users")->with('usuarios',$data);
    }
    public function createUsers(Request $request){
        //dd($request->email);

        //reglas de validacion
        $request->validate([
            "name"=> 'required|min:3',
            "nivel" => 'required',

            "email"=> "required|email|unique:users,email",
            "password" => 'required|min:5',
            "password2" => 'required|min:5|same:password'

        ]);
        //Guardar Registro
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->nivel=$request->nivel;
        $user->password=Hash::make($request->password);
        $user->save();
        //dd("Inserccion correcta");
        return redirect()->back()->with('success', "Usuario Insertado correctamente");




    }

}
