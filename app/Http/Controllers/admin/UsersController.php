<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
