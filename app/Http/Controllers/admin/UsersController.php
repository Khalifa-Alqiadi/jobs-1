<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class UsersController extends Controller
{
    public function showUsers(){
        return view('admin.users.users');
    }
    public function addUser(){
        return view('admin.users.users?do=Add');
    }
    public function editUser(){
        return view('admin.users.users?do=Edit&userid=1');
    }
    public function register(Request $request){

        Validator::validate($request->all(),[
            'username'=>['required','min:3','max:10'],
            'email'=>['required','email','unique:users,email'],
            'password'=>['required','min:5'],
            'avatar'=>'required'


        ],[
            'username.required'=>'this field is required',
            'username.min'=>'can not be less than 3 letters', 
            'email.unique'=>'there is an email in the table',
            'email.required'=>'this field is required',
            'email.email'=>'incorrect email format',
            'password.required'=>'password is required',
            'password.min'=>'password should not be less than 3',
            'avatar.required'=>'this field is required'


        ]);

        $u=new User();
        $u->name=$request->username;
        $u->password=Hash::make($request->password);
        $u->email=$request->email;
        $u->avatar=file($request->avatar);
        if($u->save())
        return view('admin.users.users');

    }
}
