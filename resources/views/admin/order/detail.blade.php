@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                @if(session('status'))
                <div class="alert alert-primary" role="alert">
                    {{ session('status')}}
                  </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Sipariş Detayı</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Alıcı :</label>
                                    <label for=""> {{\App\User::getField($data[0]['userid'], 'name')}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Adres :</label>
                                    <label for=""> {{$data[0]['adres']}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Telefon :</label>
                                    <label for=""> {{$data[0]['telefon']}}</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Mesaj :</label>
                                    <label for=""> {{$data[0]['mesaj']}}</label>
                                </div>
                            </div>
                        </div>
                        @foreach (json_decode($data[0]['json'], true) as $key => $value)
                        <div class="row">
                            <div class="col-md-12 pr-1">
                                <div class="form-group">
                                    <label>Kitap Adı : </label>
                                    {{$value['name']}}
                                    <br>
                                    <label>Kitap Fiyatı : </label>
                                    {{$value['fiyat']}} TL
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection