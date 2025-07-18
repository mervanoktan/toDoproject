@extends('panel.layout.app')




@section('content')

    <div class="card p-3">
          <div class="card-header">
              <h2>Görev Oluştur</h2>
          </div>

        <div class="card-body">
            <form action="{{route('panel.addTask')}}"method="POST">
                @csrf
                <div>
                    <label for="defaultFormControlInput" class="form-label">Başlık:</label>
                    <input type="text"  class="form-control" name="title">

                    <label for="defaultFormControlInput" class="form-label">İçerik:</label>
                    <input type="text"  class="form-control" name="content">

                    <label for="defaultFormControlInput" class="form-label">Kategori:</label>
                    <select name="category" id="" class="form-control">
                        <option selected value=""disabled>Lütfen Seçim Yapınız</option>
                         @foreach($catogories as $c)

                              <option value="{{$c->id}}">{{$c->name}}</option>

                        @endforeach




                    </select>

                    <label for="defaultFormControlInput" class="form-label">Durum:</label>
                    <select name="status" id="" class="form-control">
                        <option selected value=""disabled>Lütfen Seçim Yapınız</option>
                        <option value="0">Yapılmadı</option>
                        <option value="1">Yapılıyor</option>
                        <option value="2">Ertelendi</option>
                        <option value="3">İptal Edildi</option>
                    </select>
                    <label for="defaultFormControlInput" class="form-label">Son Tarih:</label>
                    <input type="datetime-local"  class="form-control" name="deadline">
                        <button type="sumbit" class="btn btn-success mt-3">Kaydet</button>
                </div>
            </form>
        </div>



    </div>

@endsection
