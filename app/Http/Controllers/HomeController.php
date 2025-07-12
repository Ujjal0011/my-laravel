<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        DB::table('users')->insert([
            'name'=>'Ujjl0011',
            'email'=>'ujjal.0011@yahoo.com',
            'password'=>'123456'
        ]);
        return view('welcome');
    }

    public function about() {
        return view('about');
    }
}
