@extends('panel.layout.app')


@section('content')

    <div  class="card p-4">

        <div class="card-header">
            <h3>Güncelle</h3>
        </div>

        <div class="card-body">


            <br><br><br>

            <form action="{{route('panel.updateCategory')}}", method="POST">
                @csrf
                <input type="hidden" value="{{$category->id}}" name="catid">



                <label for="">Kategori Adı : </label>
                <input type="text" class="form-control" name="catName" value="{{$category->name}}">

                <label for="" class="mt-3">Kategori Durumu : </label>
               <select id=" " class="form-control" name="catStatus">
                   <option value="1" @if($category->is_active==1) selected @endif>Aktif</option>
                   <option value="0"@if($category->is_active==0)selected @endif>Pasif</option>
               </select>
                 <button type="sumbit" class="btn btn-success mt-3"> Güncelle</button>

            </form>

        </div>

    </div>

@endsection
