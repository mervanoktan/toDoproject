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
            @if(session('errors'))
                <div class="alert alert-danger alert-dismissible" role="alert"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            {{session('errors')}}
                        </font></font><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Kapalı"></button>
                </div>
            @endif




            <h3> Tasklar </h3>
            <a href="{{route('panel.CreateTasksPage')}}" class="btn btn-sm btn-success">  Yeni Task Oluştur  </a>
        </div>

        <div class="card-body">
            <div class="card">

               <table>
                   <thead>

                   </thead>
                 <tbody>

                   @foreach($tasks as $t)
                        <tr>
                            <td>{{$t->content}}</td>
                        </tr>

                   @endforeach
                 </tbody>

               </table>

            </div>

        </div>

    </div>
@endsection
