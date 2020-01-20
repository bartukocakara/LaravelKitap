@extends('layouts.admin')
@section('header')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.kategori.create')}}" class="btn btn-success">Kategori Ekle</a>
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Kategoriler</h4>
                        <p class="card-category">Kategori Listesi</p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <?php /* <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>İsim</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead> 
                            <tbody>
                            @foreach ($data as $key=>$value)
                                <tr>
                                <td>{{$value['name']}}</td> 
                                <td><a href="{{route('admin.kategori.edit', ['id'=>$value['id']])}}">Düzenle</a></td>
                                <td><a href="{{route('admin.kategori.delete', ['id'=>$value['id']])}}">Sil</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table> */ ?>
                        {{ $data->links()}}
                        <table id="example" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>isim</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
@section('footer')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
        $('#example').DataTable( {
            lengthMenu : [[25, 100, -1], [25, 100, 'All']],
            processing : true,
            serverSide : true,
            ajax : {
                type : 'POST',
                headers : {'X_CSRF-TOKEN' : '{{ csrf_token()}}'},
                url : '{{route('admin.kategori.getData')}}',
            },
            
            "columns": [
                { data : 'name', name : 'name' },
                { data : 'edit', name : 'edit', orderable : false, searchable : false},
                { data : 'delete', name : 'delete', orderable : false, searchable : false}
                ]
            } );
    </script>
@endsection