<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index(){
        return view('admin.promotion.index');
    }

    public function create(){
        return view('admin.promotion.create');
    }
}
