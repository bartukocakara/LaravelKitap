@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Siparişler</h4>
                        <p class="card-category">Sipariş Listesi</p>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>Alıcı</th>
                                    <th>Adres</th>
                                    <th>Telefon</th>
                                    <th>Mesaj</th>
                                    <th>Düzenle</th>
                                    <th>Sil</th>
                                </tr>
                            </thead> 
                            <tbody>
                            @foreach ($data as $key=>$value)
                                <tr>
                                <td>{{\App\User::getField($value['userid'], 'name')}}</td> 
                                <td>{{$value['adres']}}</td>
                                <td>{{$value['telefon']}}</td>
                                <td>{{$value['mesaj']}}</td>
                                <td><a href="{{route('admin.order.detail', ['id'=>$value['id']])}}">Detay</a></td>
                                <td><a href="{{route('admin.order.delete', ['id'=>$value['id']])}}">Sil</a></td>
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