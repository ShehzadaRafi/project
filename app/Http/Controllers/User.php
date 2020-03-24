<?php

namespace App\Http\Controllers;
use App\user_type;
use Illuminate\Http\Request;

class User extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function job()
    {
        return view('user.job');
    }
    public function candidate()
    {
        return view('user.candidate');
    }
    public function employer()
    {
        return view('user.employer');
    }
    public function blog()
    {
        return view('user.blog');
    }
}
