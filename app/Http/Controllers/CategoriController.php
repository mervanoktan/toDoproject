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

   public function createPage(){
       return view('panel.categories.create');
   }


public  function postCategory(request $request){



       $r =new Category();
        $r->name=$request->Category_name;

        $r->is_active=$request->Category_status;
         $r->save();

         return redirect()->route('panel.categories')->with(['success'=> 'Kategori Başarıyla Oluşturuldu']);

}

}
