<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return view('pages.index');
    }
    public function login() {
        return view('pages.login');
    }
    public function register() {
        return view('pages.reg');
    }
}
