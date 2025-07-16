<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class CategoriController extends Controller
{
    public function index(){
        $kategoriler=category::get();

        return view('panel.categories.index',compact('kategoriler'));

    }
}
