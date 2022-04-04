<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{
    //
    public function showCompanies(){
        return view('admin.companies.companies');
    }
    public function addCompanies(){
        return view('admin.companies.companies?do=Add');
    }
    public function editCompanies(){
        return view('admin.companies.companies?do=Edit&comid=1');
    }
}
