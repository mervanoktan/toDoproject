@extends('panel.layout.app')


@section('content')

<div  class="card p-4">

        <div class="card-header">
             <h3> Kategori Oluştur</h3>

        </div>

         <div class="card-body">
             <form action="{{route('panel.categoryAdd')}}" method="POST">
                 @csrf
                 <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">KAtegori Adı</label>
                     <input type="text" class="form-control"  placeholder="Lütfen Kategori Adı Yazınız" name="Category_name" >

                     <label for="exampleFormControlInput1" class="form-label mt-3">Kategori Durumu </label>
                     <select name="Category_status"  id="" class="form-control">
                         <option value="1">Aktif</option>
                         <option value="0">Pasif</option>


                     </select>
                 </div>
                 <button type="submit" class="btn btn-info"> Kaydet </button>
             </form>

             </div>

</div>

@endsection
