@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <a href="{{route('admin.yayinevi.create')}}" class="btn btn-success">Yayın Evi Ekle</a>
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Yayın Evleri</h4>
                        <p class="card-category">Yayın Evleri Listesi</p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
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
                                <td><a href="{{route('admin.yayinevi.edit', ['id'=>$value['id']])}}">Düzenle</a></td>
                                <td><a href="{{route('admin.yayinevi.delete', ['id'=>$value['id']])}}">Sil</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $data->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection