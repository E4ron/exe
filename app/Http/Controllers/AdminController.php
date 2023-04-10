<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.app');
    }
    public function item() {
        return view('admin.items.index');
    }
    public function itemCreate() {
        return view('admin.items.create');
    }
    public function itemEdit() {
        return view('admin.items.edit');
    }
}
