@extends('panel.layout.app')


@section('content')
<div class="card p-3">
      <div class="card-header">
          @if(session('success'))
              <div class="alert alert-success alert-dismissible" role="alert"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                          {{session('success')}}
                      </font></font><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapalı"></button>
              </div>
          @endif


        <h3> Kategoriler </h3>
          <a href="{{route('panel.categoriesCreatePage')}}" class="btn btn-sm btn-success">  Yeni Kategori Oluştur  </a>
      </div>

     <div class="card-body">
         <div class="card">
             <h5 class="card-header">Kategori Listesi</h5>
             <p class="ms-2">Kategori listesi aşağıda bulunmaktadır</p>
             <div class="table-responsive text-nowrap">
                  @if($kategoriler->first())
                 <table class="table">
                     <thead>
                     <tr>
                         <th>Kategori Adı</th>
                         <th>Durum</th>
                         <th>Oluşturma Tarihi</th>
                         <th>İşlemler</th>
                     </tr>
                     </thead>
                     <tbody class="table-border-bottom-0">
                     @foreach($kategoriler as $k)
                         <tr>
                             <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$k->name}}</strong></td>

                             <td>
                                 @if($k->is_active==1)
                                 Aktif
                                 @else
                                 Pasif
                                 @endif

                             </td>

                             <td>
                                {{$k->created_at}}
                             </td>
                             <td>
                             <button class="btn btn-sm btn-success"> Güncelle  </button>
                             <button class="btn btn-sm btn-warning"> Sil  </button>

                             </td>

                         </tr>
                     @endforeach

                     </tbody>
                 </table>
                 @else
                       <p>Henüz Hiç Kategori Oluşturmadınız </p>

                 @endif
             </div>
         </div>

     </div>

</div>
@endsection
