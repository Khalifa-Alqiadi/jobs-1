<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function showJobs(){
        return view('admin.jobs.jobs');
    }
    public function addJobs(){
        return view('admin.jobs.jobs?do=Add');
    }
    public function editJobs(){
        return view('admin.jobs.jobs?do=Edit&jobid=1');
    }
}
