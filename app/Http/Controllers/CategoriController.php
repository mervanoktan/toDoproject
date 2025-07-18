<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoriController extends Controller
{
    public function index(){
        $kategoriler=category::where('user_id',Auth::id())->get();

        return view('panel.categories.index',compact('kategoriler'));


    }

   public function createPage(){
       return view('panel.categories.create');
   }


public  function postCategory(request $request)
{


    $r = new Category();
    $r->name = $request->Category_name;
    if ($request->category_status == 'Aktif') {

        $r->is_active = 1;
    } else {
        $r->is_active = 0;
    }


    $r->user_id = Auth::id();


    $r->save();

    return redirect()->route('panel.categories')->with(['success' => 'Kategori Başarıyla Oluşturuldu']);
}



public function updatePage($a){
       //where(sütünadı , ne aranıyor)
       //$category= Category::where('id',$a)->get();


      //$category= Category::where('id',$a)->first();  aşağıdaki sorgu ile aynı
      $category= Category::find($a);


      return view('panel.categories.update',compact('category')); ;

}
public function updateCategory(Request $request){
        //dd($request->all()); //catName catid

        $request->validate([
            //form_name'=> kurallar doğrulama işine yarar
             'catStatus'=> 'min=0|max:1|',
              'catName'=> 'min:3'

        ]);

        $category=Category::find($request->catid);
        if($category!=null){
        $category->name= $request->catName;
        $category->is_active= $request->catStatus;
        $category->save();
            return redirect()->route('panel.categories')->with(['success'=> 'Kategori Başarıyla Güncellendi']);

    }
     else
     {

         return redirect()->route('panel.categories')->with(['errors'=> 'Bir Hata Oluştu Lütfen  Tekrar Deneyiniz']);

     }


}

 public function deleteCategory($id){
  $category = Category::find($id);
   if($category->deleted_at==null){

       $category->delete();
       return redirect()->route('panel.categories')->with(['success'=> 'Kategori Başarıyla Silindi']);
   }
   else {
       return redirect()->route('panel.categories')->with(['errors'=> 'Bir Hata Oluştu Lütfen  Tekrar Deneyiniz']);
   }




 }
}
